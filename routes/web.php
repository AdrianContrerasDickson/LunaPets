<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
use App\http\Controllers\TaskController;

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

Route::resource('citas', CitaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);
route::view('principal','navbar')->name('principal');


Route::get('/', function () {
    return view('principal');
})->name('inicio');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/cita', function () {
    return view('cita');
})->name('cita');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');
