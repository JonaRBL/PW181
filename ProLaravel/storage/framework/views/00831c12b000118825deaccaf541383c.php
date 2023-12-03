<?php $__env->startSection('titulo','Recuerdos'); ?>

<?php $__env->startSection('contenido'); ?>


<h1 class="display-1 text-center text-primary"> RECUERDOS </h1>

<div class="container" style="max-width: 500px">
    <?php if(session()->has('confirmacion')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" width="16px" height="16px" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <strong> <?php echo e(session('confirmacion')); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if(session()->has('confirmacion2')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" width="16px" height="16px" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <strong> <?php echo e(session('confirmacion2')); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php $__currentLoopData = $consR; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card w-100 mt-3 mx-auto">
            <div class="card-body">
                <h3 class="card-title fw-bold"><?php echo e($item->titulo); ?></h3>
                <p class="card-title fw-medium"><?php echo e($item->fecha); ?></p>
                <p class="card-tex fw-lighter"><?php echo e($item->recuerdo); ?></p>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Editar<?php echo e($item->id); ?>">Editar</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Eliminar<?php echo e($item->id); ?>">Borrar</button>
            </div>
        </div>
        <?php echo $__env->make('partials.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PW181\ProLaravel\resources\views/recuerdos.blade.php ENDPATH**/ ?>