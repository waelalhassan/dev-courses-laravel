<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
class CoursesController extends Controller
{
    public function index() {
        $courses = Course::all();
        $categories = Category::all();
        return view("home", compact("courses", "categories"));
    }

    public function show (Course $id) {
        $course = $id;
        return view("course.course", compact("course"));
    }

}
