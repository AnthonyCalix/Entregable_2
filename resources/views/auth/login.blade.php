<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- CDN de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-full flex items-center justify-center bg-slate-950 px-4 py-12 antialiased">

    <div class="w-full max-w-md bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl shadow-black/60">
        
        <!-- Encabezado -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-blue-600/10 border border-blue-500/20 text-blue-400 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-white tracking-tight">Iniciar Sesión</h1>
            <p class="text-sm text-slate-400 mt-1">Ingresa tus credenciales para acceder</p>
        </div>

        <!-- Mensajes de error / éxito de Laravel -->
        @if($errors->any())
            <div class="mb-5 p-3 rounded-lg bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        @if(session('success'))
            <div class="mb-5 p-3 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulario -->
        <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Campo Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Correo Electrónico</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    placeholder="nombre@ejemplo.com"
                    required
                    class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition duration-150"
                >
            </div>

            <!-- Campo Contraseña -->
            <div>
                <label for="password" class="block text-sm font-medium text-slate-300 mb-2">Contraseña</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="••••••••"
                    required
                    class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition duration-150"
                >
            </div>

            <!-- Botón Ingresar -->
            <button 
                type="submit" 
                class="w-full py-2.5 px-4 rounded-xl bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-white font-medium text-sm transition duration-150 shadow-lg shadow-blue-600/25 cursor-pointer"
            >
                Ingresar
            </button>
        </form>

        <!-- Pie de tarjeta -->
        <div class="mt-6 text-center text-sm text-slate-400">
            ¿No tienes cuenta? 
            <a href="{{ route('registro') }}" class="text-blue-400 hover:text-blue-300 font-medium transition duration-150">
                Regístrate aquí
            </a>
        </div>

    </div>

</body>
</html>