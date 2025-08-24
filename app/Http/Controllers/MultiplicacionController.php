<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicacionController extends Controller
{
   public function tablaMultiplicar(){
        return view('TablaMultiplicar');
    }
    /**
     * Procesa el número ingresado y genera la tabla de multiplicar
     * Valida que el número sea entre 0 y 10, y genera la tabla
     * completa de multiplicar, como cuando hacemos los ejercicios
     * en el cuaderno.
     */

    public function procesarMultiplicar(Request $request)
    {
     // Validamos que el número sea válido
        // Como cuando el profesor verifica que el número esté en el rango correcto
    $request->validate([
        'numero' => 'required|integer|min:0|max:10'
    ]);

    // Obtenemos el número ingresado
    $numero = $request->input('numero');
     // Inicializamos la variable para la multiplicación acumulativa
    $multiplicacion = 1;
     // Calculamos la multiplicación acumulativa
    // Como cuando multiplicamos el número por todos los números del 1 al mismo número
    for ($i = 1; $i <= $numero; $i++) {
        $multiplicacion *= $i;
    }
     // Retornamos la vista con el resultado
    return view('TablaMultiplicar', [
        'Multiplicacion' => $multiplicacion,
        'numero' => $numero
    ]);
    }
}
