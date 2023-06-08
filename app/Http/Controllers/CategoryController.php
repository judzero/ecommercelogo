<?php

namespace App\Http\Controllers;

use App\Models\Category;
use index;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.pages.categories.index', ['categories' => $category]);
    }

    public function store(Request $request)
    {
        //validate
        $request->validate([
            'name'=>'required|unique:categories|max:255'
        ]);

        //store
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        //return response
        return back()->with('success', 'Category Saved');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return back()->with('success', 'Category Deleted');
    }
}
