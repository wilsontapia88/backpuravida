<?php

namespace App\Http\Controllers;

use App\Models\ws_ead_classe;
use App\Models\WsEadCourse;
use App\Models\ws_ead_module;


use Illuminate\Http\Request;

class AulasController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


        $course = WsEadCourse::get();
        dd($course);
        // $teste = $course->modules();
        // dd($teste);
        // return view('teste', compact('aula'));
        return response()->json($course);
    }

    public function show($id){
        $course = WsEadCourse::find($id);
        return response()->json($course);
    }

    public function showToAulas() {
        $course = WsEadCourse::take(4)->get();
        // $teste = $course->modules();
        // dd($teste);
        // return view('teste', compact('aula'));
        return response()->json($course);
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
