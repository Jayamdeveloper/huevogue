<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class Analytics extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'The username field is required.',
            'password.required' => 'The password field is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the form inputs.');
        }

        $user = Admin::where('username', $request->input('username'))
            ->orWhere('email', $request->input('username'))
            ->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }

        if (Hash::check($request->input('password'), $user->password)) {
            Auth::attempt(['username'=>$user->username,'password'=>$request->password]);

            return redirect()->intended('admin/dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }

    public function AuthLogin()
    {
        return view("admin-dashboard.dashboard");
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('admin-login')->with('reload', true);
    }
}