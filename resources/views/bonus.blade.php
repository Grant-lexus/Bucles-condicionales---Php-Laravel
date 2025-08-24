<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Bonus</title>
</head>
<body>
    <h1>Generador de Números Aleatorios</h1>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('calcular.bonus') }}">
        @csrf
        <label for="cantidad">Cantidad de números a generar:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required>
        <button type="submit">Generar</button>
    </form>

    @isset($numeros)
        <h2>Números generados:</h2>
        <p>{{ implode(', ', $numeros) }}</p>

        <h3>Resultados:</h3>
        <ul>
            <li>Mayores que 0: {{ $mayores }}</li>
            <li>Menores que 0: {{ $menores }}</li>
            <li>Iguales a 0: {{ $iguales }}</li>
        </ul>
    @endisset
</body>
</html>
