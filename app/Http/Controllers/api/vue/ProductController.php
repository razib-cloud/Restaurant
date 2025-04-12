<?php

namespace App\Http\Controllers\Api\Vue;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public function index()
    // {
    //     try {
    //         $products = Product::all();
    //         if (!$products) {
    //             $products = "Data Not Found";
    //         }
    //         return response()->json(["products" => Product::all()]);
    //     } catch (\Throwable $th) {

    //         return response()->json(["error" => $th->getMessage()]);
    //     }
    // }


    public function index(Request $request)
    {
        $query = Product::with('menu');

        if ($request->search) {
            $query->where('name', 'like', "%{$request->search}%");
        }
        return response()->json($query->paginate(5));
    }


    public function store(Request $request)
    {

        try {
            $product = new Product();
            $product->name=$request->name;
            $product->menus_id=$request->menus_id;
            $product->price=$request->price;
            $product->photo=$request->photo;
            $product->description=$request->description;




            date_default_timezone_set("Asia/Dhaka");
            $product->created_at=date('Y-m-d H:i:s');
            $product->updated_at=date('Y-m-d H:i:s');

            if(isset($request->photo)){
                $product->photo=$request->photo;
            }

            $product->save();
            if(isset($request->photo)){
                $imageName=$product->id.'.'.$request->photo->extension();
                $product->photo=$imageName;
                $product->update();
                $request->photo->move(public_path('products'),$imageName);
            }
            return response()->json(["roles"=>  $product ]);
        } catch (\Throwable $th) {
           return response()->json(["error"=> $th->getMessage()]);
        }

    }


    public function show($id)
    {
        try {
            $product =  Product::find($id);
            return response()->json(["products" =>  $product]);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $product->name = $request->name;
            $product->menus_id = $request->menus_id;
            $product->price = $request->price;
            $product->description = $request->description;

            if ($request->hasFile('photo')) {
                $imageName = $product->id . '.' . $request->photo->extension();
                $request->photo->move(public_path('products'), $imageName);
                $product->photo = $imageName;
            }

            date_default_timezone_set("Asia/Dhaka");
            $product->updated_at = date('Y-m-d H:i:s');

            $product->save();

            return response()->json(["product" => $product]);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()], 500);
        }
    }



    public function destroy($id)
    {
        try {
            $product =  Product::destroy($id);
            return response()->json(["products" => $product]);
        } catch (\Throwable $th) {
            return response()->json(["products" => $th]);
        }
    }
}
