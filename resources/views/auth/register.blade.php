<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body style="font-family: sans-serif; display: flex; justify-content: center; margin-top: 50px;">
    <div style="width: 350px; padding: 25px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h2 style="text-align: center;">Crear Cuenta</h2>

        {{-- Mostrar errores de validación si existen --}}
        @if ($errors->any())
            <div style="background-color: #ffebee; color: #c62828; padding: 10px; border-radius: 4px; margin-bottom: 15px; font-size: 14px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="nombre">Nombre Completo:</label><br>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required style="width: 100%; padding: 8px; box-sizing: border-box; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email">Correo Electrónico:</label><br>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 8px; box-sizing: border-box; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required style="width: 100%; padding: 8px; box-sizing: border-box; margin-top: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="password_confirmation">Confirmar Contraseña:</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" required style="width: 100%; padding: 8px; box-sizing: border-box; margin-top: 5px;">
            </div>

            <button type="submit" style="width: 100%; padding: 10px; background-color: #2563eb; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
                Registrarse
            </button>
        </form>

        <p style="margin-top: 15px; text-align: center; font-size: 14px;">
            ¿Ya tienes cuenta? <a href="{{ route('login') }}" style="color: #2563eb;">Inicia sesión</a>
        </p>
    </div>
</body>
</html>