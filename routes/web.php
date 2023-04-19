<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormularioController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'checkRole:Admin,Infra,Soporte'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::post('/formulario/infra', [FormularioController::class, 'storeInfra'])->name('formulario.storeInfra');
    Route::post('/formulario/soporte', [FormularioController::class, 'storeSoporte'])->name('formulario.storeSoporte');
    Route::post('/formulario/admin', [FormularioController::class, 'storeAdmin'])->name('formulario.storeAdmin');
});