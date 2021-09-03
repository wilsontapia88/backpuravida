<?php

namespace App\Http\Controllers;

use App\Models\ws_ead_classe;
use App\Models\ws_ead_course;
use App\Models\ws_ead_module;


use Illuminate\Http\Request;

class ModulesController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $module = ws_ead_module::get();
        return response()->json($module);
    }

    public function show($id){
        $module = ws_ead_module::find($id);
        return response()->json($module);
    }

    public function showToModules() {
        $module = ws_ead_module::take(4)->get();
        return response()->json($module);
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
