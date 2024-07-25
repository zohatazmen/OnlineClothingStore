<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        
    
        // Fetch the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (! $user) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

        // Pass the user data to the view
        return view('frontend.account', compact('user'));
    }

    public function edit()
    {
        // Fetch the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (! $user) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

        // Pass the user data to the view
        return view('frontend.account-edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Fetch the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (! $user) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|string|max:20',
        ]);

        // Update user information
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        // Redirect with success message
        return redirect()->route('account')->with('success', 'Account updated successfully.');
    }
}