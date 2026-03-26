<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login',[AdminController::class,"login"])->name('admin.login');
Route::post('/admin/auth',[AdminController::class,"auth"])->name('admin.auth');



Route::middleware(['role:admin'])->group(function(){
    Route::post('/admin/logout',[AdminController::class,"logout"])->name('admin.logout');
    Route::get('/admin/home',[AdminController::class,"index"])->name('admin.home');
    Route::resource('role', RoleController::class);

});