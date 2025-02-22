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
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock_quantity' => 'required|integer',
            'reorder_level' => 'required|integer',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_featured = $request->has('is_featured') ? 1 : 0;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('img'), $imageName);
            $product->photo = $imageName;
        }

        if ($product->save()) {
            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        } else {
            return back()->with('error', 'Failed to create product.');
        }
    }

    public function show(Product $product)
    {
        return view('pages.erp.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('pages.erp.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock_quantity' => 'required|integer',
            'reorder_level' => 'required|integer',
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_featured = $request->has('is_featured') ? 1 : 0;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($product->photo && file_exists(public_path('img/' . $product->photo))) {
                unlink(public_path('img/' . $product->photo));
            }

            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('img'), $imageName);
            $product->photo = $imageName;
        }

        if ($product->save()) {
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Failed to update product.');
        }
    }

    public function destroy(Product $product)
    {
        // Delete photo if it exists
        if ($product->photo && file_exists(public_path('img/' . $product->photo))) {
            unlink(public_path('img/' . $product->photo));
        }

        if ($product->delete()) {
            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        } else {
            return back()->with('error', 'Failed to delete product.');
        }
    }
}
