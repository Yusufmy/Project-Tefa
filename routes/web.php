<?php

use App\Http\Controllers\TefaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TefaController::class, 'index']);
Route::middleware('isGuest')->group(function () {
    Route::get('/login', [TefaController::class, 'login'])->name('login.io');
    // Route::post('/login/auth', [TefaController::class, 'auth'])->name('login.auth');
    Route::get('/register', [TefaController::class, 'register'])->name('register.io');
    Route::post('/register/input', [TefaController::class, 'registerAccount'])->name('register.input');
});
Route::middleware('isGuest')->group(function () {
    Route::get('/dashboard', [TefaController::class, 'dashboard'])->name('dashboard');
    Route::get('/layout', [TefaController::class, 'layout'])->name('layout');
    Route::get('/productProfit', [TefaController::class, 'productProfit'])->name('product.profit');
    Route::get('/industry', [TefaController::class, 'industry'])->name('product.industry');
});
