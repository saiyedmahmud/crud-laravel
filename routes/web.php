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

Route::get('/add', [MainController::class, 'add'])->name('student.add');
Route::post('/create', [MainController::class, 'create'])->name('student.create');
Route::get('/student', [MainController::class, 'student'])->name('student.all');
Route::get('/delete/{id}', [MainController::class, 'delete_student'])->name('student.delete');
Route::get('/edit/{id}', [MainController::class, 'edit'])->name('student.edit');
Route::post('/update/{id}', [MainController::class, 'update'])->name('student.update');
