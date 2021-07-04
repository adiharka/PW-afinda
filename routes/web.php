<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TutorController;


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
    return view('auth.login');
})->name('index');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/user-list', [AdminController::class, 'userList'])->name('admin.userList');
    Route::resource('tutor', TutorController::class)->names('admin.tutor');
    Route::get('/tutor/course/{id}', [TutorController::class, 'createCourse'])->name('admin.tutor.createCourse');
    Route::post('/tutor/course/{id}', [TutorController::class, 'storeCourse'])->name('admin.tutor.storeCourse');
    Route::delete('/tutor/course/{id}', [TutorController::class, 'destroyCourse'])->name('admin.tutor.destroyCourse');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('user.index');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/schedule', [UserController::class, 'schedule'])->name('user.schedule');
    Route::get('/schedule/course', [UserController::class, 'selectCourse'])->name('user.selectCourse');
    Route::post('/schedule/course', [UserController::class, 'storeCourse'])->name('user.storeCourse');
    Route::get('/tutor', [UserController::class, 'tutor'])->name('user.tutor');
});

Route::get('/{any}', function () {
    return redirect()->route('login');
})->where('any', '.*');
