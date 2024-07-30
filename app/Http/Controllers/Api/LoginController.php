<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    //Validar email e senha
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //recupera dados do usuário
            $user = Auth::user();

            $token = $request->user()->createToken('api-token')->plainTextToken;

            return response()->json([
                'status' => true,
                'message' => "Usuário logado com sucesso!",
                'token' => $token,
                'user' => $user
            ], 202);

        } else {
            return response()->json([
                'status' => false,
                'message' => "Login ou senha incorreta."
            ], 404);
        }
    }
}
