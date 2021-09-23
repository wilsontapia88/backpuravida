<?php

namespace App\Http\Controllers;
use App\Models\WsQuestions;
use App\Models\WsOptions;


use Illuminate\Http\Request;

class AnamneseController extends Controller
{
    public function index(){
        $perguntas = WsQuestions::get();
        foreach ($perguntas as $pergunta){
            $options = WsOptions::where('question_id', $pergunta->id)->get();
            $pergunta['options'] = $options;
        }
        return response()->json($perguntas);
    }
}
