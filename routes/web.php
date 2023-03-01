<?php

use App\Http\Controllers\customUserController;
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

Route::get('/', [customUserController::class, 'signup']);
Route::get('/signin', [customUserController::class, 'signin']);

// Registration

Route::post('/signup', [customUserController::class, 'store'])->name('signup');