<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

//Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);

//Example without group
// Route::get('/course', [CourseController::class, 'index']);
// Route::get('/course/create', [CourseController::class, 'create']);
// Route::get('/course/{courseName}', [CourseController::class, 'show']);

//Example with group
Route::controller(CourseController::class)->group(function () {
    Route::get('/courses',  'index')->name('courses.index');
    Route::get('/courses/create',  'create')->name('courses.create');
    Route::post('/courses',  'store')->name('courses.store');
    Route::get('/courses/{id}',  'show')->name('courses.show');
    Route::get('/courses/{course}/edit',  'edit')->name('courses.edit');
    Route::put('/courses/{course}',  'update')->name('courses.update');
});;
