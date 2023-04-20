<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\StateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $category = CategoryModel::orderBy('category_name')->get();
        return view('admin.category')
            ->with('category',$category);
    }
    public function addstate()
    {

        $state = array(
            "Andhra Pradesh",
            "Arunachal Pradesh",
            "Assam",
            "Bihar",
            "Chhattisgarh",
            "Goa",
            "Gujarat",
            "Haryana",
            "Himachal Pradesh",
            "Jammu and Kashmir",
            "Jharkhand",
            "Karnataka",
            "Kerala",
            "Madhya Pradesh",
            "Maharashtra",
            "Manipur",
            "Meghalaya",
            "Mizoram",
            "Nagaland",
            "Odisha",
            "Punjab",
            "Rajasthan",
            "Sikkim",
            "Tamil Nadu",
            "Telangana",
            "Tripura",
            "Uttarakhand",
            "Uttar Pradesh",
            "West Bengal",
            "Andaman and Nicobar Islands",
            "Chandigarh",
            "Dadra and Nagar Haveli",
            "Daman and Diu",
            "Delhi",
            "Lakshadweep",
            "Puducherry"
        );
        //return dd($len);
        if(count($state) > 0) {
            for ($i = 0; $i < count($state); $i++) {

                $datasave[] =   $state[$i];

            }
        }
       return dd($datasave);
       $addstate = DB::table('state')->insert($datasave);
        if($addstate){
            Session::flash('success','insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }

    }

    public function insertcategory(Request $request)
    {
        //return $request;

        $storecat = new CategoryModel();
        $storecat->category_name = $request->category;
        if($request->hasFile('image')) {
             $extension = $request->file('image')->getClientOriginalExtension();
             $filename =uniqid() . "." . $extension;
             $path = $request->file('image')->storeAs('category_image',$filename,'public');
             $storecat->category_image = $path;
        }
        if($request->hasFile('bannerimage')) {
            $extension = $request->file('bannerimage')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('bannerimage')->storeAs('bannerimg',$filename,'public');
            $storecat->bannerimg = $path;
        }
        $storecat->save();
        if($storecat){
            Session::flash('success','insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }

    }

    public function updatecategory(Request $request)
    {

        $id = $request->category_id;


        $upcategory = CategoryModel::find($id);
        $upcategory->category_name = $request->category_name;
        if($request->hasFile('editimage')) {
            $extension = $request->file('editimage')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('editimage')->storeAs('category_image',$filename,'public');
            $upcategory->category_image = $path;
        }
        if($request->hasFile('editbannerimg')) {
            $extension = $request->file('editbannerimg')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('editbannerimg')->storeAs('bannerimg',$filename,'public');
            $upcategory->bannerimg = $path;
        }
         $upcategory->update();
        if($upcategory){
            Session::flash('success','update insert Successfully');

            return redirect()->back();
        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }

    }
    public function deletecategory($id)
    {
        $catdele = CategoryModel::find($id);
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
