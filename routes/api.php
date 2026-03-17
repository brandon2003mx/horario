<?php

use App\Http\Controllers\MobiliarioController;
use App\Http\Controllers\EdificioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Rutas Mobiliarios
|--------------------------------------------------------------------------
*/

Route::get('mobiliarios', [MobiliarioController::class,'index'])->name('mobiliario.index');
Route::post('guardar', [MobiliarioController::class,'store'])->name('mobiliario.store');
Route::get('mostrar/{mobiliario}', [MobiliarioController::class,'show'])->name('mobiliario.show');
Route::put('actualizar/{mobiliario}', [MobiliarioController::class,'update'])->name('mobiliario.update');
Route::delete('eliminar/{mobiliario}', [MobiliarioController::class,'destroy'])->name('mobiliario.destroy');

/*
|--------------------------------------------------------------------------
| Rutas Edificios (API REST)
|--------------------------------------------------------------------------
*/

Route::apiResource('edificios', EdificioController::class);