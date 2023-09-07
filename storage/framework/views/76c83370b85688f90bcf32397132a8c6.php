<tr>
    <td><?php echo e($libro->titulo); ?></td>
    <td><?php echo e($libro->autor); ?></td>
    <td><?php echo e($libro->año_publicacion); ?></td>
    <td><?php echo e($libro->genero); ?></td>
    <td><?php echo e($libro->disponible); ?></td>
    <td>
        <a href="http://127.0.0.1:8000/deleteBook/<?php echo e($libro->id); ?>"><button>Borrar</button></a>
        <a href="http://127.0.0.1:8000/updateBookForm/<?php echo e($libro->id); ?>"><button>Modificar</button></a>
    </td>
</tr><?php /**PATH C:\Users\enriq\libreria\resources\views/components/table_books.blade.php ENDPATH**/ ?>