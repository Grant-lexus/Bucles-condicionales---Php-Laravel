<!DOCTYPE html>
<html>
<head>
    <title>Adivina el Número</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <h1> Adivina el número mágico</h1>
        <p>Estoy pensando en un número entre <strong>1 y 70</strong>. ¿Puedes adivinar cuál es?</p>

        <form action="<?php echo e(route('aladin.operacion')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="respuesta">Tu respuesta:</label>
            <input type="number" name="respuesta" min="1" max="70" required>
            <button type="submit">Adivinar</button>
        </form>

        <?php if(session('mensaje')): ?>
            <div class="mensaje">
                <?php echo e(session('mensaje')); ?>

            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\larav3066446\resources\views/adivinar.blade.php ENDPATH**/ ?>