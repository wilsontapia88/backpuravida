<?php

namespace App\Http\Controllers;
use App\Models\WsEadClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        $course = WsEadClass::get();
        return response()->json($course);
    }

    public function show($id){
        $course = WsEadClass::where('class_id', $id)->first();
        return response()->json($course);
    }

    public function imagens(){

        $course = WsEadClass::get();

        $aula = $course[0];



        return view('teste', compact('aula'));

        //este es un teste
    }

}
