@extends('layouts.app')

@section('title', 'Panel Principal')

@section('content')
    <div class="text-center space-y-4">
        <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 text-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <h1 class="text-2xl font-bold text-white">¡Bienvenido!</h1>
        <p class="text-slate-400 text-sm">Has iniciado sesión con éxito en el sistema.</p>

        <div class="pt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button 
                    type="submit" 
                    class="w-full py-2.5 px-4 rounded-xl bg-red-600/20 hover:bg-red-600/30 border border-red-500/30 text-red-400 font-medium text-sm transition duration-150 cursor-pointer"
                >
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>
@endsection