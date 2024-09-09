

<?php $__env->startSection('title', 'Lista de Pacientes'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Pacientes</h3>
            <a href="<?php echo e(route('pacientes.create')); ?>" class="btn btn-success">NUEVO</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="pacientes-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($paciente->id); ?></td>
                                <td><?php echo e($paciente->nombre); ?></td>
                                <td><?php echo e($paciente->apellido); ?></td>
                                <td>
                                    <a href="<?php echo e(route('pacientes.edit', $paciente->id)); ?>" class="btn btn-info">Editar</a>
                                    <form action="<?php echo e(route('pacientes.destroy', $paciente->id)); ?>" method="POST" style="display:inline;">
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

    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Incluir DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Script para activar DataTables -->
    <script>
        $(document).ready(function() {
            // Verificación para asegurarse de que DataTables se ha cargado
            if ($.fn.DataTable) {
                $('#pacientes-table').DataTable({
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
            } else {
                console.error("DataTables no se ha cargado correctamente.");
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DESARROLLADOR 2\Documents\EN DESARROLLO\clinica\clinica\resources\views/pacientes/index.blade.php ENDPATH**/ ?>