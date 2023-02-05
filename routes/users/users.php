<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::controller(UserController::class)->group(function() {
    Route::get('/users/registration', 'create')->name('user.create');
    Route::post('/users/registration', 'store')->name('user.store');
});

