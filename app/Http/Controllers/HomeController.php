<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Meal;
use App\Models\Product;

class HomeController extends Controller
{
    // Home Page

    public function featuredproducts() {
        $featuredProducts = Product::where('is_featured',1)->get();
        return view('home', compact('featuredProducts'));
    }

    // showing products page
    public function index() {
        $products = Product::with('category')->latest()->get();
        $categories = Category::all();
        return view('home-products', compact('products','categories'));
    }

    public function category($id) {
        $products = Product::where('category_id',$id)->get();
        $categories = Category::all();
        return view('home-products', compact('products','categories'));
    }

    // About
    public function about() {
        return view('about');
    }

    // Contact
    public function contact() {
        return view('contact');
    }

    // One Product
    public function product($id) {
        $product = Product::findOrfail($id);
        return view('product', compact('product'));
    }
}
