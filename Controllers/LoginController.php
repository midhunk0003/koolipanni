<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   public function index()
   {
       return view('auth.login');
   }

   public function login(Request $request)
   {
       $email = $request->email;
       $password = $request->password;

       if(Auth::attempt(['email'=>$email,'password'=>$password]))
       {
           return redirect('/');
       }else{
           return redirect()->back();
       }

   }

   public function register(Request $request)
   {
       ///random password generate
       $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
       $pass = array(); //remember to declare $pass as an array
       $alphaLength = strlen($alphabet) + 1; //put the length -1 in cache
       for ($i = 0; $i < 8; $i++) {
           $n = rand(0, $alphaLength);
           $password =  $pass[] = $alphabet[$n];
           $registernumber =  implode($pass);//turn the array into a string
       }
//       return $registernumber;
       // return $password1;
//       return $request->all();
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->state = $request->state;
       $user->city = $request->city;
       $user->location = $request->location;
       $user->country = $request->country;
       $user->latitude = $request->latitude;
       $user->loungnitude = $request->loungnitude;
       $user->userregisternumber = $registernumber;
       $user->save();

       if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
       {
//           return 123;
           Session::flash('success','register Successfully');
           return redirect('/');

       }else{
           Session::flash('error','Try Again...');
           return redirect()->back();
       }
   }

   public function logout()
   {
       Session::flush();
       Auth::logout();
       return redirect('/');
   }
}
