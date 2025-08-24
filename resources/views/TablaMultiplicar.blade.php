<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <form action="{{ route('TablaMultiplicar.procesar') }}" method="POST">
        @csrf
        <label for="numero">Ingresa un número (0 a 10):</label>
        <input type="number" name="numero" id="numero" min="0" max="10" required value="{{ old('numero', $numero ?? '') }}">
        <button type="submit">Generar</button>
        @error('numero')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </form>

    @isset($numero)
        <h2>Tabla del {{ $numero }}</h2>
        <ul>
            @for ($i = 1; $i <= 10; $i++)
                <li>{{ $numero }} × {{ $i }} = {{ $numero * $i }}</li>
            @endfor
        </ul>
    @endisset
</body>
</html>
