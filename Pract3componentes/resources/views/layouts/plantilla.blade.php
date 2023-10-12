<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>
<body>
    <x-navbar></x-navbar>
    
    @yield('contenido')

</body>
</html>
