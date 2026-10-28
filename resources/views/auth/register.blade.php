@extends('layouts.app')

@section('title', 'Crear Cuenta')

@section('content')
    <!-- Encabezado -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-emerald-600/10 border border-emerald-500/20 text-emerald-400 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-white tracking-tight">Crear Cuenta</h1>
        <p class="text-sm text-slate-400 mt-1">Completa los datos para registrarte</p>
    </div>

    <!-- Formulario -->
    <form action="{{ route('registro.post') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="nombre" class="block text-sm font-medium text-slate-300 mb-1.5">Nombre Completo</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre" 
                value="{{ old('nombre') }}" 
                placeholder="Juan Pérez"
                required
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition duration-150 text-sm"
            >
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">Correo Electrónico</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="{{ old('email') }}" 
                placeholder="nombre@ejemplo.com"
                required
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition duration-150 text-sm"
            >
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-slate-300 mb-1.5">Contraseña</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="••••••••"
                required
                class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition duration-150 text-sm"
            >
        </div>

        <button 
            type="submit" 
            class="w-full mt-2 py-2.5 px-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-medium text-sm transition duration-150 shadow-lg shadow-blue-600/25 cursor-pointer"
        >
            Registrarse
        </button>
    </form>

    <div class="mt-6 text-center text-sm text-slate-400">
        ¿Ya tienes cuenta? 
        <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300 font-medium transition duration-150">
            Inicia sesión
        </a>
    </div>
@endsection