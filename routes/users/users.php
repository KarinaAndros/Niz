<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users/registration', [UserController::class, 'registration_form'])->name('registration_form');
