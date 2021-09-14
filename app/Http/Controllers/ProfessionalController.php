<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsEadProfessional;

class ProfessionalController extends Controller
{
    public function index(){
        $course = WsEadProfessional::get();
        return response()->json($course);
    }

    public function show($id){
        $course = WsEadProfessional::where('pro_id', $id)->first();
        return response()->json($course);
    }
}
