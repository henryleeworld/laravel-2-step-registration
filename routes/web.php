<?php

use App\Http\Controllers\Auth\RegisterStep2Controller;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('register/step2', [RegisterStep2Controller::class, 'showForm']);
Route::post('register/step2', [RegisterStep2Controller::class, 'postForm'])->name('register.step2');
