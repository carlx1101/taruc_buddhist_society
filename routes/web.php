<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
Use App\Http\Controllers\PostsController;
Use App\Http\Controllers\EventController;


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



// Route::get('/hello', function () {

//     return "This is my laravel";
// });

// Route::get('/', [PagesController::class, 'index']);

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'this is user ' .$name. 'with user' .;
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/services', [PagesController::class, 'services']);


Route::resources([
    'posts' => PostsController::class,
]);
Auth::routes();

Route::resources([
    'events' => EventController::class,
]);
Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
