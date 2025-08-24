<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjerciciodificilController extends Controller
{
    public function VistaDificil()
    {
        return view('EjercicioDificil');
    }
        /**
         * Procesa los números generados y realiza los cálculos estadísticos 
         * Genera 20 números aleatorios y realiza varios análisis:
         * - Cuenta impares múltiplos de 8
         * - Calcula promedio de números pares
         * - Encuentra el mayor múltiplo de 7
         * - Cuenta ocurrencias de números específicos
        */
    public function ProcesarDificil(Request $request)
    {
         // Generamos un array de 20 números aleatorios entre 1 y 70
        // Como cuando sacamos números de una bolsa para un sorteo
        $numeros = [];
        for ($i = 0; $i < 20; $i++) {
            $numeros[] = rand(1, 70);
    }
        // Inicializamos variables para los cálculos
        $imparesmult8 = 0;
        $sumapares =0;
        $cantidadPares = 0;
        $mayorMult7 = null;
        $contarEspecificos = [6 => 0, 11 => 0, 17 => 0];

        // Procesamos cada número generado
        foreach ($numeros as $n) {
             // Verificamos si es impar y múltiplo de 8
            if ($n % 2 !== 0 && $n % 8 == 0) {
                $imparesmult8 ++;;
            }
             // Verificamos si es par y sumamos el número
            if($n % 2 == 0){
                $sumapares += $n;
                $cantidadPares++;
            }
            // Encontramos el mayor múltiplo de 7
            if ($n % 7 == 0) {
                if ($mayorMult7 === null || $n > $mayorMult7) {
                    $mayorMult7 = $n;
                }
            }
            // Contamos números específicos (6, 11, 17)
            if (in_array($n, [6, 11, 17])) {
                $contarEspecificos[$n]++;
            }
        }

        // Calculamos el promedio de los números pares
        $promedioPares = $sumapares > 0 ? $sumapares / $cantidadPares : 0;
        // Retornamos la vista con todos los resultados
        return view('EjercicioDificil',[
            'numeros' => $numeros,
            'imparesmult8' => $imparesmult8,
            'promedioPares'=> $promedioPares,
            'mayorMult7' => $mayorMult7,
            'contarEspecificos'=>$contarEspecificos
        ]);


    }
}