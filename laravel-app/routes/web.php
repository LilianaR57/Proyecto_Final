<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('modules.users.login');
});

Route::get('/content', function () {
    return view('modules.users.start');
})->name('start');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/first-user', [UsersController::class, 'firstUser']);


Route::get('/register-user', [UsersController::class, 'create'])->name('users.create');
Route::post('/register-user', [UsersController::class, 'store'])->name('users.store');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');