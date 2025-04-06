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
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'required|string|in:active,inactive',
        ]);

        try {
            $menu = Menu::create([
                'name' => $request->name,
                'is_active' => $request->is_active === 'active' ? 1 : 0,
            ]);

            return response()->json(["res" => $menu]);
        } catch (\Throwable $th) {
            return response()->json(["err" => $th->getMessage()], 500);
        }
    }

    // public function store(Request $request)
    // {
    //     $menu = Menu::create([
    //         'name' => $request->name,
    //         'is_active' => $request->status,
    //     ]);

    //     return response()->json($menu, 201);
    // }

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
        try {
            $menu = Menu::findOrFail($id);
            $menu->update($request->only(['name', 'status']));

            return response()->json(["res" => $menu]);
        } catch (\Throwable $th) {
            return response()->json(["err" => $th->getMessage()], 500);
        }
    }



    public function destroy($id)
    {
        try {
            $menus =  Menu::destroy($id);
            return response()->json(["menus" => $menus]);
        } catch (\Throwable $th) {
            return response()->json(["menus" => $th]);
        }
    }
}
