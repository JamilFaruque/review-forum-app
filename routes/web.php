<?php

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

Route::get('/register',[RegistrationController::class, 'show']);
Route::post('/register',[RegistrationController::class, 'create']);
