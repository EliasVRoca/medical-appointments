<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', fn() => view('admin.dashboard'))->name('dashboard');
Route::resource('roles', RoleController::class); // Added route for RoleController