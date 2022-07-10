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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
