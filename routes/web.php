<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CoursesController;
use App\http\Controllers\CategoriesController;
Route::get('/', function () {
    return view('home');
});

Route::controller(CoursesController::class)->group(function () {
    Route::get("/", "index");
});

// Route::controller(CategoriesController::class)->group(function () {
//     Route::get("/", "index");
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
