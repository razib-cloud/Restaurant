<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ReactProductController extends Controller
{
    // Get all products
    public function index()
    {
        return response()->json(['products' => Product::all()], 200);
    }

    

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric'

        ]);

        $product = Product::create($request->all());

        return response()->json(['message' => 'Product created!', 'product' => $product], 201);
    }

    // Get single product
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found!'], 404);
        }

        return response()->json($product, 200);
    }

    // Update product
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found!'], 404);
        }

        $product->update($request->all());

        return response()->json(['message' => 'Product updated!', 'product' => $product], 200);
    }

    // Delete product
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found!'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted!'], 200);
    }
}
