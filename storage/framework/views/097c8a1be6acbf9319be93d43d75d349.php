<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Factorial</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Factorial</h1>

        <form action="<?php echo e(route('factorial.calcular')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="numero">Ingresa un número entero positivo:</label>
            <input type="number" name="numero" id="numero" min="0" required>
            <button type="submit">Calcular</button>
        </form>

        <?php if(isset($factorial)): ?>
            <?php if(is_numeric($factorial)): ?>
                <div class="resultado">
                    <strong>Resultado:</strong><br>
                    El factorial de <?php echo e($numero); ?> es <strong><?php echo e($factorial); ?></strong>
                </div>
            <?php else: ?>
                <div class="error">
                    <strong>Error:</strong><br>
                    <?php echo e($factorial); ?>

                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\laravel\larav3066446\resources\views/factorial.blade.php ENDPATH**/ ?>