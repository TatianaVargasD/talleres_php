<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrarUsuario',[CrudController::class,'index'])->name('registrar');
Route::post("/registrarUsuario",[CrudController::class,'registrar']);
Route::get('/listarUsuarios',[CrudController::class,'listar'])->name('listarUsuarios');
Route::get('/actualizar-User/{id}',[CrudController::class,'buscar'])->name('UpdateUsers');
Route::put('/actualizar-User/{id}',[CrudController::class,'actuctualizar']);
Route::delete('/eliminar-User/{id}', [CrudController::class, 'Eliminar'])->name('eliminar-User');
