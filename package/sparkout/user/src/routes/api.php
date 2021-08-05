<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Sparkout\User\app\Http\controller\UserController;

Route::get('/register', [UserController::class, 'index'])->name('register');
