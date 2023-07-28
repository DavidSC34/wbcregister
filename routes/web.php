<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\StaffController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';
// require __DIR__.'/staff.php';

//**We need to access to this route without any restriction (middleware) */
Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');

// Route::get('/dashboard', function () {
   
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware'=>['auth', 'verified'], 'prefix'=>'user', 'as'=>'user.'], function(){
  Route::get('dashboard',[UserDashboardController::class,'index'])->name('dashboard');
});