<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/deshboard',[HomeController::class, 'index'])->name('deshboard');
Route::post('/deshboard',[HomeController::class, 'submitindex'])->name('deshboard');
Route::get('/data',[HomeController::class, 'submitindex'])->name('data');
Route::get('/add/name',[HomeController::class, 'addname'])->name('name');
Route::post('/add/name',[HomeController::class, 'submitaddname'])->name('submit');