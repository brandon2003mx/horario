<?php

use App\Http\Controllers\AulaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/
Route::delete('borrar/{aula}', [AulaController::class,'destroy'])->name('aula.delete');
Route::put('actualizar/{aula}', [AulaController::class,'update'])->name('aula.update');
Route::get('editar/{aula}', [AulaController::class,'edit'])->name('aula.edit');
Route::get('mostrar/{aula}', [AulaController::class,'show'])->name('aula.show');
Route::post('guardar', [AulaController::class,'store'])->name('aula.store');
Route::get('otro', [AulaController::class,'create'])->name('aula.create');
Route::get('/',[AulaController::class,'index']);

