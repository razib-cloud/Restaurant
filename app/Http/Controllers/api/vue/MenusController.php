<?php

namespace App\Http\Controllers\api\vue;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{

    public function index()
    {
        return response()->json(["menus" =>Menu::all()]);
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
