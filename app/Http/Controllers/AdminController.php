<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        $data = Product::all();
        return view('create', compact('data'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:2048',
            'price' => 'required'
        ]);

        $imagePath = $request->file('image')->store('public/storage/images');
        $data = new Product([
            'title' => $request->get('title'),
            'image' => $imagePath,
            'price' => $request->get('price'),
        ]);
        $data->save();

        return redirect(route('admin.create'));
    }
}
