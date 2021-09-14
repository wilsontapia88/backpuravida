<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsEadCourse;

class CourseController extends Controller
{
    public function index(){
        $course = WsEadCourse::get();
        return response()->json($course);
    }

    public function show($id){
        $course = WsEadCourse::where('course_id', $id)->first();
        return response()->json($course);
    }

    public function showToAulas() {
        $course = WsEadCourse::take(4)->get();
        return response()->json($course);
    }

    public function indexForTest(){
        $course = WsEadCourse::get();
        return response()->json($course);
    }

}
