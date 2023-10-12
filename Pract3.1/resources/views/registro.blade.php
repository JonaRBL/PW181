<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Registro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Practica 3.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/logi">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/regis">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h2 class="fs-1 text-center text-primary">Registro de usuario</h2>
    <form class="text-center">
        <label>Usuario:</label>
        <input type="text"><br><br>
        
        <label>Contraseña:</label>
        <input type="password"><br><br>
        
        <a href="/">
            <button type="button" class="btn btn-primary">Registrar Usuario</button>
        </a>
    </form> 
</body>
</html>