<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WsCoupon;

class BeneficiosController extends Controller
{
    public function index(){

        $cupon = WsCoupon::get();

        return response()->json($cupon);
    }
}
