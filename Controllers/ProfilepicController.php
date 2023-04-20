<?php

namespace App\Http\Controllers;

use App\Models\ProfileimageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfilepicController extends Controller
{
    public function profilepicupload(Request $request)
    {
        //return $request->profilepic;
        $userid = Auth::user()->id;
        $profileimg = new ProfileimageModel();
        $profileimg->userid = $userid;
        if($request->hasFile('profilepic')) {
            $extension = $request->file('profilepic')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('profilepic')->storeAs('profileimage',$filename,'public');
            $profileimg->profileimage = $path;
        }
        $profileimg->save();
        if($profileimg){
            Session::flash('success','insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }
    }

    public function updateprofilepic(Request $request,$id)
    {

        $updateprofilepic  = ProfileimageModel::find($id);
        if($request->hasFile('profilepic')) {
            $extension = $request->file('profilepic')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('profilepic')->storeAs('profileimage',$filename,'public');
            $updateprofilepic->profileimage = $path;
        }
        $updateprofilepic->update();
        if($updateprofilepic){
            Session::flash('success','insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }
    }

    public function removeprofilepic($id)
    {

        $deleteprofileimg = ProfileimageModel::find($id);
        $deleteprofileimg->delete();
        if($deleteprofileimg){
            Session::flash('success','insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }

    }
}
