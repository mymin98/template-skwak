<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
} );
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/sia', [App\Http\Controllers\SIARefController::class,'index'])->name('sia.index');

Route::get('/sia/create', [App\Http\Controllers\SIARefController::class,'create'])->name('sia.create');
Route::post('/sia/create', [App\Http\Controllers\SIARefController::class,'store'])->name('sia.store');
