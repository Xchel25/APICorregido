<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Definir las rutas para registro e inicio de sesión
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
