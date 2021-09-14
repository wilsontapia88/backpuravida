<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsPost;

class PostController extends Controller
{
    public function index(){
        $course = WsPost::get();
        return response()->json($course);
    }

    public function show($id){
        $course = WsPost::where('post_id', $id)->first();
        return response()->json($course);
    }
}
