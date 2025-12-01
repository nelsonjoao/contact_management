<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use Spatie\FlareClient\View;

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
Route::middleware('guest')->group(function(){

Route::get('/', [ContactController::class, 'index'])->name('home');
Route::get('/login',[AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function(){

});