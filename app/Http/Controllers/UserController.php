<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function register(Request $request){
        $fields = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);

        // if(!fields){
        //     return response()->json(['error'=>$fields->errors()->toJson()],400);
        // }

        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password'])
        ]);

        $token = $user->createToken('login_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response,201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        // Check Email
        $user = User::where('email',$credentials['email'])->first();

        //Check Password
        if(!$user || !Hash::check($credentials['password'],$user->password)){
            return response([
                'status' => 'error',
                'message'=> 'Bad credentials'
            ],401);
        }
        //If both cases pass then create token
        $token = $user->createToken('login_token')->plainTextToken;

        return response()->json([
                'status' => 'success',
                'user' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ],200);

    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'message'=>'User Logged out'
        ];
    }

    public function getUserDetail(){
        return auth()->user();
    }

    public function getUsers(){
        return User::all();
    }

    public function deleteUser($id){

        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status' => 'success',
            'message'=> 'user deleted',
            'user' => $user,
        ],201);

    }
}
