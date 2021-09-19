<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsEadCourse;
use App\Models\WsEadModule;
use App\Models\WsEadClass;
use App\Models\AwsVideo;

class CourseController extends Controller
{

    public function index(){
        $courses = WsEadCourse::get();
        foreach ($courses as $course) {
            $modules = WsEadModule::where('course_id', $course->course_id)->get();
            foreach($modules as $module){
                $clasess = WsEadClass::where('module_id', $module->module_id)->get();
                foreach($clasess as $clases){
                    $linkurl = AwsVideo::where('codigo', $clases->class_video)->first();
                    if(isset($linkurl)){
                        $clacses['class_video_url'] = $linkurl->url;
                    }else{
                        $clacses['class_video_url'] = null;
                    }
                }
                $module['aulas'] = $clasess;
            }
            $course['modules'] = $modules;
        }
        return response()->json($courses);
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
