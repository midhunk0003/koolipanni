<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('admin.changepassword');
    }
    public function update_password(Request $request)
    {
            $user =User::where('id','=',Auth::user()->id)->first();
            if (Hash::check($request->currentpassword,$user->password))
            {
                $request->validate([
                    'password' => 'required|confirmed|min:5',
                    'password_confirmation' => 'required|same:password'
                ]);
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
                Session::flash('success','Password Updated Successfully');
                return redirect('change_password');
            }else {
                Session::flash('error', 'Incorrect old password');
                return redirect('change_password');
            }
    }
}
