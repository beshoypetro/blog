<?php

namespace App\Http\Controllers;
use Illuminate\Validation;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;


class UserController extends Controller
{


    public function signup(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=> 'required'


        ]);

        $user =new User([
            'name'=> $request->inpute('name'),
            'email'=> $request->input('email'),
            'password'=> bcrypt($request->input('password'))
        ]);
        $user->save();
        return response()->json([
            'message'=>'Successfully created user!'

        ],201);



    }


    public function signin (Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid Token'], 401);
            }
        } catch (JWTException $e) {

            return response()->json(['error' => 'Could Not Create Token'], 501);
        }

        return response()->json(['token' => $token], 200);


    }
}
