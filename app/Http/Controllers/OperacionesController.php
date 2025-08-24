<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
public function calcularFormulario()
{
    return view('Operaciones');
}


 
  //Operaciones matematicas suma,resta,multiplicacion y division

  public function sumar($a, $b){
      $resultado = $a + $b;
      return $resultado;
  }

  public function resta($a, $b){
      $resultado = $a - $b;
      return $resultado;
  }

  public function multiplicar($a, $b){
      $resultado = $a * $b;
      return $resultado;
  }

  public function dividir($a, $b){
      $resultado = $a / $b;
      return $resultado;
  }

  public function calcularOperacion(Request $request){
    $a = $request->input('a');
    $b = $request->input('b');
    $operacion = $request->input('operacion');
    $resultado = null;

    if($operacion == 'sumar'){
        $resultado = $this->sumar($a, $b);
    }
    else if($operacion == 'resta'){
        $resultado = $this->resta($a, $b);
    }
    else if($operacion == 'multiplicar'){
        $resultado = $this->multiplicar($a, $b);
    }
    else if($operacion == 'dividir'){
        $resultado = $this->dividir($a, $b);
    }

    return view('Operaciones', ['resultado' => $resultado]);
}
//-----------------------------------------------------------------------------
//Ejercicio 1: El programa genera un número aleatorio del
//1 al 70. El usuario debe adivinarlo.Por cada intento,
//el programa le dice si el número es mayor o menor.

}