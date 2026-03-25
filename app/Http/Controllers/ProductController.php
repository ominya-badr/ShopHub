<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'is_featured' => 'nullable|boolean',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $image = $request->file('image')?->store('products', 'public');
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'is_featured' => $request->boolean('is_featured'),
            'category_id' => $request->category_id,
            'image' => $image,
        ]);
        session()->flash('success', 'Product created successfully.');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'is_featured' => 'nullable|boolean',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image);
            $image = $request->file('image')->store('products', 'public');
            $product->image = $image;
        }
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'is_featured' => $request->boolean('is_featured'),
            'category_id' => $request->category_id,
        ]);
        session()->flash('success', 'Product created successfully.');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        session()->flash('success', 'Product deleted successfully.');
        return redirect()->route('products.index');
    }
}
