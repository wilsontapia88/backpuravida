<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsEadCourse;
use App\Models\WsEadModule;
use App\Models\WsEadClass;
use App\Models\WsEadCoursesSegment;

use App\Models\AwsVideo;

class CourseController extends Controller
{

    public function index(){

        $segments = WsEadCoursesSegment::get();
        foreach($segments as $segment){
            $courses = WsEadCourse::where('course_segment', $segment->segment_id)->get();
            foreach ($courses as $course) {
                $modules = WsEadModule::where('course_id', $course->course_id)->get();
                foreach($modules as $module){
                    $clasess = WsEadClass::where('module_id', $module->module_id)->get();
                    foreach($clasess as $clases){
                        $linkurl = AwsVideo::where('codigo', $clases->class_video)->first();
                        if(isset($linkurl)){
                            if (str_contains($linkurl->url, 'd2cqg1nz1xl5v3')) {
                                $linkvideo = $linkurl->url;
                            } else {
                                $linkvideo = 'https://d2cqg1nz1xl5v3.cloudfront.net/'.$linkurl->url;
                            }
                            $clases['class_video_url'] = $linkvideo;
                        }else{
                            $clases['class_video_url'] = null;
                        }
                    }
                    $module['aulas'] = $clasess;
                }
                $course['modules'] = $modules;
            }
            $segment['courses'] = $courses;
        }

        return response()->json($segments);
    }


    public function show($id){
        $course = WsEadCourse::where('course_id', $id)->first();
        $modules = WsEadModule::where('course_id', $course->course_id)->get();
        foreach($modules as $module){
            $clasess = WsEadClass::where('module_id', $module->module_id)->get();
            foreach($clasess as $clases){
                $linkurl = AwsVideo::where('codigo', $clases->class_video)->first();
                if(isset($linkurl)){
                    if (str_contains($linkurl->url, 'd2cqg1nz1xl5v3')) {
                        $linkvideo = $linkurl->url;
                    } else {
                        $linkvideo = 'https://d2cqg1nz1xl5v3.cloudfront.net/'.$linkurl->url;
                    }
                    $clases['class_video_url'] = $linkvideo;
                }else{
                    $clases['class_video_url'] = null;
                }
            }
            $module['aulas'] = $clasess;
        }
        $course['modules'] = $modules;
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
