<?php

use Illuminate\Support\Facades\Auth;
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




Auth::routes();

 


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::view('about', 'about')->name('about');
    Route::get('/userName', [\App\Http\Controllers\AuthController::class, 'getUser']);

    Route::middleware(['auth', 'role'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        //users
        Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index');
        Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
        Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])->name('admin.users.store');
        Route::get('user/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
        Route::patch('user/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
        Route::delete('user/destroy/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.destroy');

        //roles
        Route::get('role', [\App\Http\Controllers\RoleController::class, 'index'])->name('admin.roles.index');
        Route::get('role/create', [\App\Http\Controllers\RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('role/store', [\App\Http\Controllers\RoleController::class, 'store'])->name('admin.roles.store');
        Route::get('role/edit/{id}', [\App\Http\Controllers\RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::patch('role/update/{id}', [\App\Http\Controllers\RoleController::class, 'update'])->name('admin.roles.update');
        Route::delete('role/destroy/{id}', [\App\Http\Controllers\RoleController::class, 'destroy'])->name('admin.roles.destroy');

        //permissions
        Route::get('permission', [\App\Http\Controllers\PermissionController::class, 'index'])->name('admin.permissions.index');
        Route::get('permission/create', [\App\Http\Controllers\PermissionController::class, 'create'])->name('admin.permissions.create');
        Route::post('permission/store', [\App\Http\Controllers\PermissionController::class, 'store'])->name('admin.permissions.store');
        Route::get('permission/edit/{id}', [\App\Http\Controllers\PermissionController::class, 'edit'])->name('admin.permissions.edit');
        Route::patch('permission/update/{id}', [\App\Http\Controllers\PermissionController::class, 'update'])->name('admin.permissions.update');
        Route::delete('permission/destroy/{id}', [\App\Http\Controllers\PermissionController::class, 'destroy'])->name('admin.permissions.destroy');

        //categories
        Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('category/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::patch('category/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('category/destroy/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.categories.destroy');

        //tests
        Route::get('test', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.tests.index');
        Route::get('test/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.tests.create');
        Route::post('test/store', [\App\Http\Controllers\TestController::class, 'store'])->name('admin.tests.store');
        Route::get('test/edit/{id}', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.tests.edit');
        Route::patch('test/update/{id}', [\App\Http\Controllers\TestController::class, 'update'])->name('admin.tests.update');
        Route::delete('test/destroy/{id}', [\App\Http\Controllers\TestController::class, 'destroy'])->name('admin.tests.destroy');

        //questions
        Route::get('question', [\App\Http\Controllers\QuestionController::class, 'index'])->name('admin.questions.index');
        Route::get('question/create', [\App\Http\Controllers\QuestionController::class, 'create'])->name('admin.questions.create');
        Route::post('question/store', [\App\Http\Controllers\QuestionController::class, 'store'])->name('admin.questions.store');
        Route::get('question/edit/{id}', [\App\Http\Controllers\QuestionController::class, 'edit'])->name('admin.questions.edit');
        Route::patch('question/update/{id}', [\App\Http\Controllers\QuestionController::class, 'update'])->name('admin.questions.update');
        Route::delete('question/destroy/{id}', [\App\Http\Controllers\QuestionController::class, 'destroy'])->name('admin.questions.destroy');

        //answers
        Route::get('answer', [\App\Http\Controllers\AnswerController::class, 'index'])->name('admin.answers.index');
        Route::get('answer/create', [\App\Http\Controllers\AnswerController::class, 'create'])->name('admin.answers.create');
        Route::post('answer/store', [\App\Http\Controllers\AnswerController::class, 'store'])->name('admin.answers.store');
        Route::get('answer/edit/{id}', [\App\Http\Controllers\AnswerController::class, 'edit'])->name('admin.answers.edit');
        Route::patch('answer/update/{id}', [\App\Http\Controllers\AnswerController::class, 'update'])->name('admin.answers.update');
        Route::delete('answer/destroy/{id}', [\App\Http\Controllers\AnswerController::class, 'destroy'])->name('admin.answers.destroy');

        //results
        Route::get('result', [\App\Http\Controllers\ResultController::class, 'index'])->name('admin.results.index');
        Route::get('result/create', [\App\Http\Controllers\ResultController::class, 'create'])->name('admin.results.create');
        Route::post('result/store', [\App\Http\Controllers\ResultController::class, 'store'])->name('admin.results.store');
        Route::get('result/show/{id}', [\App\Http\Controllers\ResultController::class, 'show'])->name('admin.results.show');
        Route::delete('result/destroy/{id}', [\App\Http\Controllers\ResultController::class, 'destroy'])->name('admin.results.destroy');
    });

//Frontend Controller
Route::get('/', [\App\Http\Controllers\QuizController::class, 'indexWelcome'])->name('welcome');
Route::get('/results/{resultId}', [\App\Http\Controllers\QuizController::class, 'getResultData']);
Route::get('/{category}', [\App\Http\Controllers\QuizController::class, 'indexTest'])->name('test');
Route::get('/test/{test}', [\App\Http\Controllers\QuizController::class, 'indexQuiz'])->name('quiz');
Route::post('/quiz', [\App\Http\Controllers\QuizController::class, 'store']); 
