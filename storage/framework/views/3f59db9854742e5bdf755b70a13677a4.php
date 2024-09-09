

<?php $__env->startSection('title', 'Editar Historial Clínico'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar Historial Clínico</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('historial_clinico.update', $historial->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="paciente_id">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" required>
                        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($paciente->id); ?>" <?php echo e($historial->paciente_id == $paciente->id ? 'selected' : ''); ?>><?php echo e($paciente->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="medico_id">Médico:</label>
                    <select name="medico_id" id="medico_id" class="form-control" required>
                        <?php $__currentLoopData = $medicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($medico->id); ?>" <?php echo e($historial->medico_id == $medico->id ? 'selected' : ''); ?>><?php echo e($medico->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" required><?php echo e($historial->descripcion); ?></textarea>
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESARROLLADOR 2\Documents\EN DESARROLLO\clinica\clinica\resources\views/historial_clinico/edit.blade.php ENDPATH**/ ?>