<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ApiCoursesController;
use App\Models\Course;
use App\Models\Category;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/courses", function () {
    return Course::all();
});

Route::get("/courses/{id}", function (Course $id) {
    return $id;
});

Route::get("/categories", function () {
    return Category::all();
});

