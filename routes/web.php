<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\AdivinarController;
use App\Http\Controllers\FactorialControlle;
use App\Http\Controllers\CalificacionesController;
use App\Http\Controllers\EjerciciodificilController;
use App\Http\Controllers\MultiplicacionController;
use App\Http\Controllers\BonusController6;


Route::get('/a', function () {
    return view('welcome');
});
//Ejercicio ensayo
Route::get('calcular', [OperacionesController::class, 'calcularFormulario'])->name('calcular.formulario');
Route::post('calcular', [OperacionesController::class, 'calcularOperacion'])->name('calcular.operaciones');
//Ejercicio 1
Route::get('frotalalampara', [AdivinarController::class,'adivinameElNumero'])->name('aladin.formulario'); 
Route::post('frotalalampara2', [AdivinarController::class,'operacionAdivinar'])->name('aladin.operacion');
//Ejercicio 2
Route::get('factorial', [FactorialControlle::class ,'factorialvista'])->name('factorial.vista');
Route::post('factorial', [FactorialControlle::class ,'calcularFactorial'])->name('factorial.calcular');
//Ejercicio 3
Route::get('Notas', [CalificacionesController::class, 'mostrarFormulario'])->name('Nota.vista');
Route::post('Notas', [CalificacionesController::class, 'procesarNotas'])->name('Operaciones.Notas');
//Ejercicio 4
Route::get('TablaMultiplicar', [MultiplicacionController::class, 'tablaMultiplicar'])->name('TablaMultiplicar.vista');
Route::post('TablaMultiplicar', [MultiplicacionController::class, 'procesarMultiplicar'])->name('TablaMultiplicar.procesar');
//Ejercicio 5
Route::get('Ejerciciodificil', [EjerciciodificilController::class, 'VistaDificil'])->name('vista.dificil');
Route::post('Ejerciciodificil', [EjerciciodificilController::class, 'ProcesarDificil'])->name('procesar.dificil');
//Ejercicio extra
Route::get('Bonus', [BonusController6::class, 'vistaBonus'])->name('vista.bonus');
Route::post('Bonus', [BonusController6::class, 'calcularBonus'])->name('calcular.bonus');
