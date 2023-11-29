<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/review', [MainController::class,'review']);
Route::post('/review/check', [MainController::class,'review_check']);

Route::get('/redactor', [MainController::class,'redactor']);
Route::post('/store', [MainController::class,'store']);
Route::post('/upload', 'MainController@upload')->name('upload');






Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');;
