<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación de Notas</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <h2>Evaluación de Notas</h2>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Mostrar error personalizado --}}
        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('Operaciones.Notas') }}">
            @csrf
            <p>Ingresa 5 notas (de 0 a 5):</p>
            @for ($i = 0; $i < 5; $i++)
                <input type="number" name="Notas[]" min="0" max="5" step="0.1" required>
            @endfor
            <br><br>
            <button type="submit">Evaluar</button>
        </form>

        {{-- Mostrar resultados si existen --}}
        @isset($promedio)
            <div class="resultado">
            <p><strong>Notas ingresadas:</strong> {{ implode(', ', $notas) }}</p>
                <p><strong>Promedio:</strong> {{ $promedio }}</p>
                <p><strong>Estado:</strong> {{ $aprobado ? ' Aprobado' : ' Reprobado' }}</p>
                <p><strong>Intentos:</strong> {{ $intentos }}</p>
            </div>
        @endisset
    </div>
</body>
</html>
