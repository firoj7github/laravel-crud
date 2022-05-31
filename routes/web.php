<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('signin', [StudentController::class, 'signin'])->name('signin');
Route::get('signup', [StudentController::class, 'signup'])->name('signup');
Route::post('registration', [StudentController::class, 'submitData'])->name('registration');
Route::get('list', [StudentController::class, 'list'])->name('list');
Route::get('delete_student/{id}', [StudentController::class, 'delete_student'])->name('delete_student');
Route::get('edit_student/{id}', [StudentController::class, 'edit_student'])->name('edit_student');
Route::get('update_student/{id}', [StudentController::class, 'update_student'])->name('update_student');
