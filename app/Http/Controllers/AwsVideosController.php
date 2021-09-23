<?php

namespace App\Http\Controllers;
use App\Models\AwsVideo;


use Illuminate\Http\Request;

class AwsVideosController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $videos = AwsVideo::get();

        return response()->json($videos);
    }

    public function show($id){
        $video = AwsVideo::find($id);

        return response()->json($video);
    }

}
