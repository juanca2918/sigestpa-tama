<?php

use App\Http\Controllers\AuxiliarController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HistoriaMedicaCitaController;
use App\Http\Controllers\HistoriaMedicaController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TipoDocumentoController;
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

/*INICIO Rutas de tipo documento*/
Route::get('/tipodocumento', [TipoDocumentoController::class, 'index'])
    ->name('tipodocumento.index');
Route::get('/tipodocumento/create', [TipoDocumentoController::class, 'create'])
    ->name('tipodocumento.create');
Route::post('/tipodocumento', [TipoDocumentoController::class, 'store'])
    ->name('tipodocumento.store');
Route::get('/tipodocumento/{tipodoc}', [TipoDocumentoController::class, 'show'])
    ->name('tipodocumento.show');
Route::get('/tipodocumento/{tipodoc}/edit', [TipoDocumentoController::class, 'edit'])
    ->name('tipodocumento.edit');
Route::put('/tipodocumento/{tipodoc}', [TipoDocumentoController::class, 'update'])
    ->name('tipodocumento.update');
Route::delete('/tipodocumento/{tipodoc}', [TipoDocumentoController::class, 'destroy'])
    ->name('tipodocumento.destroy');
/*FIN Rutas de tipo documento*/

/*INICIO Rutas de Personal*/
Route::get('/personal', [PersonalController::class, 'index'])
    ->name('personal.index');
Route::get('/personal/create', [PersonalController::class, 'create'])
    ->name('personal.create');
Route::post('/personal', [PersonalController::class, 'store'])
    ->name('personal.store');
Route::get('/personal/{personal}', [PersonalController::class, 'show'])
    ->name('personal.show');
Route::get('/personal/{personal}/edit', [PersonalController::class, 'edit'])
    ->name('personal.edit');
Route::put('/personal/{personal}', [PersonalController::class, 'update'])
    ->name('personal.update');
Route::delete('/personal/{personal}', [PersonalController::class, 'destroy'])
    ->name('personal.destroy');
/*FIN Rutas de Personal*/

/*INICIO Rutas de Paciente*/
Route::get('/paciente', [PacientesController::class, 'index'])
    ->name('paciente.index');
Route::get('/paciente/create', [PacientesController::class, 'create'])
    ->name('paciente.create');
Route::post('/paciente', [PacientesController::class, 'store'])
    ->name('paciente.store');
Route::get('/paciente/{paciente}', [PacientesController::class, 'show'])
    ->name('paciente.show');
Route::get('/paciente/{paciente}/edit', [PacientesController::class, 'edit'])
    ->name('paciente.edit');
Route::put('/paciente/{paciente}', [PacientesController::class, 'update'])
    ->name('paciente.update');
Route::delete('/paciente/{paciente}', [PacientesController::class, 'destroy'])
    ->name('paciente.destroy');
/*FIN Rutas de Paciente*/

/*INICIO Rutas de Historia Medica*/
Route::get('/historiamedica', [HistoriaMedicaController::class, 'index'])
    ->name('historiamedica.index');
Route::get('/historiamedica/create', [HistoriaMedicaController::class, 'create'])
    ->name('historiamedica.create');
Route::post('/historiamedica', [HistoriaMedicaController::class, 'store'])
    ->name('historiamedica.store');
Route::get('/historiamedica/{histmed}', [HistoriaMedicaController::class, 'show'])
    ->name('historiamedica.show');
Route::get('/historiamedica/{histmed}/edit', [HistoriaMedicaController::class, 'edit'])
    ->name('historiamedica.edit');
Route::put('/historiamedica/{histmed}', [HistoriaMedicaController::class, 'update'])
    ->name('historiamedica.update');
Route::delete('/historiamedica/{histmed}', [HistoriaMedicaController::class, 'destroy'])
    ->name('historiamedica.destroy');
/*FIN Rutas de Historia Medica*/

/*INICIO Rutas de Historia Medica Cita*/
Route::get('/historiamedicacita', [HistoriaMedicaCitaController::class, 'index'])
    ->name('historiamedicacita.index');
Route::get('/historiamedicacita/create', [HistoriaMedicaCitaController::class, 'create'])
    ->name('historiamedicacita.create');
Route::post('/historiamedicacita', [HistoriaMedicaCitaController::class, 'store'])
    ->name('historiamedicacita.store');
Route::get('/historiamedicacita/{histmedc}', [HistoriaMedicaCitaController::class, 'show'])
    ->name('historiamedicacita.show');
Route::get('/historiamedicacita/{histmedc}/edit', [HistoriaMedicaCitaController::class, 'edit'])
    ->name('historiamedicacita.edit');
Route::put('/historiamedicacita/{histmedc}', [HistoriaMedicaCitaController::class, 'update'])
    ->name('historiamedicacita.update');
Route::delete('/historiamedicacita/{histmedc}', [HistoriaMedicaCitaController::class, 'destroy'])
    ->name('historiamedicacita.destroy');
/*FIN Rutas de Historia Medica Cita*/

/*INICIO Rutas de Doctor*/
Route::get('/doctor', [DoctorController::class, 'index'])
    ->name('doctor.index');
Route::get('/doctor/create', [DoctorController::class, 'create'])
    ->name('doctor.create');
Route::post('/doctor', [DoctorController::class, 'store'])
    ->name('doctor.store');
Route::get('/doctor/{doctor}', [DoctorController::class, 'show'])
    ->name('doctor.show');
Route::get('/doctor/{doctor}/edit', [DoctorController::class, 'edit'])
    ->name('doctor.edit');
Route::put('/doctor/{doctor}', [DoctorController::class, 'update'])
    ->name('doctor.update');
Route::delete('/doctor/{doctor}', [DoctorController::class, 'destroy'])
    ->name('doctor.destroy');
/*FIN Rutas de Doctor*/

/*INICIO Rutas de Cita*/
Route::get('/cita', [CitaController::class, 'index'])
    ->name('cita.index');
Route::get('/cita/create', [CitaController::class, 'create'])
    ->name('cita.create');
Route::post('/cita', [CitaController::class, 'store'])
    ->name('cita.store');
Route::get('/cita/{cita}', [CitaController::class, 'show'])
    ->name('cita.show');
Route::get('/cita/{cita}/edit', [CitaController::class, 'edit'])
    ->name('cita.edit');
Route::put('/cita/{cita}', [CitaController::class, 'update'])
    ->name('cita.update');
Route::delete('/cita/{cita}', [CitaController::class, 'destroy'])
    ->name('cita.destroy');
/*FIN Rutas de Cita*/

/*INICIO Rutas de Auxiliar*/
Route::get('/auxiliar', [AuxiliarController::class, 'index'])
    ->name('auxiliar.index');
Route::get('/auxiliar/create', [AuxiliarController::class, 'create'])
    ->name('auxiliar.create');
Route::post('/auxiliar', [AuxiliarController::class, 'store'])
    ->name('auxiliar.store');
Route::get('/auxiliar/{auxiliar}', [AuxiliarController::class, 'show'])
    ->name('auxiliar.show');
Route::get('/auxiliar/{auxiliar}/edit', [AuxiliarController::class, 'edit'])
    ->name('auxiliar.edit');
Route::put('/auxiliar/{auxiliar}', [AuxiliarController::class, 'update'])
    ->name('auxiliar.update');
Route::delete('/auxiliar/{auxiliar}', [AuxiliarController::class, 'destroy'])
    ->name('auxiliar.destroy');
/*FIN Rutas de Auxiliar*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
