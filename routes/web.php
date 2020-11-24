<?php

use App\Http\Controllers\Prime;
use App\Http\Controllers\UserController;
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

Route::get('/', [Prime::class, 'index'])->name('home');
Route::get('/show/{id}', [Prime::class, 'show'])->name('show');
Route::get('/random', [Prime::class, 'random'])->name('random');
Route::get('/all', [Prime::class, 'all'])->name('all');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Routes only for registered and authorized Users.
|
*/

Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('userdashboard');
Route::get('/user/submit',  [UserController::class, 'submit'])->name('submit');
Route::post('/user/submit', [UserController::class, 'save'])->name('submitmeme');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
