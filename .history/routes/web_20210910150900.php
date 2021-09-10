<?php

use App\Http\Controllers\AnswerController;
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
Route::resource('questions', QuestionController::class)->except('show');

Route::get('/questions/{slug}', [App\Http\Controllers\QuestionController::class, 'show'])->name('questions.show');

Route::resource('questions.answers', AnswerController::class)->except('index','create','show');

Route::prefix('question')->group(function () {
    
});

Route::post('/answers/{answer}/accept', [App\Http\Controllers\AcceptAnswerController::class, ''])->name('answers.accept');
    // Route::resource('/question', [App\Http\Controllers\QuestionController::class]);
 
    // Route::get('/index', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions.index');
    // Route::get('/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('questions.create');
    // Route::post('/store', [App\Http\Controllers\QuestionController::class, 'store'])->name('questions.store');
    // Route::get('/edit/{id}', [App\Http\Controllers\QuestionController::class, 'edit'])->name('questions.edit');
    // Route::post('/update/{id}', [App\Http\Controllers\QuestionController::class, 'update'])->name('questions.update');

