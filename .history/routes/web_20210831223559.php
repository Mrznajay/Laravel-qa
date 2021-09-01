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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resources([
//     'questions' => QuestionController::class,
// ]);
Route::prefix('question')->group(function () {

});
    // Route::resource('/question', [App\Http\Controllers\QuestionController::class]);
 
    Route::get('/index', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions.index');
    Route::get('/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('questions.create');
    Route::post('/store', [App\Http\Controllers\QuestionController::class, 'store'])->name('questions.store');
    Route::get('/edit/{}', [App\Http\Controllers\QuestionController::class, 'edit'])->name('questions.edit');

