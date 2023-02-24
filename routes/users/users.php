<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function() {
    Route::get('/users/registration', 'create')->name('user.create');
    // Route::get('/users/registration/vk', 'vk')->name('user.vk');
    Route::post('/users/registration', 'store')->name('user.store');
});

