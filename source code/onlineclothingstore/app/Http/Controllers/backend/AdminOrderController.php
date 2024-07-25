<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('backend.orders', compact('orders'));
    }

    public function create()
    {
        return view('backend.order-add');
    }

    public function store(Request $request)
    {
        // Validate and store the order
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'address' => 'required',
            'cart' => 'required|json',
            'total_price' => 'required|numeric',
        ]);

        Order::create($request->all());

        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully.');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('backend.order-edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the order
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'address' => 'required',
            'cart' => 'required|json',
            'total_price' => 'required|numeric',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
