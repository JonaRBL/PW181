<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Diario Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apodoInicio')?'text-danger fw-bold':''}}" href="{{route('apodoInicio')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('recuerdo.create')?'text-warning fw-bold':''}}" href="/recuerdo/create">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apodoRecuerdos')?'text-success fw-bold':''}}" href="{{route('apodoRecuerdos')}}">Recuerdos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
