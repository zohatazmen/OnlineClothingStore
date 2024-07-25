<?php


namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\frontend\Order;
use App\Models\frontend\Product; // Your product model
use App\Models\Review; // Your review model
use App\Models\Promotion; // Your promotion model

class AdminHomeController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $admin = Auth::guard('admin')->user();

            // Fetching statistics
            $totalOrders = Order::count();
            $totalProducts = Product::count();
            $totalReviews = Review::count();
            $totalPromotions = Promotion::count();

            return view('backend.dashboard', compact('admin', 'totalOrders', 'totalProducts', 'totalReviews', 'totalPromotions'));
        }

        return redirect()->route('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}