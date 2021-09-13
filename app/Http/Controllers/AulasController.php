<?php

namespace App\Http\Controllers;

use App\Models\ws_ead_classe;
use App\Models\ws_ead_course;
use App\Models\ws_ead_module;


use Illuminate\Http\Request;

class AulasController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


        $course = ws_ead_course::get();
        dd($course);
        // $teste = $course->modules();
        // dd($teste);
        // return view('teste', compact('aula'));
        return response()->json($course);
    }

    public function show($id){
        $course = ws_ead_course::find($id);
        return response()->json($course);
    }

    public function showToAulas() {
        $course = ws_ead_course::take(4)->get();
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
