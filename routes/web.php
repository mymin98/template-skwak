<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SIARefController;
use App\Http\Controllers\DashboardController;



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
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/sia', [SIARefController::class,'index'])->name('sia.index');

Route::get('/s', [SIARefController::class,'create'])->name('sia.create');
Route::post('/s', [SIARefController::class,'store'])->name('sia.store');

Route::get('/form',[FormController::class,'index'])->name('contoh.form');
