<?php

use App\Http\Controllers\ProdukController;
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


Route::middleware('isLogin', 'CekRole:admin')->group(function () {
    Route::get('/tambahProduk', [ProdukController::class, 'create'])->name('tambah.produk');
    Route::post('/tambahProduk', [ProdukController::class, 'store'])->name('tambah-produk');
    Route::get('/productData', [TefaController::class, 'productData'])->name('product.data');
    Route::get('/productProfit', [TefaController::class, 'productProfit'])->name('product.profit');
    Route::get('/industry', [TefaController::class, 'industry'])->name('product.industry');
    Route::delete('/delete/{id}',[ProdukController::class, 'destroy'])->name('delete');
});

Route::middleware('isLogin', 'CekRole:admin,user')->group(function(){
    Route::get('/profile',[TefaController::class, 'profile'])->name('profile');
    Route::get('/tefa/profile/upload',[TefaController::class, 'uploadProfile'])->name('tefa.profile.upload');
    Route::patch('/tefa/profile/change', [TefaController::class, 'changeProfile'])->name('tefa.profile.change');
    
});
Route::get('/', [TefaController::class, 'index']);

Route::middleware('isGuest')->group(function () {
    Route::get('/login', [TefaController::class, 'login'])->name('login.io');
    Route::post('/login/auth', [TefaController::class, 'auth'])->name('login.auth');
    Route::get('/register', [TefaController::class, 'register'])->name('register.io');
    Route::post('/register/input', [TefaController::class, 'registerAccount'])->name('register.input');
});
Route::middleware('isLogin')->group(function () {
    Route::get('/dashboard', [TefaController::class, 'dashboard'])->name('dashboard');
    Route::get('/layout', [TefaController::class, 'layout'])->name('layout');
    Route::get('/error', [TefaController::class, 'error'])->name('error');
});

Route::post('/logout', [TefaController::class, 'logout'])->name('logout');
