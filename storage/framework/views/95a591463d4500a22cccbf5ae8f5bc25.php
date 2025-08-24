<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Difícil</title>
</head>
<body>
    <h1>Ejercicio Difícil</h1>

    <form method="POST" action="<?php echo e(route('procesar.dificil')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit">Generar 20 números aleatorios</button>
    </form>

    <?php if(isset($numeros)): ?>
        <h2>Números generados:</h2>
        <p><?php echo e(implode(', ', $numeros)); ?></p>

        <h3>a. Cantidad de impares múltiplos de 8:</h3>
        <p><?php echo e($imparesmult8); ?></p>

        <h3>b. Promedio de los números pares:</h3>
        <p><?php echo e(number_format($promedioPares, 2)); ?></p>

        <h3>c. Número mayor múltiplo de 7:</h3>
        <p><?php echo e($mayorMult7 ?? 'Ninguno encontrado'); ?></p>

        <h3>d. Cantidad de veces que se generaron 6, 11 y 17:</h3>
        <ul>
            <li>6: <?php echo e($contarEspecificos[6]); ?></li>
            <li>11: <?php echo e($contarEspecificos[11]); ?></li>
            <li>17: <?php echo e($contarEspecificos[17]); ?></li>
        </ul>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\larav3066446\resources\views/Sprintview.blade.php ENDPATH**/ ?>