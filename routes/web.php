<?php

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
Route::get('/insurance_visitors', [App\Http\Controllers\HomeController::class, 'InsuranceVisitors'])->name('InsuranceVisitors');
Route::get('/insurance_compare', [App\Http\Controllers\HomeController::class, 'InsuranceCompare'])->name('InsuranceCompare');
Route::get('/travel_history', [App\Http\Controllers\HomeController::class, 'TravelHistory'])->name('TravelHistory');
Route::get('/insurance_details', [App\Http\Controllers\HomeController::class, 'InsuranceDetails'])->name('InsuranceDetails');
Route::get('/insurance_purchase', [App\Http\Controllers\HomeController::class, 'InsurancePurchase'])->name('InsurancePurchase');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
