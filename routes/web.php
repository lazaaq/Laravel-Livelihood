<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SertificateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MyController::class, 'index']);
// Route::get('/store', [MyController::class, 'store']);
Route::get('/contact', [MyController::class, 'contact']);
Route::get('/product', [MyController::class, 'product']);
Route::get('/product/{product:slug}', [MyController::class, 'single_product']);
Route::get('/certificate/{sertificate:slug}', [MyController::class, 'single_certificate']);

Route::get('/admin', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/admin', [AuthenticatedSessionController::class, 'store']);

Route::middleware(['auth'])->group(function(){
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::resource('/dashboard/product', ProductController::class);
    Route::resource('/dashboard/certificate', SertificateController::class);
});














require __DIR__.'/auth.php';