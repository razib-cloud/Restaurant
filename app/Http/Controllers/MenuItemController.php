<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuItemController extends Controller
{

    public function index(Request $request)
    {
        $menuItems = MenuItem::with('menu')->paginate(8);
        return view('pages.erp.menu_items.index', compact('menuItems'));
    }




    public function create()
    {
        return view('pages.erp.menu_items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'menus_id' => 'required|integer',
            'product_id' => 'required|integer',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'is_available' => 'required|boolean',
        ]);

        $menuItem = new MenuItem();
        $menuItem->menus_id = $request->menus_id;
        $menuItem->product_id = $request->product_id;
        $menuItem->price = $request->price;
        $menuItem->description = $request->description;
        $menuItem->is_available = $request->is_available;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoName = $request->product_id . "." . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('photos'), $photoName);
            $menuItem->photo = $photoName;
        }

        if ($menuItem->save()) {
            return redirect('menu-items')->with('success', 'Menu Item created successfully!');
        } else {
            return back()->with('error', 'Failed to create menu item.');
        }
    }

    public function show(MenuItem $menuItem)
    {
        return view('pages.erp.menu_items.show', compact('menuItem'));
    }

    public function edit(MenuItem $menuItem)
    {
        return view('pages.erp.menu_items.update', compact('menuItem'));
    }

    public function update(Request $request, $id)
    {
        $menuItem = MenuItem::find($id);
        $menuItem->menus_id = $request->menus_id;
        $menuItem->product_id = $request->product_id;
        $menuItem->price = $request->price;
        $menuItem->description = $request->description;
        $menuItem->is_available = $request->is_available;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoName = $request->product_id . "." . $request->file('photo')->extension();
            $photoPath = public_path('photos/' . $photoName);

            if (file_exists($photoPath)) {
                unlink($photoPath); // Remove old photo if exists
            }

            $request->file('photo')->move(public_path('photos'), $photoName);
            $menuItem->photo = $photoName;
        }

        if ($menuItem->save()) {
            return redirect('menu-items')->with('success', 'Menu Item updated successfully!');
        } else {
            return back()->with('error', 'Failed to update menu item.');
        }
    }

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);

        // Delete the photo file if exists
        if ($menuItem->photo) {
            $photoPath = public_path('photos/' . $menuItem->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        $menuItem->delete();

        return redirect('menu-items')->with('success', 'Menu Item deleted successfully.');
    }
}
