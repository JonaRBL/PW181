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
        <x-boton nombre="Iniciar Sesion" :ruta="route('rutaSesion')"></x-boton>
        <br>
        <br>
        <x-boton nombre="Registrar Usuario" :ruta="route('rutaRegistro')"></x-boton>
    </form>
</body>
</html>
