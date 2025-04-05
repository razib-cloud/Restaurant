<?php

namespace App\Http\Controllers\api\vue;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{

    public function index()
    {
        try {
            $menus = Menu::all();
            if (!$menus) {
                $menus = "Data Not Found";
            }
            return response()->json(["menus" => Menu::all()]);
        } catch (\Throwable $th) {

            return response()->json(["error" => $th->getMessage()]);
        }
    }


    public function store(Request $request)
    {
        try {
            $menus = new Menu();
            $menus->name = $request->name;
            $menus->status = $request->status;

            $menus->save();

            return response()->json(["res" => $menus]);
        } catch (\Throwable $th) {
            return response()->json(["err" => $th->getMessage()]);
        }
    }

    public function show($id)
    {
        try {
            $menus = Menu::find($id);

            if (!$menus) {
                return response()->json(["message" => "No Data found"]);
            }

            return response()->json(["menus" => $menus]);
        } catch (\Throwable $th) {
            return response()->json(["error" => $th->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        try {
            $menus=  Menu::destroy($id);
            return response()->json(["menus"=> $menus]);
        } catch (\Throwable $th) {
            return response()->json(["menus"=>$th]);
        }
    }
}
