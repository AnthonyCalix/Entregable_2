<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Método para registrar usuario vía API (devuelve JSON)
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre'   => 'required|string|max:100',
            'email'    => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->errors(),
                'message' => 'Errores de validación'
            ], 422);
        }

        $usuario = Usuario::create([
            'nombre'   => $request->nombre,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'data'    => [
                'id'     => $usuario->id,
                'nombre' => $usuario->nombre,
                'email'  => $usuario->email
            ],
            'message' => 'Usuario registrado exitosamente'
        ], 201);
    }

    // Método para login vía API (devuelve JSON)
    public function login(Request $request)
    {
        $usuario = Usuario::where('email', $request->email)->first();

        if ($usuario && Hash::check($request->password, $usuario->password)) {
            return response()->json([
                'success' => true,
                'data' => [
                    'id'     => $usuario->id,
                    'nombre' => $usuario->nombre,
                    'email'  => $usuario->email
                ],
                'message' => 'Login exitoso'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'data'    => null,
            'message' => 'Credenciales inválidas'
        ], 401);
    }
}