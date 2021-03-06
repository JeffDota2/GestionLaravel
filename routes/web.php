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
    return view('auth.login');
});

Auth::routes();

Route::resource('datos',App\Http\Controllers\DatoController::class)->middleware('auth');
Route::resource('formaciones',App\Http\Controllers\FormacioneController::class)->middleware('auth');
Route::resource('educaciones',App\Http\Controllers\EducacioneController::class)->middleware('auth');
Route::resource('referencias',App\Http\Controllers\ReferenciaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
