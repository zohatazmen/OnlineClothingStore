<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                $admin = Auth::guard('admin')->user();

                if ($admin->role == 2) { // Replace with your role check logic
                    return redirect()->route('admin.dashboard');
                } else {
                    Auth::guard('admin')->logout();

                    return redirect()->route('admin.login')
                        ->withErrors(['email' => 'Unauthorized access.'])
                        ->withInput($request->only('email'));
                }
            } else {
                return redirect()->route('admin.login')
                    ->withErrors(['email' => 'The provided credentials do not match our records.'])
                    ->withInput($request->only('email'));
            }
        } else {
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }
}
