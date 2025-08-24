<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación de Notas</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <h2>Evaluación de Notas</h2>

        
        <?php if($errors->any()): ?>
            <div class="error">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        
        <?php if(session('error')): ?>
            <div class="error"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('Operaciones.Notas')); ?>">
            <?php echo csrf_field(); ?>
            <p>Ingresa 5 notas (de 0 a 5):</p>
            <?php for($i = 0; $i < 5; $i++): ?>
                <input type="number" name="Notas[]" min="0" max="5" step="0.1" required>
            <?php endfor; ?>
            <br><br>
            <button type="submit">Evaluar</button>
        </form>

        
        <?php if(isset($promedio)): ?>
            <div class="resultado">
            <p><strong>Notas ingresadas:</strong> <?php echo e(implode(', ', $notas)); ?></p>
                <p><strong>Promedio:</strong> <?php echo e($promedio); ?></p>
                <p><strong>Estado:</strong> <?php echo e($aprobado ? ' Aprobado' : ' Reprobado'); ?></p>
                <p><strong>Intentos:</strong> <?php echo e($intentos); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\larav3066446\resources\views/Notas.blade.php ENDPATH**/ ?>