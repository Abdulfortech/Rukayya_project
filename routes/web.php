<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PlagiarismController;

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

Route::get('/login', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [SigninController::class, 'store'])->name('createAccount');
Route::post('/login', [SigninController::class, 'login'])->name('login');
Route::post('/logout', [SigninController::class, 'logout'])->middleware('auth');

Route::get('/home', [UserController::class, 'index'])->middleware('auth');
Route::get('/projects/add', [UserController::class, 'projectAdd'])->middleware('auth');
Route::get('/project/{id}', [UserController::class, 'projectShow'])->middleware('auth');
Route::post('/project/add', [UserController::class, 'storeProject'])->name('createProject')->middleware('auth');
Route::get('/students/add', [UserController::class, 'studentAdd'])->middleware('auth');
Route::post('/student/add', [UserController::class, 'storeStudent'])->name('createStudent')->middleware('auth');
Route::get('/students', [UserController::class, 'students'])->middleware('auth');
// plagiarism checker
Route::get('/plagiarism', [PlagiarismController::class, 'index'])->middleware('auth');
Route::post('/plagiarism', [PlagiarismController::class, 'check'])->name('check')->middleware('auth');


// students route

Route::get('/student/home', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/project/{project}', [StudentController::class, 'project'])->middleware('auth');
Route::get('/student/chapter/{project}', [StudentController::class, 'addChapter'])->middleware('auth');
Route::get('/student/lecturer/{user}', [StudentController::class, 'lecturer'])->middleware('auth');
Route::post('/student/project/', [StudentController::class, 'storeChapter'])->name('addChapter')->middleware('auth');