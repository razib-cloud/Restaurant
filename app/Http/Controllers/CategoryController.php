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

        $categories = $query->paginate(10); // Paginate results
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

        $category = Category::find($id);
        $category->name = $request->name;

        if ($request->file('photo')) {
            $photoname = $request->name . "." . $request->file('photo')->extension();
            $photoPath = public_path('photos' . $photoname);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
            $request->file('photo')->move(public_path('photos'), $photoname);
            $category->photo = $photoname;
        } else {
            $category->photo = $category->photo;
        }

        if ($category->save()) {
            return redirect('categories')->with('Success', "Category has been updated");
        } else {
            echo "error";
        };
    }




    public function destroy($id)
    {


        Category::destroy($id);
        return redirect('categories')->with('success', 'Category is deleted');
    }
}
