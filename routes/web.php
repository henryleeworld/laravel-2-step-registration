<?php

use App\Http\Controllers\Auth\RegisterStep2Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('register/step2', [RegisterStep2Controller::class, 'showForm']);
Route::post('register/step2', [RegisterStep2Controller::class, 'postForm'])->name('register.step2');
