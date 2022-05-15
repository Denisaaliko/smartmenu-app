<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PorosiController;
use App\Http\Controllers\PostierController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleSocialiteController;
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


Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Admin
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'admin'])->name('dashboard');
Route::resource('produkt', ProductController::class)->middleware(['auth', 'admin']);
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/porosi',[AdminController::class,'index'])->name('show.porosi')->middleware(['auth', 'admin']);

// Klient
Route::get('/klient',[PorosiController::class,'index'])->name('klient')->middleware(['auth', 'klient']);
Route::post('/create-porosi',[PorosiController::class, 'store'])->middleware(['auth', 'klient'])->name('create.porosi');

// Postier
Route::get('/postier',[PostierController::class,'index'])->name('postier')->middleware(['auth', 'postier']);
Route::post('/update-porosi/{id}',[PostierController::class, 'update'])->middleware(['auth', 'postier'])->name('update.porosi');

// General
Route::redirect('home','/dashboard');
Route::get('/', function () {return view('welcome');});


require __DIR__.'/auth.php';
