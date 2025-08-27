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
Route::get('students',[StudentController::class,'index'])->name('students.index');
Route::get('students/add',[StudentController::class,'create'])->name('students.create');
Route::post('students',[StudentController::class,'store'])->name('students.store');
Route::get('students/{student}/edit',[StudentController::class,'edit'])->name('edit');
Route::put('students/{student}/update',[StudentController::class,'update'])->name('students.update');
// Route::post('students/{student}/delete',[StudentController::class,'destroy'])->name('students.destroy');
Route::delete('students/{student}', [StudentController::class,'destroy'])->name('students.destroy');
