<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <form action="<?php echo e(route('TablaMultiplicar.procesar')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="numero">Ingresa un número (0 a 10):</label>
        <input type="number" name="numero" id="numero" min="0" max="10" required value="<?php echo e(old('numero', $numero ?? '')); ?>">
        <button type="submit">Generar</button>
        <?php $__errorArgs = ['numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color:red;"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </form>

    <?php if(isset($numero)): ?>
        <h2>Tabla del <?php echo e($numero); ?></h2>
        <ul>
            <?php for($i = 1; $i <= 10; $i++): ?>
                <li><?php echo e($numero); ?> × <?php echo e($i); ?> = <?php echo e($numero * $i); ?></li>
            <?php endfor; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\larav3066446\resources\views/TablaMultiplicar.blade.php ENDPATH**/ ?>