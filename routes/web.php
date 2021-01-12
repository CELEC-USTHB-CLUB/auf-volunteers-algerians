<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"]);
Route::get('/admin/login', [AdminPanelController::class, "showLogin"]);
Route::post('/admin/login', [AdminController::class, "check"]);
Route::get('/admin/dashboard', [AdminPanelController::class, "dashboard"])->middleware("auth");
