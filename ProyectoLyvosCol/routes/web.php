<?php

use BaconQrCode\Renderer\Color\Rgb;
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
    return view('index');
});

Auth::routes();

Route::resource('grados',App\Http\Controllers\GradoController::class);
Route::resource('solicitudes',App\Http\Controllers\SolicitudeController::class);
Route::resource('alumnos',App\Http\Controllers\AlumnoController::class);
Route::resource('certificaciones',App\Http\Controllers\CertificacioneController::class);
Route::resource('informes',App\Http\Controllers\InformesController::class);

Route::get('download-pdf', [App\Http\Controllers\AlumnoController::class, 'downloadPdf'])->name('download-pdf');
Route::get('download-pdf-certificaciones', [App\Http\Controllers\CertificacioneController::class, 'downloadPdf'])->name('download-pdf-certificaciones');
Route::get('download-pdf-grados', [App\Http\Controllers\GradoController::class, 'downloadPdf'])->name('download-pdf-grados');
Route::get('download-pdf-solicitudes', [App\Http\Controllers\SolicitudeController::class, 'downloadPdf'])->name('download-pdf-solicitudes');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
