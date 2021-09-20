<?php

namespace App\Http\Controllers;

use App\Models\WsEadModule;
use App\Models\WsEadClass;
use App\Models\AwsVideo;


use Illuminate\Http\Request;

class ModulesController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $modules = WsEadModule::get();
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
