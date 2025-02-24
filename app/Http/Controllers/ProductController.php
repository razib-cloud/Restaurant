<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('item')->paginate(8);
        return view("pages.erp.product.index", ["products" => $products]);
    }

    public function create()
    {
        // Fetch all menus from the database
        $menus = Menu::all(); // Assuming you have a Menu model for the menu categories

        return view('pages.erp.product.create', compact('menus')); // Pass the menus variable to the view
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'required|boolean',
            // 'stock_quantity' => 'required|integer|min:0',
            'reorder_level' => 'required|integer|min:0',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_featured = $request->is_featured;
        // $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('products'), $imageName);
            $product->photo = $imageName;
        } else {
            return back()->with('error', 'Photo upload failed.');
        }

        if ($product->save()) {
            return redirect('erp_products')->with('success', 'Product created successfully!');
        } else {
            return back()->with('error', 'Failed to create product.');
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view("pages.erp.product.show", ["product" => $product]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.erp.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'required|boolean',
            'stock_quantity' => 'required|integer|min:0',
            'reorder_level' => 'required|integer|min:0',
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->is_featured = $request->is_featured;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('products'), $imageName);
            $product->photo = $imageName;
        }

        $product->save();

        return redirect()->route("erp_products.index")->with('success', 'Updated Successfully.');
    }

    public function destroy($id)
    {


        product::destroy($id);
        return redirect('erp_products')->with('success', 'Product is deleted');
    }
}
