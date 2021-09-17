<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsUser;
use App\Models\WsUsersAddress;

class PerfilController extends Controller
{
    public function index(){

    }

    public function getUser(Request $request){
        $teste = WsUser::first();
        $idUSer = $teste->user_id;
        $endereco = WsUsersAddress::where('user_id', $idUSer)->first();
        $teste->address = $endereco;
        return response()->json($teste);

    }
}
