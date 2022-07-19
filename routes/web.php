<?php

use App\Http\Controllers\Auth\EditUserController;
use App\Http\Controllers\UserProfileController;
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
Route::middleware('auth')->group(function(){
    Route::get('profile',[UserProfileController::class,'create'])->name('profile');

    Route::delete('edit/{user}/delete_user',[EditUserController::class,'destroy'])->name('user.destroy');
    Route::put('edit/{user}',[EditUserController::class,'update'])->name('user.update');
});
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');



require __DIR__.'/auth.php';
