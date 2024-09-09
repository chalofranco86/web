

<?php $__env->startSection('title', 'Ver Historial Clínico'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalle del Historial Clínico</h3>
        </div>
        <div class="card-body">
            <p><strong>Paciente:</strong> <?php echo e($historial->paciente->nombre); ?></p>
            <p><strong>Médico:</strong> <?php echo e($historial->medico->nombre); ?></p>
            <p><strong>Fecha:</strong> <?php echo e($historial->created_at->format('d-m-Y')); ?></p>
            <p><strong>Descripción:</strong> <?php echo e($historial->diagnostico); ?></p>
            <a href="<?php echo e(route('historial_clinico.edit', $historial->id)); ?>" class="btn btn-info">Editar</a>
            <form action="<?php echo e(route('historial_clinico.destroy', $historial->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESARROLLADOR 2\Documents\EN DESARROLLO\clinica\clinica\resources\views/historial_clinico/show.blade.php ENDPATH**/ ?>