<?php

use App\Http\Controllers\VacanteController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de vacantes
Route::get('/vacantes', [VacanteController::class, 'index'])->name('vacantes.index');
Route::get('/vacantes/create', [VacanteController::class, 'create'])->name('vacantes.create');