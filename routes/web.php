<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' => 'admin'], function () {
    //ajoute ici les route de l'administrateur
    Route::get('/home', [App\Http\Controllers\ContractController::class, 'index'])->name('home');
});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'client'], function () {
    //ajoute ici les route du client
    Route::get('/home', [App\Http\Controllers\ContractController::class, 'index'])->name('home');
    Route::get('/quotation/create', [App\Http\Controllers\QuotationController::class, 'create'])->name('quotation.create');
    Route::post('/quotation/store', [App\Http\Controllers\QuotationController::class, 'store'])->name('quotation.store');
});
