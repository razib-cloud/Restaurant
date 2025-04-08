<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        try {
            $products = Product::all();
            if (!$products) {
                $products = "Data Not Found";
            }
            return response()->json(["products" => Product::all()]);
        } catch (\Throwable $th) {

            return response()->json(["error" => $th->getMessage()]);
        }
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
