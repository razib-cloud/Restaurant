<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $categories = $query->paginate(5); // Paginate results
        return view('pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('photos'), $photoname);
            $category->photo = $photoname;
        } else {
            return back()->with('error', 'Photo upload failed.');
        }

        if ($category->save()) {
            return redirect('categories')->with('success', 'Category created successfully!');
        } else {
            return back()->with('error', 'Failed to create category.');
        }
    }

    public function show(Category $category)
    {
        return view('pages.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('pages.categories.update', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = Category::find($id);

        if (!$category) {
            return redirect('/categories')->with('error', 'Category not found.');
        }

        $category->name = $request->name;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($category->photo && file_exists(public_path('photos/' . $category->photo))) {
                unlink(public_path('photos/' . $category->photo));
            }
            // Store the new photo
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('photos'), $photoname);
            $category->photo = $photoname;
        }

        if ($category->save()) {
            return redirect('/categories')->with('success', 'Category updated successfully!');
        } else {
            return back()->with('error', 'Failed to update category.');
        }
    }

    public function destroy($id)
    {


        Category::destroy($id);
        return redirect('categories')->with('success', 'Category is deleted');
    }
}
