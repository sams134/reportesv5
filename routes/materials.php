<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialsController;
use Illuminate\Support\Facades\Route;

Route::get('/materials', [MaterialsController::class,'index'])->name('materials.index');
Route::get('/materials/{material}', [MaterialsController::class,'show'])->name('materials.show');