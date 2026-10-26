<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function formElements()
    {
        return view('admin.form-elements');
    }

    public function datatable()
    {
        return view('admin.table-datatable');
    }

    public function modals()
    {
        return view('admin.component-modals');
    }

    public function calendar()
    {
        return view('admin.app-fullcalender');
    }

    public function login()
    {
        return view('admin.auth-basic-login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }
}