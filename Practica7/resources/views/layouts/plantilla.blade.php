<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>
<body>
    @include('partials.BarraNavegacion')

    @yield('contenido')

    @include('partials.Footer')
</body>
</html>