<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialControlle extends Controller
{
    public function factorialvista(){
        return view('factorial');
    }
        /**
     * Calcula el factorial de un número
     * Recibe un número por POST y calcula su factorial usando un ciclo for,
     * como cuando contamos cuántos pasos hay en una salsa.
     */

    public function calcularFactorial(Request $request)
    {
        // Obtenemos el número que el usuario quiere calcular
        $numero = $request->input('numero');
        // Inicializamos la variable que guardará el resultado
        $factorial = null;

      // Validamos que el número sea entre 0 y 10 (como los dedos de las manos)
        if ($numero >= 0 && $numero <= 10) {
            $factorial = 1;
            // Calculamos el factorial usando un ciclo for
            // Ejemplo: para 5 -> 5 * 4 * 3 * 2 * 1
            for ($i = 1; $i <= $numero; $i++) {
                 // Inicializamos el factorial en 1 (el neutro multiplicativo)
                $factorial *= $i;
            }
        } else {
             // Si el número no está en el rango válido, mostramos un error
            $factorial = 'Error: el número debe ser mayor o igual a 0';
        }
        // Retornamos la vista con el resultado
        return view('factorial', ['factorial' => $factorial, 'numero' => $numero]);
    }
}

