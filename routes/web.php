<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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
Route::name('agregarAlumno')->get('agregarAlumno/', 'App\Http\Controllers\AlumnosController@agregarAlumno');
Route::name('datos2a')->get('datos2a/', 'App\Http\Controllers\AlumnosController@datos2a');
Route::name('datos2b')->get('datos2b/', 'App\Http\Controllers\AlumnosController@datos2b');
Route::name('guardarAlumno')->post('guardarAlumno/', 'App\Http\Controllers\AlumnosController@guardarAlumno');
