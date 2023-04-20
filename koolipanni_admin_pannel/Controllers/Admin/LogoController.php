<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoController extends Controller
{
    public function index()
    {
        $logo = LogoModel::all();
       return view('admin.logo')->with('logo',$logo);
    }

    public function store_logo(Request $request)
    {
        $storelogo = new LogoModel();
        if($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('image')->storeAs('category_image',$filename,'public');
            $storelogo->logo = $path;
        }
        $storelogo->save();
        if($storelogo){
            Session::flash('success','insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }

    }

    public function deletelogo($id)
    {
        $catdele = LogoModel::find($id);
        $catdele->delete();
        if($catdele){
            Session::flash('success','delete  Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }

    }
}
