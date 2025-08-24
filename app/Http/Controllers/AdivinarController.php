<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinarController extends Controller
{
        /**
     * Muestra el formulario para comenzar el juego
     * Si no existe un número en la sesión, genera uno nuevo
     * y lo guarda como un secreto bien guardado
     */
    public function adivinameElNumero()
    {
        // Verificamos si ya tenemos un número guardado en la sesión
        // Si no existe, generamos uno nuevo como un mago sacando un número de su sombrero

        if (!session()->has('numero')) {
            session(['numero' => rand(1, 70)]);
        }
         // Retornamos la vista del juego, como mostrar el tapete mágico
        return view('adivinar');
    }
    /**
     * Procesa la operación de adivinanza
     * Recibe el número que el usuario intenta adivinar y compara
     * con el número mágico guardado en la sesión
     */
    public function operacionAdivinar(Request $request)
    {
    // Sacamos el número mágico de la sesión, como consultar el cristal
    $numero = session('numero');
    // Obtenemos el número que el usuario cree que es el correcto
    $respuesta = $request->input('respuesta');
    // Verificamos si el número es mayor que el intento del usuario
    if($numero > $respuesta){
        // Si es mayor, le decimos que siga buscando hacia arriba
        session()->flash('mensaje', 'El número es mayor');
        return redirect()->route('aladin.formulario');
    }
     // Verificamos si el número es menor que el intento del usuario
    else if($numero < $respuesta){
         // Si es menor, le decimos que busque hacia abajo
        session()->flash('mensaje', 'El número es menor');
         // Limpiamos el número mágico
        session()->forget('numero'); 
        return redirect()->route('aladin.formulario');
    }
    // Si llegamos aquí, significa que el usuario acertó el número
    else{
    // Le decimos que el número es correcto
            return redirect()->route('aladin.formulario');
        session()->flash('mensaje', 'El número es correcto'); 
        }   
    }
}


