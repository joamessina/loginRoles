<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\FormularioNuevoController;
use App\Http\Controllers\FormularioHabilitadoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserFormularioController;

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

Route::middleware(['auth', 'checkRole:Admin,infra,soporte'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::post('/formulario/infra', [FormularioController::class, 'storeInfra'])->name('formulario.storeInfra');
    Route::post('/formulario/soporte', [FormularioController::class, 'storeSoporte'])->name('formulario.storeSoporte');
    Route::post('/formulario/Cronos', [FormularioController::class, 'storeCronos'])->name('formulario.storeCronos');
    
    
    Route::get('/formularios/infra', [FormularioController::class, 'infra'])->name('formularios.infra');
    Route::get('/formularios/soporte', [FormularioController::class, 'soporte'])->name('formularios.soporte');
    Route::get('/formularios/Cronos', [FormularioController::class, 'cronos'])->name('formularios.Cronos');
    Route::get('/formularios/Clima', [FormularioController::class, 'clima'])->name('formularios.Clima');
    Route::get('/formularios/pro_agro', [FormularioController::class, 'proAgro'])->name('formularios.pro_agro');
    Route::get('/formularios', [FormularioNuevoController::class, 'index'])->name('formularios.index');
    

    Route::get('/formularios/formulario_nuevo', [FormularioNuevoController::class, 'create'])->name('formularios.formulario_nuevo');
    Route::post('/formularios/formulario_nuevo', [FormularioNuevoController::class, 'store'])->name('formulario_nuevo.store');
    Route::delete('/formularios/formulario_nuevo/{id_formulario}', [FormularioNuevoController::class, 'destroy'])->name('formulario_nuevo.destroy');
    Route::get('/formularios/{id}', [FormularioNuevoController::class, 'show'])->name('formularios.show');


    Route::put('/dashboard/formularios/{id}/toggle', [FormularioHabilitadoController::class, 'update'])->name('dashboard.formularios.toggle');
    Route::get('/dashboard/formularios', [FormularioHabilitadoController::class, 'index'])->name('dashboard.formularios');
    Route::get('/dashboard/formularios_usuarios', [DashboardController::class, 'formulariosUsuarios'])->name('dashboard.formularios_usuarios');



    Route::post('/dashboard/user_formulario/{user_id}/{formulario_id}/toggle', [UserFormularioController::class, 'toggle'])->name('user_formulario.toggle');

});