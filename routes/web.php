<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

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

// Route for the Create/Edit page
Route::get('/create-edit', function () {
    return view('create_edit');
})->name('create.edit');

Route::resource('colleges', CollegeController::class)->except(['show']);
Route::resource('students', StudentController::class)->except(['show']);


//Route::resource('colleges', CollegeController::class);
//Route::resource('students', StudentController::class);

