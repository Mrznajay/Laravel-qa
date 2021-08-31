<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\QuestionController;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resources(['question' => QuestionController::class]);
Route::prefix('admin')->group(function () {
    // Route::resource('/question', [App\Http\Controllers\QuestionController::class]);
});

Auth::routes();

// Route::post('/store', [App\Http\Controllers\QuestionController::class, 'store'])->name('question.store');
// Route::get('/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('question.create');
// Route::get('/index', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');
