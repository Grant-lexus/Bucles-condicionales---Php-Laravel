<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Factorial</title>
    <div class="container">
        <h1>Calculadora de Factorial</h1>

        <form action="{{ route('factorial.calcular') }}" method="POST">
            @csrf
            <label for="numero">Ingresa un número entero positivo:</label>
            <input type="number" name="numero" id="numero" min="0" required>
            <button type="submit">Calcular</button>
        </form>

        @isset($factorial)
            @if(is_numeric($factorial))
                <div class="resultado">
                    <strong>Resultado:</strong><br>
                    El factorial de {{ $numero }} es <strong>{{ $factorial }}</strong>
                </div>
            @else
                <div class="error">
                    <strong>Error:</strong><br>
                    {{ $factorial }}
                </div>
            @endif
        @endisset
    </div>
</body>
</html>

