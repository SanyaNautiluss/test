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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('answer', [\App\Http\Controllers\AnswerController::class, 'index'])->name('admin.answer');
    Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('admin.category');
    Route::get('question', [\App\Http\Controllers\QuestionController::class, 'index'])->name('admin.question');
    Route::get('result', [\App\Http\Controllers\ResultController::class, 'index'])->name('admin.result');
    Route::get('test', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.test');


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
