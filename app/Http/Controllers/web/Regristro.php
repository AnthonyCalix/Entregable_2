<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Mostrar formulario de registro
    public function showRegister()
    {
        return view('auth.register');
    }

    // Procesar y guardar el nuevo usuario en MySQL
    public function register(Request $request)
    {
        // 1. Validar los campos del formulario
        $request->validate([
            'nombre'   => 'required|string|max:100',
            'email'    => 'required|email|max:150|unique:usuarios,email',
            'password' => 'required|string|min:6|confirmed', // 'confirmed' busca que coincida con password_confirmation
        ], [
            'nombre.required'    => 'El nombre es obligatorio.',
            'email.required'     => 'El correo electrónico es obligatorio.',
            'email.email'        => 'Ingresa un correo electrónico válido.',
            'email.unique'       => 'Este correo electrónico ya está registrado.',
            'password.required'  => 'La contraseña es obligatoria.',
            'password.min'       => 'La contraseña debe tener al menos 6 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        // 2. Insertar en la base de datos con contraseña encriptada (bcrypt)
        Usuario::create([
            'nombre'   => $request->nombre,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // Siempre cifrada
        ]);

        // 3. Redireccionar al login con mensaje flash de éxito
        return redirect()->route('login')->with('success', '¡Registro exitoso! Ya puedes iniciar sesión.');
    }

    // Procesar Login
    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('email', $credenciales['email'])->first();

        // Verificar existencia y comparar hash de contraseña
        if ($usuario && Hash::check($credenciales['password'], $usuario->password)) {
            session([
                'user_id'   => $usuario->id,
                'user_name' => $usuario->nombre,
            ]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Las credenciales ingresadas son incorrectas.'])->withInput();
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