<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_RoleController.php" was generated by ProBot AI.
* Date: 2/20/2025 12:10:59 AM
* Contact: towhid1@outlook.com
*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);
        return view("pages.erp.role.index", ["roles" => $roles]);
    }


    public function create()
    {
        return view("pages.erp.role.create", []);
    }


    public function store(Request $request)
    {
        //Role::create($request->all());
        $role = new Role;
        $role->position = $request->position;
        $role->name = $request->name;
        if (isset($request->photo)) {
            $role->photo = $request->photo;
        }
        date_default_timezone_set("Asia/Dhaka");
        $role->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $role->updated_at = date('Y-m-d H:i:s');

        $role->save();
        if (isset($request->photo)) {
            $imageName = $role->id . '.' . $request->photo->extension();
            $role->photo = $imageName;
            $role->update();
            $request->photo->move(public_path('img'), $imageName);
        }

        return back()->with('success', 'Created Successfully.');
    }


    public function show($id)
    {
        $role = Role::find($id);
        return view("pages.erp.role.show", ["role" => $role]);
    }


    public function edit(Role $role)
    {
        return view("pages.erp.role.edit", ["role" => $role,]);
    }



    public function update(Request $request, Role $role)
    {
        //Role::update($request->all());
        $role = Role::find($role->id);
        $role->position = $request->position;
        $role->name = $request->name;
        if (isset($request->photo)) {
            $role->photo = $request->photo;
        }
        date_default_timezone_set("Asia/Dhaka");
        $role->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $role->updated_at = date('Y-m-d H:i:s');

        $role->save();

        if ($request->file('photo')) {
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $photoPath = public_path('users' . $photoname);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
            $request->file('photo')->move(public_path('users'), $photoname);
            $role->photo = $photoname;
        } else {
            $role->photo = $role->photo;
        }

        if ($role->save()) {
            return redirect('roles')->with('Success', "Roles has been updated");
        } else {
            echo "error";
        };
    }



    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route("roles.index")->with('success', 'Deleted Successfully.');
    }
}
