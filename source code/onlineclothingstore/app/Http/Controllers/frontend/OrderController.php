<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        $cart = Session::get('cart', []);
        $totalPrice = 0;

        foreach ($cart as $product) {
            $totalPrice += $product['price'] * $product['quantity'];
        }

        Order::create([
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'address' => $request->address,
            'cart' => json_encode($cart),
            'total_price' => $totalPrice,
        ]);

        Session::forget('cart');

        return redirect()->route('checkout')->with('order_success', 'Thank you for your order!');
    }
}