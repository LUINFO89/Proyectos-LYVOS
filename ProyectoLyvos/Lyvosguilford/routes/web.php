<?php
use App\Http\Controllers\InformesController;

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

Auth::routes();

Route::resource('servicios', ServicioController::class)->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('solicitudes', SolicitudeController::class)->middleware('auth');
Route::resource('facturas', FacturaController::class)->middleware('auth');

Route::get('informes', [InformesController::class,'index']);
//Route::resource('informes', InformesController::class);


Route::get('/home', 'HomeController@index')->name('home');


