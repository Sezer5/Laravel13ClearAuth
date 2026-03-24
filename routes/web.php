<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login',[AdminController::class,"login"])->name('admin.login');
