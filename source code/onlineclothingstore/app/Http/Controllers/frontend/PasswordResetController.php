<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\RegistrationData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function showForgotForm()
    {
        return view('frontend.forget');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = RegistrationData::where('email', $request->email)->first();
        if (! $user) {
            return back()->withErrors(['email' => 'Email not found.']);
        }

        // Generate token and save it (implement this part)
        $token = Str::random(60);
        // Save token to your password_resets table or similar

        // Send email with reset link (simplified for this example)
        // Use a mail service to send the reset link here

        return back()->with('success', 'Password reset link sent!');
    }

    public function showResetForm($token)
    {
        return view('frontend.reset', compact('token'));
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:8',
        ]);
    
        $user = RegistrationData::where('email', $request->email)->first();
        if (! $user) {
            return back()->withErrors(['email' => 'Email not found.']);
        }
    
        // Additional token validation logic if required
    
        // Update password
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect()->route('login')->with('success', 'Password has been reset!');
    }
    
}