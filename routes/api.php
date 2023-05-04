<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\KlientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [AuthController::class, 'register'])->name("register");
Route::post('/login', [AuthController::class, 'login'])->name("login");

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'getAuth']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users', [UserController::class, 'update']);
    Route::delete('/users', [UserController::class, 'destroy']);

// Krijo klient

    Route::get('/klients', [KlientController::class, 'index']);
    Route::post('/klients', [KlientController::class, 'store']);
    Route::put('/klients/update/{id}', [KlientController::class, 'update']);
    Route::delete('/klients/delete/{id}', [KlientController::class, 'destroy']);

});
