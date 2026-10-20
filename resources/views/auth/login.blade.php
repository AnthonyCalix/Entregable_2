<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            background-color: #07090e;
            background-image: 
                radial-gradient(at 0% 0%, rgba(30, 41, 59, 0.35) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(56, 189, 248, 0.06) 0px, transparent 50%),
                radial-gradient(at 50% 50%, rgba(99, 102, 241, 0.05) 0px, transparent 50%);
        }
    </style>
</head>
<body class="min-h-full flex flex-col justify-between text-slate-200 antialiased font-sans select-none">

    <!-- Header superior -->
    <header class="w-full max-w-7xl mx-auto px-6 py-6 flex items-center justify-between text-xs text-slate-400">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center text-white shadow-lg shadow-purple-500/20">
                <i data-lucide="atom" class="w-4 h-4"></i>
            </div>
            <span class="text-white text-base font-semibold tracking-wide">Nexus</span>
        </div>
        <nav class="hidden md:flex items-center space-x-8 text-slate-300">
            <a href="#" class="hover:text-white transition">Documentación</a>
            <a href="#" class="hover:text-white transition">Soporte</a>
            <a href="#" class="hover:text-white transition">Seguridad</a>
        </nav>
        <div class="flex items-center space-x-4">
            <button class="flex items-center space-x-1.5 text-slate-300 hover:text-white transition">
                <i data-lucide="globe" class="w-3.5 h-3.5"></i>
                <span class="font-medium">ES</span>
            </button>
            <div class="w-8 h-8 rounded-full bg-purple-950/80 border border-purple-500/30 flex items-center justify-center text-purple-300">
                <i data-lucide="user" class="w-4 h-4"></i>
            </div>
        </div>
    </header>

    <!-- Contenedor central -->
    <main class="w-full flex items-center justify-center px-4 py-4">
        <div class="w-full max-w-[480px] bg-[#0c1015]/90 border border-slate-800/80 rounded-2xl p-8 backdrop-blur-2xl shadow-2xl shadow-black/80">
            
            <!-- Barra de estado superior de la tarjeta -->
            <div class="flex items-center justify-between gap-3 mb-7">
                <div class="flex items-center justify-between bg-black/50 border border-slate-800/80 rounded-full px-3.5 py-1.5 text-[11px] gap-3">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_8px_#22d3ee]"></span>
                        <span class="text-slate-300 font-semibold tracking-wider text-[10px]">CIFRADO CUÁNTICO ACTIVO</span>
                    </div>
                    <span class="text-cyan-400 font-mono font-semibold text-[11px]">256-bit</span>
                </div>

                <div class="bg-black/50 border border-slate-800/80 rounded-full p-1 flex items-center text-xs">
                    <span class="bg-[#1c232d] text-white font-medium px-3 py-1 rounded-full flex items-center gap-1.5 shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Iniciar sesión
                    </span>
                    <button class="text-slate-400 hover:text-white px-3 py-1 font-medium transition">
                        Crear cuenta
                    </button>
                </div>
            </div>

            <!-- Título y subtítulo -->
            <div class="mb-6">
                <div class="flex items-center gap-2 text-cyan-400 text-xs font-semibold tracking-wider uppercase mb-1.5">
                    <i data-lucide="shield-check" class="w-4 h-4"></i>
                    <span class="text-[11px] tracking-widest">TERMINAL DE IDENTIDAD</span>
                </div>
                <h1 class="text-3xl font-bold text-white tracking-tight">Bienvenido de nuevo</h1>
                <p class="text-xs text-slate-400 mt-1.5">Accede a la consola de despliegue y telemetría de infraestructura Nexus.</p>
            </div>

            <!-- Selector de tipo de autenticación -->
            <div class="grid grid-cols-3 gap-2 p-1 bg-black/50 border border-slate-800/80 rounded-xl mb-6">
                <button type="button" class="flex items-center justify-center gap-2 py-2 bg-[#1c232d] border border-slate-700/60 rounded-lg text-xs font-medium text-white shadow">
                    <i data-lucide="key-round" class="w-3.5 h-3.5 text-purple-400"></i>
                    <span>Contraseña</span>
                </button>
                <button type="button" class="flex flex-col items-center justify-center py-1.5 text-xs text-slate-400 hover:text-white transition">
                    <div class="flex items-center gap-1">
                        <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                        <span>Magic Link</span>
                    </div>
                    <span class="text-[9px] text-cyan-400 font-semibold tracking-wider">RÁPIDO</span>
                </button>
                <button type="button" class="flex flex-col items-center justify-center py-1.5 text-xs text-slate-400 hover:text-white transition">
                    <div class="flex items-center gap-1">
                        <i data-lucide="fingerprint" class="w-3.5 h-3.5"></i>
                        <span>Passkey</span>
                    </div>
                    <span class="text-[9px] text-purple-400 font-semibold tracking-wider">NUEVO</span>
                </button>
            </div>

            <!-- Formulario visual -->
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between items-center mb-1.5 text-xs">
                        <label class="text-slate-300 font-medium">Correo electrónico corporativo</label>
                        <span class="text-slate-500 text-[11px]">SSO habilitado</span>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                        </div>
                        <input type="email" value="santiago.vega@nexuscloud.io" readonly
                            class="w-full bg-[#080b0f] border border-slate-800 text-slate-200 rounded-xl pl-10 pr-10 py-2.5 text-xs focus:outline-none">
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-cyan-400">
                            <i data-lucide="check-circle-2" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-1.5 text-xs">
                        <label class="text-slate-300 font-medium">Contraseña</label>
                        <span class="text-purple-400 text-[11px] cursor-pointer">¿Olvidaste tu contraseña?</span>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <i data-lucide="lock" class="w-4 h-4"></i>
                        </div>
                        <input type="password" value="••••••••••••••••••••" readonly
                            class="w-full bg-[#080b0f] border border-slate-800 text-slate-200 tracking-widest rounded-xl pl-10 pr-10 py-2.5 text-xs focus:outline-none">
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-500">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs text-slate-400 pt-1">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" checked readonly class="rounded bg-slate-900 border-slate-800 text-purple-600 focus:ring-0">
                        <span>Recordar este nodo por 30 días</span>
                    </label>
                    <div class="flex items-center gap-1 text-[11px] text-slate-500">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
                        <span>Madrid (ES)</span>
                    </div>
                </div>

                <button type="button"
                    class="w-full py-3 px-4 rounded-xl font-semibold text-xs text-slate-950 bg-gradient-to-r from-purple-300 via-indigo-300 to-cyan-300 hover:opacity-95 shadow-lg shadow-cyan-500/10 flex items-center justify-center gap-2 transition duration-200 mt-2">
                    <span>INICIAR SESIÓN DE OPERACIONES</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
            </div>

            <!-- Divisor -->
            <div class="relative my-6 text-center">
                <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-800/80"></div></div>
                <span class="relative bg-[#0c1015] px-3 text-[10px] text-slate-500 uppercase tracking-widest font-medium">O INGRESAR MEDIANTE FEDERACIÓN</span>
            </div>

            <!-- Botones SSO -->
            <div class="grid grid-cols-3 gap-3">
                <button type="button" class="flex items-center justify-center gap-2 py-2.5 px-3 bg-black/40 border border-slate-800 hover:border-slate-700 rounded-xl text-xs text-slate-300 transition">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24"><path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.7 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.2 9 5 12 5z"/><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.7-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5 3.7-8.8z"/><path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3s.1-1.6.4-2.3L1.9 7.3C.7 9.7 0 12.3 0 15s.7 5.3 1.9 7.7l3.7-2.9z"/><path fill="#34A853" d="M12 23c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2.1-6.4-5.1L1.9 16c1.8 3.7 5.6 7 10.1 7z"/></svg>
                    <span>Google</span>
                </button>
                <button type="button" class="flex items-center justify-center gap-2 py-2.5 px-3 bg-black/40 border border-slate-800 hover:border-slate-700 rounded-xl text-xs text-slate-300 transition">
                    <i data-lucide="github" class="w-3.5 h-3.5"></i>
                    <span>GitHub</span>
                </button>
                <button type="button" class="flex items-center justify-center gap-2 py-2.5 px-3 bg-black/40 border border-slate-800 hover:border-slate-700 rounded-xl text-xs text-slate-300 transition">
                    <i data-lucide="shield" class="w-3.5 h-3.5 text-cyan-400"></i>
                    <span>Okta / SAML</span>
                </button>
            </div>

            <!-- Disclaimer -->
            <p class="text-[10px] text-slate-500 text-center mt-6 leading-relaxed">
                Al autenticarte confirmas conformidad con los protocolos de seguridad SOC2 Tipo II e ISO/IEC 27001.
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full max-w-7xl mx-auto px-6 py-5 flex items-center justify-between text-xs text-slate-500">
        <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-cyan-400 shadow-[0_0_6px_#22d3ee]"></span>
            <span>Sistemas 100% Operacionales</span>
        </div>
        <div class="flex items-center space-x-6">
            <a href="#" class="hover:text-slate-400 transition">Privacidad</a>
            <a href="#" class="hover:text-slate-400 transition">Términos</a>
            <span>© 2025 Nexus Security Technologies.</span>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>