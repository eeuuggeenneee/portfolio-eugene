<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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
    return view('portfolio.home-main');
});


Route::get('/test', function () {
    return view('portfolio.home-bg-img');
});

Route::get('/test2', function () {
    return view('portfolio.blog-details');
});

Route::get('/test3', function () {
    return view('portfolio.home-dots-waves');
});

Route::get('/test4', function () {
    return view('portfolio.home-liquid-bg');
});

Route::get('/test5', function () {
    return view('portfolio.home-solid');
});

Route::get('/test6', function () {
    return view('portfolio.project-details');
});

Route::get('/projects/details/{id}', [ProjectController::class, 'show'])->name('project');