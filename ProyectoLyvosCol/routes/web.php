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


Route::resource('usuarios',App\Http\Controllers\UserController::class);
Route::resource('grados',App\Http\Controllers\GradoController::class);
Route::resource('solicitudes',App\Http\Controllers\SolicitudeController::class);
Route::resource('alumnos',App\Http\Controllers\AlumnoController::class);
Route::resource('certificaciones',App\Http\Controllers\CertificacioneController::class);
Route::resource('informes',App\Http\Controllers\InformesController::class);

Route::get('/NewPassword',[App\Http\Controllers\UserSettingsControllerController::class,'NewPassword'])->name('NewPassword')->middleware( 'auth');
Route::post('/change/password',[App\Http\Controllers\UserSettingsControllerController::class,'changePassword'])->name('changePassword');


Route::get('download-pdf', [App\Http\Controllers\AlumnoController::class, 'downloadPdf'])->name('download-pdf')->middleware( 'auth');
Route::get('download-pdf-certificaciones', [App\Http\Controllers\CertificacioneController::class, 'downloadPdf'])->name('download-pdf-certificaciones')->middleware( 'auth');
Route::get('download-pdf-grados', [App\Http\Controllers\GradoController::class, 'downloadPdf'])->name('download-pdf-grados')->middleware( 'auth');
Route::get('download-pdf-solicitudes', [App\Http\Controllers\SolicitudeController::class, 'downloadPdf'])->name('download-pdf-solicitudes')->middleware( 'auth');
Route::get('download-pdf-user', [App\Http\Controllers\UserController::class, 'downloadPdf'])->name('download-pdf-users')->middleware( 'auth');


Route::get('download-pdf-certificado', [App\Http\Controllers\InformesController::class, 'downloadPdfcertificado'])->name('downloadPdfcertificado')->middleware( 'auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
