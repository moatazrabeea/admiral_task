<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::with('images')->get();
        return view('landing',compact('products','categories'));
    }
}
