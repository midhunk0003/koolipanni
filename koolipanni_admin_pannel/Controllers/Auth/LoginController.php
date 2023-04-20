<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   public function loginview()
   {
       return view('auth.login');
   }

   public function login(Request $request)
   {
//       return $request;
       if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
         {
              return redirect('/dashboard');
         }else{
            return redirect()->back()->with('alert','please enter valid details');
       }
   }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
