<div class="modal fade" id="Editar<?php echo e($item->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Recuerdo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header fs-3 fw-medium text-primary text-center">
                        Introduce aqui tus memorias
                    </div>
                    <div class="card-body fs-4">
                        <form method="POST" action="/recuerdo/<?php echo e($item->id); ?>/confirm">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3 ">
                                <label class="form-label">Titulo: </label>
                                <input type="text" name="txtTitulo"  class="form-control fs-5" value="<?php echo e($item->titulo); ?>">
                                <p class="fw-bold text-danger"> <?php echo e($errors->first('txtTitulo')); ?> </p>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Recuerdo: </label>
                                <input type="text" name="txtRecuerdo" class="form-control fs-5" value="<?php echo e($item->recuerdo); ?>">
                                <p class="fw-bold text-danger"> <?php echo e($errors->first('txtRecuerdo')); ?> </p>
                            </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <div>
                    <button type="submit" class="btn btn-warning">Editar Recuerdo </button>
                </div>">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Eliminar<?php echo e($item->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Recuerdo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header fs-3 fw-medium text-primary text-center">
                        Seguro que deseas Eliminar el recuerdo?
                    </div>
                    <div class="card-body fs-4 text-center">
                        <form method="POST" action="/recuerdo/<?php echo e($item->id); ?>/delete">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3">
                                <label class="form-label">Titulo: </label>
                                <span class="form-label fs-5" style="display: block;"><?php echo e($item->titulo); ?></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Recuerdo: </label>
                                <span class="form-label fs-5" style="display: block;"><?php echo e($item->recuerdo); ?></span>
                            </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <div>
                    <button type="submit" class="btn btn-warning">Eliminar Recuerdo </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\PW181\ProLaravel\resources\views/partials/modal.blade.php ENDPATH**/ ?>