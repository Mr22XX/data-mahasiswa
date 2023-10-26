<?php

use App\Http\Controllers\StudentController;
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

Route::get('/address/{id}', [StudentController::class, 'show']);
Route::get('/creates',  [StudentController::class, 'create'])->name('create');
Route::post('/creates', [StudentController::class,'store'])->name('store');
