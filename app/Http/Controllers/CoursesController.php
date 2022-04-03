<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use League\CommonMark\CommonMarkConverter;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::all();
        $categories = Category::all();
        return view("home", compact("courses", "categories"));
    }

    public function show (Course $id) {
        // $converter = new CommonMarkConverter([
        //     'html_input' => 'strip',
        //     'allow_unsafe_links' => false,
        // ]);

        $course = $id;

        return view("course.show", compact("course"));
    }

}
