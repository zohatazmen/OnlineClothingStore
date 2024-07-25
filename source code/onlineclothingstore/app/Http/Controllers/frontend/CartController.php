<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Product; // Use the Product model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);

        return view('frontend.cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Session::get('cart', []);
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $product = Product::findOrFail($productId);
            $cart[$productId] = [
                'quantity' => $quantity,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$request->input('product_id')])) {
            $cart[$request->input('product_id')]['quantity'] = $request->input('quantity');
            Session::put('cart', $cart);

            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart.');
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$request->input('product_id')])) {
            unset($cart[$request->input('product_id')]);
            Session::put('cart', $cart);

            return redirect()->back()->with('success', 'Product removed from cart.');
        }

        return redirect()->back()->with('error', 'Product not found in cart.');
    }

    public function checkout(Request $request)
    {
        // Validate and process the order (not implemented here)
        Session::forget('cart');

        return redirect()->route('shop')->with('success', 'Order placed successfully!');
    }
}
