<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $top_products = Product::inRandomOrder()->limit(4)->get();
        return view('home', compact('top_products'));
    }

    public function cat()
    {
        $products = Product::all();
        return view('catalogue', compact('products'));
    }

    public function product_details($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product', compact('product'));
    }
}
