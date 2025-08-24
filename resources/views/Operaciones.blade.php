<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Todo-en-Uno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            margin-bottom: 30px;
        }
        input, select, button {
            padding: 8px;
            margin: 5px 0;
        }
        .resultado {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
</head>
<body>
    <h1>Calculadora Básica</h1>

    <form action="{{ route('calcular.operaciones') }}" method="POST">
        @csrf
        <label for="a">Número A:</label>
        <input type="number" name="a" required><br>

        <label for="b">Número B:</label>
        <input type="number" name="b" required><br>

        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="sumar">Sumar (+)</option>
            <option value="resta">Restar (-)</option>
            <option value="multiplicar">Multiplicar (×)</option>
            <option value="dividir">Dividir (÷)</option>
        </select><br>

        <button type="submit">Calcular</button>
    </form>

    @isset($resultado)
        <div class="resultado">
            <h2>Resultado</h2>
            <p>
                Operación realizada:
                <strong>
                    {{ request('a') }}
                    @switch(request('operacion'))
                        @case('sumar') + @break
                        @case('resta') - @break
                        @case('multiplicar') × @break
                        @case('dividir') ÷ @break
                    @endswitch
                    {{ request('b') }}
                </strong>
            </p>
            <p>Resultado: <strong>{{ $resultado }}</strong></p>
        </div>
    @endisset
</body>
</html>
