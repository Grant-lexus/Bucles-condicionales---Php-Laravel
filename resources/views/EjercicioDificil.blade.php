<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Difícil</title>
</head>
<body>
    <h1>Ejercicio Difícil</h1>

    <form method="POST" action="{{ route('procesar.dificil') }}">
        @csrf
        <button type="submit">Generar 20 números aleatorios</button>
    </form>

    @isset($numeros)
        <h2>Números generados:</h2>
        <p>{{ implode(', ', $numeros) }}</p>

        <h3>a. Cantidad de impares múltiplos de 8:</h3>
        <p>{{ $imparesmult8 }}</p>

        <h3>b. Promedio de los números pares:</h3>
        <p>{{ number_format($promedioPares, 2) }}</p>

        <h3>c. Número mayor múltiplo de 7:</h3>
        <p>{{ $mayorMult7 ?? 'Ninguno encontrado' }}</p>

        <h3>d. Cantidad de veces que se generaron 6, 11 y 17:</h3>
        <ul>
            <li>6: {{ $contarEspecificos[6] }}</li>
            <li>11: {{ $contarEspecificos[11] }}</li>
            <li>17: {{ $contarEspecificos[17] }}</li>
        </ul>
    @endisset
</body>
</html>
