<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Página de Inicio</title>
</head>
<body>
    <h1 class="display-1 text-center text-primary">Bienvenido</h1>
    <form class="text-center">
        <a href="/logi">
            <button type="button" class="fs-2 btn btn-primary">Iniciar sesion</button>
        </a>
        <br>
        <br>
        <a href="{{route('rutaRegistro')}}">
            <button type="button" class="fs-2 btn btn-primary">Registrarse</button>
        </a>
    </form>
</body>
</html>
