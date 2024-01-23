<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Product::distinct()->pluck('category');

        return view('home', compact('products' , 'categories'));

    }

    public function getAddProduct()
    {
        return view('product.add');
    }

    public function postAddProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required',
            'description' => 'max:1000',
            'category' => 'required'
        ]);

        $product = new Product([
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'category' => $request->input('category')
        ]);

        $product->save();

        return redirect()->back();
    }
}
