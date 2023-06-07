<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        //adminpanel

    //display products tables
    public function index()
    {
        return view('admin.pages.products.index');
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function store(Request $request)
    {
        return 'Save Products';
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
