<?php

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
Route::get('/actualizarUsuario/{id}',[CrudController::class,'buscar'])->name('UpdateUsuario');
Route::put('/actualizarUsuario/{id}',[CrudController::class,'actualizar']);
Route::delete('/eliminarUsuario/{id}', [CrudController::class, 'Eliminar'])->name('eliminarUsuario');

