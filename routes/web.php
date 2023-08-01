<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactUsController;

use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('courses', CourseController::class);

//example with resource change url name
//Route::resource('videos', CourseController::class)->parameters(['videos' => 'course'])->names('courses');

Route::view('about_us', 'about_us')->name('about-us');

Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::post('contact-us', [ContactUsController::class, 'store'])->name('contact_us.store');
