<tr>
    <td><?php echo e($prestamo->id_book); ?></td>
    <td><?php echo e($prestamo->id_user); ?></td>
    <td><?php echo e($prestamo->fecha_prestamo); ?></td>
    <td><?php echo e($prestamo->fecha_devolucion); ?></td>
    <td>
        <a href="http://127.0.0.1:8000/updatePrestamoForm/<?php echo e($prestamo->id); ?>"><button>Hacer Préstamo</button></a>
        <a href="http://127.0.0.1:8000/updateDevolucionForm/<?php echo e($prestamo->id); ?>"><button>Devolver</button></a>
    </td>
</tr><?php /**PATH C:\Users\enriq\libreria\resources\views/components/table_prestamos.blade.php ENDPATH**/ ?>