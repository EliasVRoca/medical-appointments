<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', fn() => view('admin.dashboard'))->name('dashboard');
Route::resource('roles', RoleController::class); // Added route for RoleController
Route::resource('users', UserController::class); // Added route for UserController
