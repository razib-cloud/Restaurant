<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view("pages.erp.product.index", ["products" => $products]);
    }

    public function create()
    {
        return view("pages.erp.product.create", ["categories" => Category::all()]);
    }
    public function store(Request $request)
    {
        //Product::create($request->all());
        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        if (isset($request->photo)) {
            $product->photo = $request->photo;
        }
        $product->is_featured = $request->is_featured;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;
        date_default_timezone_set("Asia/Dhaka");
        $product->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $product->updated_at = date('Y-m-d H:i:s');

        $product->save();
        if (isset($request->photo)) {
            $imageName = $product->id . '.' . $request->photo->extension();
            $product->photo = $imageName;
            $product->update();
            $request->photo->move(public_path('img'), $imageName);
        }

        return back()->with('success', 'Created Successfully.');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view("pages.erp.product.show", ["product" => $product]);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id); // Ensure product exists
        $categories = Category::all();
        return view('pages.erp.product.edit', compact('product', 'categories'));
    }



    public function update(Request $request, Product $product)
    {
        //Product::update($request->all());
        $product = Product::find($product->id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        if (isset($request->photo)) {
            $product->photo = $request->photo;
        }
        $product->is_featured = $request->is_featured;
        $product->stock_quantity = $request->stock_quantity;
        $product->reorder_level = $request->reorder_level;
        date_default_timezone_set("Asia/Dhaka");
        $product->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $product->updated_at = date('Y-m-d H:i:s');

        $product->save();
        if (isset($request->photo)) {
            $imageName = $product->id . '.' . $request->photo->extension();
            $product->photo = $imageName;
            $product->update();
            $request->photo->move(public_path('img'), $imageName);
        }

        return redirect()->route("products.index")->with('success', 'Updated Successfully.');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index")->with('success', 'Deleted Successfully.');
    }
}
