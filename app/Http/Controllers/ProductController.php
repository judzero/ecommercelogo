<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use index;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        //adminpanel

    //display products tables
    public function index()
    {
        $products = Product::with('category', 'colors')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.products.index', ['products'=>$products]);
    }

    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.pages.products.create', ['categories'=>$categories, 'colors'=>$colors]);
    }

    public function store(Request $request)
    {
        //validate
        $request ->validate([
            'title'=>'required|max:255',
            'category_id'=>'required',
            'colors'=>'required',
            'price'=>'required',
            'image'=>'required|image|mimes:jpeg,png,sv|max:2048'
        ]);

        //image storing
        $image_name = 'products/' . time() . rand(0,9999) . '.' . $request->image->getClientOriginalExtension();
        $request->image->storeAs('public', $image_name);

        //storing data
        $product = Product::create([
            'title'=>$request->title,
            'category_id'=> $request->category_id,
            'price'=> $request->price * 390,
            'image'=> $image_name
        ]);

        $product->colors()->attach($request->colors);

        //
        return back()->with('success', 'Product Saved!');
    }

    public function edit()
    {
        return 'Edit Products';
    }

    public function update()
    {
        return 'Update Products';
    }

    public function destroy($id)
    {
        return 'Delete Products';
    }
}
