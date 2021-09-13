<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
    {


        $request->validate([
            'name'     => 'required|string',
            'user_email'    => 'required|string|email|unique:ws_users',
            'password' => 'required|string|confirmed',
        ]);

        // dd($request->all());

        $user = new User([
            'user_name'     => $request->name,
            'user_email'    => $request->user_email,
            'user_password' => bcrypt($request->password),
        ]);
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'], 201);
    }
    public function login(Request $request)
    {
        $request->validate([
            'user_email'       => 'required|string|email',
            'password'    => 'required|string',
            'remember_me' => 'boolean',
        ]);

        $credentials = [
            'user_password' => $request->password,
            'user_email' => $request->user_email,
        ];

        $verficador = $this->verificador($credentials);

        if (!$verficador['status']) {
            return response()->json([
                'message' => 'Unauthorized'], 401);
        }

        $user = $verficador['dadosUser'];
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse(
                $tokenResult->token->expires_at)
                    ->toDateTimeString(),
        ]);
    }

    function verificador($credentials){

        $dadosUser = User::where('user_email', $credentials['user_email'])->first();
        if($dadosUser){
            if(Hash::check($credentials['user_password'],$dadosUser->user_password)) {
                return [
                    'dadosUser' => $dadosUser,
                    'status' => true
                ];
            } else {
                return ['status' => false];
            }
        }else{
            return ['status' => false];
        }

    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' =>
            'Successfully logged out']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
