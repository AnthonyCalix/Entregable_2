HTML
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
</head>
<body style="font-family: sans-serif; padding: 30px;">
    <h1>¡Bienvenido, {{ session('user_name') }}!</h1>
    <p>Has iniciado sesión correctamente.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>