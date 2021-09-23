<?php

namespace App\Http\Controllers;

use App\Models\WsEadModule;
use App\Models\WsEadClass;
use App\Models\AwsVideo;
use App\Models\WsEadCourse;


use Illuminate\Http\Request;

class ModulesController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
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

        return response()->json($modules);
    }

    public function show($id){
        $module = WsEadModule::find($id);


        return response()->json($module);
    }

    public function showToModules() {
        $module = WsEadModule::take(4)->get();
        return response()->json($module);
    }

}
