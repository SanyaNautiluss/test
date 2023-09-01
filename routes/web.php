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
    return view('welcome');
});
//Frontend Controller
Route::get('/', [\App\Http\Controllers\QuizController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //categories
    Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('category/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('category/show/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::patch('category/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('category/destroy/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.categories.destroy');


    //tests
    Route::get('test', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.tests.index');
    Route::get('test/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.tests.create');
    Route::post('test/store', [\App\Http\Controllers\TestController::class, 'store'])->name('admin.tests.store');
    Route::get('test/show/{id}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.tests.show');
    Route::get('test/edit/{id}', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.tests.edit');
    Route::patch('test/update/{id}', [\App\Http\Controllers\TestController::class, 'update'])->name('admin.tests.update');
    Route::delete('test/destroy/{id}', [\App\Http\Controllers\TestController::class, 'destroy'])->name('admin.tests.destroy');

    //category_tests
    Route::get('category_test', [\App\Http\Controllers\Category_testController::class, 'index'])->name('admin.category_tests.index');
    Route::get('category_test/create', [\App\Http\Controllers\Category_testController::class, 'create'])->name('admin.category_tests.create');
    Route::post('category_test/store', [\App\Http\Controllers\Category_testController::class, 'store'])->name('admin.category_tests.store');
    Route::get('category_test/show/{id}', [\App\Http\Controllers\Category_testController::class, 'show'])->name('admin.category_tests.show');
    Route::get('category_test/edit/{id}', [\App\Http\Controllers\Category_testController::class, 'edit'])->name('admin.category_tests.edit');
    Route::patch('category_test/update/{id}', [\App\Http\Controllers\Category_testController::class, 'update'])->name('admin.category_tests.update');
    Route::delete('category_test/destroy/{id}', [\App\Http\Controllers\Category_testController::class, 'destroy'])->name('admin.category_tests.destroy');

    //questions
    Route::get('question', [\App\Http\Controllers\QuestionController::class, 'index'])->name('admin.questions.index');
    Route::get('question/create', [\App\Http\Controllers\QuestionController::class, 'create'])->name('admin.questions.create');
    Route::post('question/store', [\App\Http\Controllers\QuestionController::class, 'store'])->name('admin.questions.store');
    Route::get('question/show/{id}', [\App\Http\Controllers\QuestionController::class, 'show'])->name('admin.questions.show');
    Route::get('question/edit/{id}', [\App\Http\Controllers\QuestionController::class, 'edit'])->name('admin.questions.edit');
    Route::patch('question/update/{id}', [\App\Http\Controllers\QuestionController::class, 'update'])->name('admin.questions.update');
    Route::delete('question/destroy/{id}', [\App\Http\Controllers\QuestionController::class, 'destroy'])->name('admin.questions.destroy');

    //answers
    Route::get('answer', [\App\Http\Controllers\AnswerController::class, 'index'])->name('admin.answers.index');
    Route::get('answer/create', [\App\Http\Controllers\AnswerController::class, 'create'])->name('admin.answers.create');
    Route::post('answer/store', [\App\Http\Controllers\AnswerController::class, 'store'])->name('admin.answers.store');
    Route::get('answer/show/{id}', [\App\Http\Controllers\AnswerController::class, 'show'])->name('admin.answers.show');
    Route::get('answer/edit/{id}', [\App\Http\Controllers\AnswerController::class, 'edit'])->name('admin.answers.edit');
    Route::patch('answer/update/{id}', [\App\Http\Controllers\AnswerController::class, 'update'])->name('admin.answers.update');
    Route::delete('answer/destroy/{id}', [\App\Http\Controllers\AnswerController::class, 'destroy'])->name('admin.answers.destroy');

   

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
