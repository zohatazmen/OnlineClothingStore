<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Log credentials for debugging (do not log passwords in production)
        Log::info('Login attempt', ['email' => $request->email]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('Login successful', ['email' => $request->email]);

            return redirect()->route('account')->with('success', 'Login successful.');
        }

        Log::warning('Login failed', ['email' => $request->email]);

        return redirect()->route('login')->with('error', 'Invalid email or password.')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Log::info('User logged out', ['email' => $request->email]);

        return redirect()->route('login')->with('success', 'You have been logged out!');
    }
}
