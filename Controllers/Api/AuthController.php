<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{



    ////API REGISTER
    public function register(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name'=>'required|min:2|max:100',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:100',
            'conformpassword'=>'required|same:password',
        ]);
        if($validator->fails()){
            return response()->json([
               'message'=>'validator fails',
                'errors'=>$validator->errors()
            ],422);

        }
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) + 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $password =  $pass[] = $alphabet[$n];
            $registernumber =  implode($pass);//turn the array into a string
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->userregisternumber = $registernumber;
        $user->save();

        return response()->json([
           'message'=>'Register Successfully',
            'data'=>$user,
        ],200);
    }


    ////API login
    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if(Auth::attempt(['email'=>$request->email,'password'=> $request->password])){
            $success['token'] = $user->createToken('myapp')->plainTextToken;
            return response()->json([
                'success'=>'login successfully',
                'data'=>[
                     $user,
                    'token'=> $success['token'],
                ],
            ],200);

        }else{
            return response()->json([
                'error'=>'Email or Password is not match',
            ],422);
        }

    }

}
