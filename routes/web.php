<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CoursesController;
use App\http\Controllers\OffersController;

Route::get('/', function () {
    return view('home');
});

Route::controller(CoursesController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/course/{id}", "show")->name("course.show");
});

Route::get("/", [OffersController::class, "index"]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
