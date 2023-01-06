<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware('isGuest')->group(function(){
    Route::get('/', [PpdbController::class, 'index']);
    Route::get('/register', [PpdbController::class, 'ppdb']);
    Route::post('/register/auth', [LoginController::class, 'registerAuth']);
    Route::get('/print', [LoginController::class, 'print']);
    Route::get('/login', [LoginController::class, 'login']);
    Route::post('/login/auth', [LoginController::class, 'loginAuth']);
});

Route::middleware('isUser', 'checkRole:user')->group(function(){
    Route::post('/payment/auth', [PaymentController::class, 'payAuth']); 
    Route::put('/update/{id}', [PaymentController::class, 'update']);
});

Route::middleware('isUser', 'checkRole:admin')->group(function(){
    Route::get('/detail/{id}', [PaymentController::class, 'detailAdmin']);
    Route::get('/show/student/{id}', [PaymentController::class, 'showStudent']);
    Route::get('/validation/{id}', [PaymentController::class, 'validation']);
    Route::get('/reject/{id}', [PaymentController::class, 'reject']);
});

Route::middleware('isUser', 'checkRole:admin,user')->group(function(){
    Route::get('/payhome', [PaymentController::class, 'payHome']);  
    Route::get('/payment', [PaymentController::class, 'payPage']);  
});

Route::get('/logout', [PaymentController::class, 'logout']);
