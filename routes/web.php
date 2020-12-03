<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/empleados', [EmpleadosController::class, 'index']);

// Route::get('/empleados/create', [EmpleadosController::class, 'create']);




Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Agregamos todas las rutas del controldor empleado:  index, create, show, edit ect.*/
Route::resource('empleados', EmpleadosController::class);

Route::resource('clientes', ClientesController::class);

/* ->middleware('auth') */
