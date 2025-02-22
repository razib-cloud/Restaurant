<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(10); // Paginate results
        return view('pages.erp.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.erp.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'nullable|boolean',
            'stock_quantity' => 'required|integer|min:0',
            'reorder_level' => 'nullable|integer|min:0',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_featured = $request->is_featured ?? false;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('product'), $photoname);
            $product->photo = $photoname;
        } else {
            return back()->with('error', 'Photo upload failed.');
        }

        if ($product->save()) {
            return redirect('products')->with('success', 'Product created successfully!');
        } else {
            return back()->with('error', 'Failed to create product.');
        }
    }


    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('pages.erp.product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('pages.erp.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'nullable|boolean',
            'stock_quantity' => 'required|integer|min:0',
            'reorder_level' => 'nullable|integer|min:0',
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_featured = $request->is_featured ?? false;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($product->photo && file_exists(public_path('products/' . $product->photo))) {
                unlink(public_path('products/' . $product->photo));
            }

            $imageName = $product->id . '.' . $request->photo->extension();
            $request->photo->move(public_path('products'), $imageName);
            $product->photo = $imageName;
        }

        if ($product->save()) {
            return redirect('products')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        // Delete photo if it exists
        if ($product->photo && file_exists(public_path('products/' . $product->photo))) {
            unlink(public_path('products/' . $product->photo));
        }

        $product->delete();
        return redirect('products')->with('success', 'Product deleted successfully!');
    }
}
