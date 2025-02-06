<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $query = Role::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('address', 'LIKE', "%{$search}%");
        }

        $results = $query->paginate(10); // Paginate results
        return view('pages.roles.index', compact('results'));
    }



    public function create()
    {
        return view('pages.roles.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->address = $request->address;

        if ($request->hasFile('photo')) {
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('photos'), $photoname);
            $role->photo = $photoname;
        } else {
            return back()->with('error', 'Photo upload failed.');
        }

        if ($role->save()) {
            return redirect('role')->with('success', 'Role created successfully!');
        } else {
            return back()->with('error', 'Failed to create role.');
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




    public function edit($id)
    {
        $result = Role::find($id);
        return view('pages.roles.update', compact('result'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $result = Role::find($id);
        $result->name = $request->name;
        $result->address = $request->address;

        if ($request->hasFile('photo')) {
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('photos'), $photoname);
            $result->photo = $photoname;
        }

        if ($result->save()) {
            return redirect()->back()->with('success', 'Role updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update role.');
        }
    }





    public function destroy($id)
    {
        Role::destroy($id);
        return redirect('role')->with('success', 'Role is deleted');
    }


    
}
