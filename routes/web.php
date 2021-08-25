<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/dashboard', function () {
    return redirect('cv/create');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::post('/cv/create/post', [\App\Http\Controllers\resume::class, 'store']);

    Route::get('/cv/show-my-cv/{id}', [\App\Http\Controllers\resume::class, 'singelResume']);

    Route::get('/cv/show-all', [\App\Http\Controllers\resume::class, 'getAllResume']);

});



Route::middleware(['auth:sanctum', 'verified'])->get('cv/create', function () {
    return view('cv.create');

})->name('create');
