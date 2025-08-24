<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function mostrarFormulario()
    {
        return view('Notas');
    }

        /**
     * Procesa las notas ingresadas por el usuario
     * 
     * Valida que sean 5 notas entre 0 y 5, calcula el promedio
     * y determina si el estudiante aprobó o no.
     */

    public function procesarNotas(Request $request)
    {
         // Obtenemos el array de notas del formulario
        $notas = $request->input('Notas');
        // Incrementamos el contador de intentos en la sesión
        // Como llevar un cuaderno de control de intentos
        $intentos = session('intentos', 0) + 1;
        session(['intentos' => $intentos]);
          // Validamos que las notas cumplan con los requisitos
        // Como cuando el profesor verifica que todo esté en orden
        if (count($notas) !== 5 || collect($notas)->contains(function ($nota) {
            return $nota < 0 || $nota > 5;
        })) {
            return back()->with('error', 'Todas las notas deben estar entre 0 y 5.');
        }
        // Calculamos el promedio redondeado a 2 decimales
        // Como cuando sumamos todas las notas y dividimos
        $promedio = round(array_sum($notas) / count($notas), 2);
         // Determinamos si el estudiante aprobó (promedio >= 3)
        $aprobado = $promedio >= 3;

        // Retornamos la vista con todos los resultados
        return view('Notas', compact('notas', 'promedio', 'aprobado', 'intentos'));
    }
}
