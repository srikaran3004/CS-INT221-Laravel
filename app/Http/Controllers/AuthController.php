<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Dummy authentication
        if ($credentials['email'] === 'admin@example.com' && $credentials['password'] === 'password') {
            Session::put('user', ['role' => 'admin', 'email' => $credentials['email']]);
            return redirect()->route('dashboard');
        } elseif ($credentials['email'] === 'faculty@example.com' && $credentials['password'] === 'password') {
            Session::put('user', ['role' => 'faculty', 'email' => $credentials['email']]);
            return redirect()->route('dashboard');
        } elseif ($credentials['email'] === 'student@example.com' && $credentials['password'] === 'password') {
            Session::put('user', ['role' => 'student', 'email' => $credentials['email']]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:student,faculty,admin'
        ]);

        // In a real application, you would create a user here
        // For the prototype, we'll just log them in
        Session::put('user', ['role' => $validated['role'], 'email' => $validated['email']]);
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Session::forget('user');
        return redirect('/');
    }
} 