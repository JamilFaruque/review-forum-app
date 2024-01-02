<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [ReviewController::class, 'index']);

// Registration routes:
Route::get('/register',[RegistrationController::class, 'show'])->middleware('guest');
Route::post('/register',[RegistrationController::class, 'create']);

// Login routes:
Route::get('/login',[LoginController::class, 'show']);
Route::post('/login',[LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'destroy']);

// Submit a review:
Route::post('/submit-review',[ReviewController::class, 'store']);
