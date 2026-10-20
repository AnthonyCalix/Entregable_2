<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body style="font-family: sans-serif; display: flex; justify-content: center; margin-top: 50px;">
    <div style="width: 320px; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
        <h2>Iniciar Sesión</h2>

        @if($errors->any())
            <div style="color: red; margin-bottom: 10px;">{{ $errors->first() }}</div>
        @endif

        @if(session('success'))
            <div style="color: green; margin-bottom: 10px;">{{ session('success') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label>Correo Electrónico:</label><br>
                <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%;">
            </div>
            <div style="margin-bottom: 15px;">
                <label>Contraseña:</label><br>
                <input type="password" name="password" required style="width: 100%;">
            </div>
            <button type="submit" style="width: 100%; padding: 8px;">Ingresar</button>
        </form>

        <p style="margin-top: 15px; font-size: 14px;">
            ¿No tienes cuenta? <a href="{{ route('registro') }}">Regístrate aquí</a>
        </p>
    </div>
</body>
</html>