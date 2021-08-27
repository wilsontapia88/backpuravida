<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;

class AulasController extends Controller {
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $aula = Aula::all();
        return response()->json($aula);
    }

    public function show(){

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
