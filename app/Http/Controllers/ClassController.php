<?php

namespace App\Http\Controllers;
use App\Models\WsEadClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        $aulas = WsEadClass::get();
        return response()->json($aulas);
    }

    public function show($id){
        $aula = WsEadClass::where('class_id', $id)->first();
        return response()->json($aula);
    }

    public function imagens(){

        $course = WsEadClass::get();

        $aula = $course[0];



        return view('teste', compact('aula'));

        //este es un teste
    }

}
