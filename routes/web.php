<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|--------------------------------------------------------------------------*/


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
}) 

    ->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/*
|--------------------------------------------------------------------------
| Routes del modelo (kike)
|--------------------------------------------------------------------------
| 
|Creador de todas las routes del modelo creado.
|
|--------------------------------------------------------------------------*/

Route::resource('works', WorkController::class)
    ->middleware('auth')
    ->names('works');

Route::resource('images', ImageController::class)
    ->names('images');

Route::resource('about', AboutController::class)
    ->names('about');
/*
|--------------------------------------------------------------------------
| Routes (kike)
|--------------------------------------------------------------------------
| 
|
|
|--------------------------------------------------------------------------*/

Route::get('/nunuku', function () {
    return view('works.nunuku');
})
    ->name('works.nunuku');

Route::get('/nsic', function () {
     return view('works.nsic');
})
    ->name('works.nsic');

Route::get('/about', function () {
    return view('about');
})
    ->name('about');




