<?php

use App\Http\Controllers\Backend\StaffController;
use Illuminate\Support\Facades\Route;

/**Staff Routes */

// Route::get('staff/dashboard',[StaffController::class,'dashboard'])->middleware(['auth','role:staff'])->name('staff.dashboard');
Route::get('dashboard',[StaffController::class,'dashboard'])->name('dashboard');
