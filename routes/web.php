<?php

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
Route::get('/klient', 'KlientController@index')->name('klient')->middleware('klient');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/postier', 'PostierController@index')->name('postier')->middleware('postier');

Route::resource('produkt', ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/klient',[PorosiController::class,'index']);
Route::post('/create-porosi',[PorosiController::class, 'store'])->name('create.porosi');
Route::get('/postier',[PostierController::class,'index']);
Route::post('/update-porosi/{id}',[PostierController::class, 'update'])->name('update.porosi');
Route::redirect('home','/dashboard');
Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';
