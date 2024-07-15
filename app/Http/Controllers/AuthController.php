<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        try{
            $user = User::where("username",$request->username)->first();
            if(!$user){
                return response()->json([
                    "status"=>false,
                    "message"=>"Username or Password is Incorrect, Please Try Again"
                ],404);
            }

            if(Hash::check($request->password, $user->password)){
                $token = $user->createToken("auth_sanctum")->plainTextToken;
                return response()->json([
                    "status"=>true,
                    "message"=>"Login Succesfully",
                    "token"=>$token
                ]);
            }
        }
        catch(\Throwable $th){
            return response()->json([
                "status"=>false,
                "message"=>$th->getMessage()
            ],500);
        }
    }

    public function logout(Request $request){
        try{
            auth()->user()->tokens()->delete();
            return response()->json([
                "status"=>true,
                "message"=>"Logout Berhasil"
            ],201);
        }
        catch(\Throwable $th){
            return response()->json([
                "status"=>false,
                "message"=>$th->getMessage()
            ],500);
        }
    }
}
