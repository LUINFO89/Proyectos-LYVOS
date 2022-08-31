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


Route::resource('usuarios', App\Http\Controllers\UserController::class)->middleware('auth','can:users.index',);
Route::resource('grados', App\Http\Controllers\GradoController::class)->middleware('auth','can:grados.index');
Route::resource('solicitudes', App\Http\Controllers\SolicitudeController::class)->middleware('auth');
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class)->middleware('auth','can:alumnos.index');
Route::resource('profesores', App\Http\Controllers\ProfesoreController::class)->middleware('auth','profesor.index');
Route::resource('notas', App\Http\Controllers\NotaController::class)->middleware('auth','can:notas.index');
Route::resource('asignaturas', App\Http\Controllers\AsignaturaController::class)->middleware('auth','asignaturas.index');


Route::get('download-pdf-certificado/{id}', [App\Http\Controllers\CertificacioneController::class, 'downloadPdfcertificado'])->name('downloadPdfcertificado')->middleware( 'auth');



Route::resource('certificaciones', App\Http\Controllers\CertificacioneController::class)->middleware('auth');
Route::resource('informes', App\Http\Controllers\InformesController::class)->middleware('auth');

Route::get('/NewPassword', [App\Http\Controllers\UserSettingsControllerController::class, 'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password', [App\Http\Controllers\UserSettingsControllerController::class, 'changePassword'])->name('changePassword')->middleware('auth');


Route::get('download-pdf', [App\Http\Controllers\AlumnoController::class, 'downloadPdf'])->name('download-pdf')->middleware('auth');
Route::get('download-pdf-certificaciones', [App\Http\Controllers\CertificacioneController::class, 'downloadPdf'])->name('download-pdf-certificaciones')->middleware('auth');
Route::get('download-pdf-grados', [App\Http\Controllers\GradoController::class, 'downloadPdf'])->name('download-pdf-grados')->middleware('auth');
Route::get('download-pdf-solicitudes', [App\Http\Controllers\SolicitudeController::class, 'downloadPdf'])->name('download-pdf-solicitudes')->middleware('auth');
Route::get('download-pdf-user', [App\Http\Controllers\UserController::class, 'downloadPdf'])->name('download-pdf-users')->middleware('auth');
Route::get('download-pdf-profesores', [App\Http\Controllers\ProfesoreController::class, 'downloadPdf'])->name('download-pdf-profesores')->middleware('auth');
Route::get('download-pdf-asignatura', [App\Http\Controllers\AsignaturaController::class, 'downloadPdf'])->name('download-pdf-asignatura')->middleware('auth');
Route::get('download-pdf-calificaciones', [App\Http\Controllers\CalificacioneController::class, 'downloadPdf'])->name('download-pdf-calificaciones')->middleware('auth');
Route::get('download-pdf-certificaciones-all', [App\Http\Controllers\CertificacioneController::class, 'downloadPdfall'])->name('download-pdf-certificaciones-all')->middleware('auth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('products', ProductController::class)->only(['index', 'create', 'store']);
Route::resource('products', App\Http\Controllers\ProductController::class)->middleware('auth');
Route::resource('calificaciones', App\Http\Controllers\CalificacioneController::class)->middleware('auth','profesor.index');
Route::post('/calificaciones/importar', [App\Http\Controllers\CalificacioneController::class, 'importar'])->name('importar');
