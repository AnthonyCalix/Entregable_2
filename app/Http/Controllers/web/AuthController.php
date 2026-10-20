<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('email', $credenciales['email'])->first();

        if ($usuario && Hash::check($credenciales['password'], $usuario->password)) {
            // Iniciar sesión guardando en session
            session(['user_id' => $usuario->id, 'user_name' => $usuario->nombre]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Las credenciales no coinciden.'])->withInput();
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:6|confirmed',
        ]);

        Usuario::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('login')->with('success', 'Cuenta creada con éxito. Inicia sesión.');
    }

    public function dashboard()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('login');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}