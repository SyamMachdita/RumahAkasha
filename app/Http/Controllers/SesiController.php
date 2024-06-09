<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'staff') {
                return redirect('/staff/dashboard');
            } elseif (Auth::user()->role == 'owner') {
                return redirect('/owner/dashboard');
            } elseif (Auth::user()->role == 'customer') {
                return redirect()->intended('/home');
            }
        } else {
            return redirect('/login')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    function register()
    {
        return view('auth.register');
    }

    function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'full_name' => 'required',
            'name' => 'required',
            'no_telp' => 'required|numeric|unique:users',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah pernah digunakan, silakan gunakan email lain',

            'full_name.required' => 'Nama lengkap wajib diisi',

            'name.required' => 'Username wajib diisi',

            'no_telp.required' => 'No Telepon wajib diisi',
            'no_telp.numeric' => 'No Telepon harus berupa angka',
            'no_telp.unique' => 'No Telepon sudah pernah digunakan, silakan gunakan nomor lain',

            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum Password yang dibolehkan adalah 6 karakter',
        ]);

        $data = [
            'email' => $request->email,
            'full_name' => $request->full_name,
            'name' => $request->name,
            'no_telp' => $request->no_telp,
            'password' => Hash::make($request->password), // Hash the password
            'role' => 'customer'
        ];
        User::create($data);

        return redirect('/login'); // Use redirect instead of returning a view
    }
}
