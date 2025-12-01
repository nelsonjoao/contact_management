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

Route::get('/', [ContactController::class, 'index'])->name('home');

Route::middleware('guest')->group(function(){

Route::get('/login',[AuthController::class, 'login'])->name('login');
 Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});


Route::get('/create',[ContactController::class, 'create'])->name('create');
Route::post('/store',[ContactController::class, 'store'])->name('store');

Route::middleware('auth')->group(function(){
Route::get('/contact_details/{id}',[ContactController::class, 'show'])->name('contact_details');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});