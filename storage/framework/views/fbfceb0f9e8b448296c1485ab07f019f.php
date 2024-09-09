

<?php $__env->startSection('title', 'Lista de Historiales Clínicos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Historiales Clínicos</h3>
            <a href="<?php echo e(route('historial_clinico.create')); ?>" class="btn btn-success">NUEVO</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="historiales-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                            <th>Fecha</th>
                            <th>Diagnostico</th>
                            <th>Tratamiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $historiales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($historial->id); ?></td>
                                <td><?php echo e($historial->paciente->nombre); ?></td>
                                <td><?php echo e($historial->medico->nombre); ?></td>
                                <td><?php echo e($historial->fecha); ?></td>
                                <td><?php echo e($historial->diagnostico); ?></td>
                                <td><?php echo e($historial->tratamiento); ?></td>
                                <td>
                                    <a href="<?php echo e(route('historial_clinico.show', $historial->id)); ?>" class="btn btn-primary">Ver</a>
                                    <a href="<?php echo e(route('historial_clinico.edit', $historial->id)); ?>" class="btn btn-info">Editar</a>
                                    <form action="<?php echo e(route('historial_clinico.destroy', $historial->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<!-- Incluir jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- Incluir DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- Script para activar DataTables -->
<script>
    $(document).ready(function() {
        $('#historiales-table').DataTable({
            "language": {
                "search": "Buscar:",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron registros coincidentes",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros en total)",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESARROLLADOR 2\Documents\EN DESARROLLO\clinica\clinica\resources\views/historial_clinico/index.blade.php ENDPATH**/ ?>