<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand fs-3">
        <i class="fa-solid fa-book-bookmark"></i>
        Biblioteca Digital</a>
      <div class="collapse navbar-collapse fs-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('paginaPrincipal')?'text-light fw-bold':''}}" aria-current="page" href="/">Pagina Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('registroLibro')?'text-light fw-bold':''}}" aria-current="page" href="{{route('registroLibro')}}">Registro de Libros</a>
          </li>
      </div>
    </div>
  </nav>