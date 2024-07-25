<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('backend.products', compact('products'));
    }

    public function create()
    {
        return view('backend.product-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/frontend/images', $imageName);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'size' => $request->size,
            'color' => $request->color,
            'brand' => $request->brand,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'image' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('backend.product-edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('public/frontend/images/'.$product->image);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/frontend/images', $imageName);
            $product->image = $imageName;
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'size' => $request->size,
            'color' => $request->color,
            'brand' => $request->brand,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete('public/frontend/images/'.$product->image);
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
