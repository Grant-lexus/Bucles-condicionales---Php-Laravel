<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Bonus</title>
</head>
<body>
    <h1>Generador de Números Aleatorios</h1>

    
    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('calcular.bonus')); ?>">
        <?php echo csrf_field(); ?>
        <label for="cantidad">Cantidad de números a generar:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required>
        <button type="submit">Generar</button>
    </form>

    <?php if(isset($numeros)): ?>
        <h2>Números generados:</h2>
        <p><?php echo e(implode(', ', $numeros)); ?></p>

        <h3>Resultados:</h3>
        <ul>
            <li>Mayores que 0: <?php echo e($mayores); ?></li>
            <li>Menores que 0: <?php echo e($menores); ?></li>
            <li>Iguales a 0: <?php echo e($iguales); ?></li>
        </ul>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\larav3066446\resources\views/bonus.blade.php ENDPATH**/ ?>