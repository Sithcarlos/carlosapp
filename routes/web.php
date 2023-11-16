<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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


Route::get('/', [ClienteController::class, 'index'])->name('inicio');
Route::post('/guardar', [ClienteController::class, 'store']);
Route::get('/editar/{id}', [ClienteController::class, 'edit']);
Route::post('/editar/{id}', [ClienteController::class, 'update']);



/**
 * en deshuso
 */
//Route::get('/', function () {
//    return view('welcome');
//});
