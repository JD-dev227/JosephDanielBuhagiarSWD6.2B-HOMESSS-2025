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

// Route for the home page (this will load the 'welcome' view)
// This is the default route when visiting the root URL of your app ("/")
Route::get('/', function () {
    return view('welcome'); // This will load the 'welcome.blade.php' view
});

// Route for the Create/Edit page
// This route will display a form or page to create or edit something, and it uses the 'create_edit' view.
Route::get('/create-edit', function () {
    return view('create_edit'); // This will load the 'create_edit.blade.php' view
})->name('create.edit'); // Named route for easy reference

// Another route for the root URL, but this time it returns the 'home' view.
// It overrides the first route for '/'.
Route::get('/', function () {
    return view('home');  // This will load 'home.blade.php' view instead of 'welcome'
})->name('home'); // Named route for 'home'

/**
 * Resource routes for 'colleges' and 'students' with specified actions
 * Resource routes automatically create multiple routes for common CRUD actions (index, create, store, show, edit, update, destroy)
 */

// Route group for the 'colleges' resource, excluding the 'show' action
// The 'except' method means that the 'show' route won't be created.
Route::resource('colleges', CollegeController::class)->except(['show']);

// Route group for the 'students' resource, excluding the 'show' action
// Similar to the colleges resource but for students
Route::resource('students', StudentController::class)->except(['show']);

// Another route for the 'students' resource, but this time all CRUD actions are included
Route::resource('students', StudentController::class);