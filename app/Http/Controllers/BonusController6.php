<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonusController6 extends Controller
{
    public function vistaBonus()
    {
        return view('bonus');
    }
        /**
     * Procesa la cantidad de números a generar y realiza el análisis
     * 
     * Genera números aleatorios entre -225 y 450, y los clasifica en:
     * - Mayores que 0 (positivos)
     * - Menores que 0 (negativos)
     * - Iguales a 0 (cero)
     */

    public function calcularBonus(Request $request)
    {
         // Validamos que la cantidad sea un número válido
        // Como cuando verificamos que la apuesta sea correcta
        $request->validate([
            'cantidad' => 'required|numeric|min:1'
        ]);
        // Obtenemos la cantidad de números a generar
        $cantidad = $request->input('cantidad');
        // Inicializamos contadores para cada tipo de número
        $mayores = 0;
        $menores = 0;
        $iguales = 0;
        $numeros = [];
        // Generamos los números aleatorios y los clasificamos
        for ($i = 0; $i < $cantidad; $i++) {
             // Generamos un número entre -225 y 450
            // Como cuando sacamos números de una bolsa de lotería
            $numero = rand(-225, 450);
            $numeros[] = $numero;
            // Clasificamos el número según su valor
            if ($numero > 0) {
                $mayores++; // Contamos números positivos
            } elseif ($numero < 0) {
                $menores++; // Contamos números negativos
            } else {
                $iguales++;  // Contamos ceros
            }
        }
         // Retornamos la vista con los resultados
        return view('bonus', compact('numeros', 'mayores', 'menores', 'iguales'));
    }
}
