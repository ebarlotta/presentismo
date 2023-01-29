<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/socios', function () { return view('socios/principalsocio'); });
    // Route::get('/socios/videos', function () { return view('socios/videos/index'); });
    Route::resource('socios','App\Http\Controllers\SociosVideoController');
    Route::resource('rubros','App\Http\Controllers\RubrosController');
    Route::resource('ivas','App\Http\Controllers\IvasController');
    Route::resource('obras','App\Http\Controllers\ObrasController');
    Route::resource('usuarios','App\Http\Controllers\UsuariosController');

    Route::resource('obras','App\Http\Controllers\ObrasController');
    Route::resource('actividades','App\Http\Controllers\ActividadesController');
    Route::resource('novedades','App\Http\Controllers\NovedadesController');
    Route::resource('acciones','App\Http\Controllers\AccionesController');
    Route::resource('empresas','App\Http\Controllers\EmpresasController');

});


Route::get('/videos', function () { return view('socios.videos.frontvideos'); })->name('videos');
Route::get('/quienesomos', function () { return view('quienesomos.somos'); })->name('quienessomos');