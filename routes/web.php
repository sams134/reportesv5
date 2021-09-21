<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',HomeController::class)->name('home');



Route::get('jobs/{job}', function ($id) {
    return "Aqui muestro el listado de motores";
})->name('jobs.show');



Route::get('manuales', function (){
    return "Aqui Muestro los manuales";
})->name('manuales');

Route::get('/torque', function () {
    return view('torque');
})->name('torque');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
