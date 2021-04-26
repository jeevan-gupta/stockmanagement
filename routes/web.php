<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\LtpController;

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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes([
    'register' => false
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('client')->name('client.')->middleware(['auth'])->group(function () {
    Route::get('/list', [ClientController::class, 'index'])->name('list');
    Route::get('/show/{id}', [ClientController::class, 'show'])->name('show');
    Route::get('/add', [ClientController::class, 'form'])->name('add');
    Route::post('/add', [ClientController::class, 'submit'])->name('submit');
    Route::get('delete/{id}', [ClientController::class, 'destroy'])->name('delete');
    Route::get('update/{id}', [ClientController::class, 'edit']);
    Route::post('update/{id}', [ClientController::class, 'update'])->name('update');
    });

Route::prefix('company')->name('company.')->middleware(['auth'])->group(function () {
    Route::get('/list', [CompanyController::class, 'index'])->name('list');
    Route::get('/add', [CompanyController::class, 'form'])->name('add');
    Route::post('/add', [CompanyController::class, 'submit'])->name('submit');
    Route::get('delete/{id}', [CompanyController::class, 'destroy'])->name('delete');
    Route::get('update/{id}', [CompanyController::class, 'edit']);
    Route::post('update/{id}', [CompanyController::class, 'update'])->name('update');
});
Route::prefix('buy')->name('buy.')->middleware(['auth'])->group(function () {
    Route::get('/list', [BuyController::class, 'index'])->name('list');
    Route::get('/add', [BuyController::class, 'form'])->name('add');
    Route::post('/add', [BuyController::class, 'submit'])->name('submit');
    Route::get('delete/{id}', [BuyController::class, 'destroy'])->name('delete');
    Route::get('update/{id}', [BuyController::class, 'edit']);
    Route::post('update/{id}', [BuyController::class, 'update'])->name('update');
});
Route::prefix('sell')->name('sell.')->middleware(['auth'])->group(function () {
    Route::get('/list', [SellController::class, 'index'])->name('list');
    Route::get('/add', [SellController::class, 'form'])->name('add');
    Route::post('/add', [SellController::class, 'submit'])->name('submit');
    Route::get('delete/{id}', [SellController::class, 'destroy'])->name('delete');
    Route::get('update/{id}', [SellController::class, 'edit']);
    Route::post('update/{id}', [SellController::class, 'update'])->name('update');
});
Route::prefix('ltp')->name('ltp.')->middleware(['auth'])->group(function () {
    Route::get('/list', [LtpController::class, 'index'])->name('list');
    Route::get('/add', [LtpController::class, 'form'])->name('add');
    Route::post('/add', [LtpController::class, 'submit'])->name('submit');
    Route::get('delete/{id}', [LtpController::class, 'destroy'])->name('delete');
    Route::get('update/{id}', [LtpController::class, 'edit']);
    Route::post('update/{id}', [LtpController::class, 'update'])->name('update');
});