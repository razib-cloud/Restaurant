<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $results= Role::get();
        return view('pages.roles.index', compact('results'));

    }


    public function create()
    {
        return view('pages.roles.create');
    }


    public function store(Request $request)
    {  $request->validate([
        'name' => 'required|unique:roles,name',
        'address' => 'required|unique:roles,address',
        'Photo' => 'required|unique:roles,photo',
    ]);

    $result= new Role();
    $result->name= $request->name;
    $result->address= $request->address;
    $result->photo= $request->photo;
    $success= $result->save();

    if ($success) {
        return redirect('role')->with('success', 'New role is created');
    }
    }

    public function show($id)
    {

        $result = Role::find($id);


        if (!$result) {
            return redirect('role')->with('error', 'Role not found.');
        }

      return view('pages.roles.show', compact('result'));
    }


    public function edit(Request $request, $id )

    {

        // print_r($id);
        $result= Role::find($id);
        return view('pages.roles.update', compact('result'));

    }

    public function update(Request $request, $id)
    {
        $result= Role::find($id);
        $result->name= $request->name;
        $result->address= $request->address;
        $result->photo= $request->photo;
        $success= $result->save();


    if ($success) {
        return redirect('role')->with('success', 'Role is updated');
    }


    }


    public function destroy($id)
    {
        Role::destroy($id);
        return redirect('role')->with('success', 'Role is deleted');
    }
}
