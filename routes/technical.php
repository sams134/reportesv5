<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

Route::get('/view-jobs/{user}/{filter}', [JobsController::class,'view_jobs'])->name('view-motors');

Route::get('/view-jobs/customer/{customer}/{filter}', [JobsController::class,'view_jobs_customer'])->name('view-motors-customer');

Route::get('/jobs', [JobsController::class,'index'])->name('jobs.index');

Route::get('/jobs/{job}', [JobsController::class,'show'])->name('jobs.show');