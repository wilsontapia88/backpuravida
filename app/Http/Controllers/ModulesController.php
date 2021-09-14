<?php

namespace App\Http\Controllers;

use App\Models\WsEadModule;


use Illuminate\Http\Request;

class ModulesController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $module = WsEadModule::get();
        return response()->json($module);
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
