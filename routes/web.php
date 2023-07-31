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

Route::resource('courses', CourseController::class);

//example with resource change url name
//Route::resource('videos', CourseController::class)->parameters(['videos' => 'course'])->names('courses');
