<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        // Validation des entrées
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $administrator = Administrator::where('email', $request->email)->first();
        if ($administrator && Hash::check($request->password, $administrator->password)) {
            Auth::login($administrator); 
            return redirect()->route('home'); 
        }

        return back()->withErrors(['email' => 'Identifiants invalides']);
    }

    public function registerAdmin(RegisterRequest $request)
    {
        $request->validate([
            'email' => 'required|email|unique:administrators,email',
            'name' => 'required|string|max:255',
            'password' => 'required|confirmed|min:8',
        ]);

        $admin = new Administrator();
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->password = Hash::make($request->password);
        $admin->save();

        Auth::login($admin);

        return redirect()->route('home')->with('success', 'Administrateur créé et connecté avec succès !');
    }
}
