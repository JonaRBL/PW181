<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Diario Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('recuerdo.inicio')?'text-danger fw-bold':''); ?>" href="<?php echo e(route('recuerdo.inicio')); ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('recuerdo.create')?'text-warning fw-bold':''); ?>" href="/recuerdo/create">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('recuerdo.index')?'text-success fw-bold':''); ?>" href="/recuerdo">Recuerdos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\PW181\ProLaravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>