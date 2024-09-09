

<?php $__env->startSection('title', 'Crear Historial Clínico'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nuevo Historial Clínico</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('historial_clinico.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="paciente_id">Paciente:</label>
                    <select name="paciente_id" id="paciente_id" class="form-control" required>
                        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($paciente->id); ?>"><?php echo e($paciente->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="medico_id">Médico:</label>
                    <select name="medico_id" id="medico_id" class="form-control" required>
                        <?php $__currentLoopData = $medicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($medico->id); ?>"><?php echo e($medico->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="diagnostico">Diagnóstico:</label>
                    <textarea name="diagnostico" id="diagnostico" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tratamiento">Tratamiento:</label>
                    <textarea name="tratamiento" id="tratamiento" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESARROLLADOR 2\Documents\EN DESARROLLO\clinica\clinica\resources\views/historial_clinico/create.blade.php ENDPATH**/ ?>