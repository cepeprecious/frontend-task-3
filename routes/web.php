<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/', [PageController::class, 'homepage']);
Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/careers2', [PageController::class, 'careers2'])->name('careers2');
Route::get('/employers', [PageController::class, 'employers'])->name('employers');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact-us');
