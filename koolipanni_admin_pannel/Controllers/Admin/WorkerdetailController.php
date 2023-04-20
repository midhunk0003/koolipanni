<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\workerdesiginationModel;
use App\Models\workerdetailModel;
use App\Models\WorkerdocumentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class WorkerdetailController extends Controller
{
    public function index()
    {
        $workerdetails = workerdetailModel::join('category','category.id','=','worker_details.category_id')
            ->join('userprofileimage','userprofileimage.userid','worker_details.user_id')
            ->select('category.category_name','worker_details.*')
            ->get();
      return view('admin.workerdetail')
          ->with('workerdetails',$workerdetails);
    }


               //viewworkerdetails
    public function viewworkerdetails($id)
    {
        //return $id;
        $category = CategoryModel::all();
        $showworkerdetails = workerdetailModel::join('category','category.id','=','worker_details.category_id')
            ->join('workerdocument','workerdocument.worker_details_id','worker_details.id')
            ->join('workerdesigination','workerdesigination.worker_details_id','worker_details.id')
            ->where('worker_details.id',$id)
            ->select('category.category_name','worker_details.id as workdetailid','worker_details.*','workerdocument.*','workerdesigination.*')
            ->first();
        return view('admin.view_worker_more_details')
            ->with('category',$category)
            ->with('showworkerdetails',$showworkerdetails);
    }


    public function addworkingdetailsanddocumentsview()
    {
        $category = CategoryModel::all();
        return view('admin.addworkingdetailsanddocumentsview')
            ->with('category',$category);
    }

    public function storeworkerdetail(Request $request)
    {

       // return $request->toArray('');

         ///random password generate
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $password =  $pass[] = $alphabet[$n];
                $password1 =  implode($pass);//turn the array into a string
            }
           // return $password1;
        ///random password generate end
        ///
       //return $request;
       $storeworkdetails = new workerdetailModel();
       $storeworkdetails->category_id = $request->category_id;
       $storeworkdetails->fname = $request->first_name;
       $storeworkdetails->lname = $request->last_name;
       $storeworkdetails->email = $request->email;
       $storeworkdetails->phone = $request->phone;
       $storeworkdetails->phone2 = $request->phone2;
       $storeworkdetails->password = Hash::make($password1);;
       $storeworkdetails->status = 0;
       $storeworkdetails->register_date = $request->registerdate;
       $storeworkdetails->register_enroll_id =  rand(8,50);
       $storeworkdetails->full_address = $request->fulladdress;
       $storeworkdetails->reference_name = $request->referencename;
       $storeworkdetails->reference_phone = $request->referencephone;
       $storeworkdetails->reference_address = $request->referenceaddress;
       $storeworkdetails->pincode = $request->pincode;
       $storeworkdetails->state = $request->state;
       $storeworkdetails->country = $request->country;
       $storeworkdetails->latitude = $request->latitude;
       $storeworkdetails->loungnitude = $request->loungnitude;
       $storeworkdetails->city = $request->city;
       $storeworkdetails->location = $request->location;
       $storeworkdetails->save();


       $storedocument = new WorkerdocumentModel();
       $storedocument->category_id = $request->category_id;
       $storedocument->worker_details_id = $storeworkdetails->id;
       if ($request->hasFile('aadharfront')){
           $extension = $request->file('aadharfront')->getClientOriginalExtension();
           $filename =uniqid() . "." . $extension;
           $path = $request->file('aadharfront')->storeAs('aadharfront',$filename,'public');
           $storedocument->aadhar_frount = $path;
       }
        if ($request->hasFile('aadharback')){
            $extension = $request->file('aadharback')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('aadharback')->storeAs('aadharback',$filename,'public');
            $storedocument->aadhar_back = $path;
        }
        if ($request->hasFile('desiginationdoc')){
            $extension = $request->file('desiginationdoc')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('desiginationdoc')->storeAs('desiginationdoc',$filename,'public');
            $storedocument->desigination_doc = $path;
        }
         $storedocument->save();

        $desigdetails = new workerdesiginationModel();
        $desigdetails->category_id = $request->category_id;
        $desigdetails->worker_details_id = $storeworkdetails->id;
        $desigdetails->workerdocument_id = $storedocument->id;
        $desigdetails->worker_charge = $request->workcharge;
        $desigdetails->price = $request->price;
        $desigdetails->desiginationdetails = $request->desiginationdetails;
        $desigdetails->status = 0;
        $desigdetails->save();
        if ($desigdetails)
        {
            Session::flash('success','update insert Successfully');
            return redirect('/workerdetail');

        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }
       return $storeworkdetails;
    }






    public function update(Request $request)
    {


        // return $request->toArray('');

        ///random password generate
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $password =  $pass[] = $alphabet[$n];
            $password1 =  implode($pass);//turn the array into a string
        }
        // return $password1;
        ///random password generate end
        ///
        //return $request;
        $storeworkdetails = new workerdetailModel();
        $storeworkdetails->category_id = $request->category_id;
        $storeworkdetails->fname = $request->first_name;
        $storeworkdetails->lname = $request->last_name;
        $storeworkdetails->email = $request->email;
        $storeworkdetails->phone = $request->phone;
        $storeworkdetails->phone2 = $request->phone2;
        $storeworkdetails->password = Hash::make($password1);;
        $storeworkdetails->status = 0;
        $storeworkdetails->register_date = $request->registerdate;
        $storeworkdetails->register_enroll_id =  rand(8,50);
        $storeworkdetails->full_address = $request->fulladdress;
        $storeworkdetails->reference_name = $request->referencename;
        $storeworkdetails->reference_phone = $request->referencephone;
        $storeworkdetails->reference_address = $request->referenceaddress;
        $storeworkdetails->pincode = $request->pincode;
        $storeworkdetails->state = $request->state;
        $storeworkdetails->country = $request->country;
        $storeworkdetails->latitude = $request->latitude;
        $storeworkdetails->loungnitude = $request->loungnitude;
        $storeworkdetails->city = $request->city;
        $storeworkdetails->location = $request->location;
        $storeworkdetails->save();


        $storedocument = new WorkerdocumentModel();
        $storedocument->category_id = $request->category_id;
        $storedocument->worker_details_id = $storeworkdetails->id;
        if ($request->hasFile('aadharfront')){
            $extension = $request->file('aadharfront')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('aadharfront')->storeAs('aadharfront',$filename,'public');
            $storedocument->aadhar_frount = $path;
        }
        if ($request->hasFile('aadharback')){
            $extension = $request->file('aadharback')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('aadharback')->storeAs('aadharback',$filename,'public');
            $storedocument->aadhar_back = $path;
        }
        if ($request->hasFile('desiginationdoc')){
            $extension = $request->file('desiginationdoc')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('desiginationdoc')->storeAs('desiginationdoc',$filename,'public');
            $storedocument->desigination_doc = $path;
        }
        $storedocument->save();

        $desigdetails = new workerdesiginationModel();
        $desigdetails->category_id = $request->category_id;
        $desigdetails->worker_details_id = $storeworkdetails->id;
        $desigdetails->workerdocument_id = $storedocument->id;
        $desigdetails->worker_charge = $request->workcharge;
        $desigdetails->price = $request->price;
        $desigdetails->desiginationdetails = $request->desiginationdetails;
        $desigdetails->status = 0;
        $desigdetails->save();
        if ($desigdetails)
        {
            Session::flash('success','update insert Successfully');
            return redirect('/workerdetail');

        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }
        return $storeworkdetails;
    }


    public function vaificationstatuspost(Request $request , $id)
    {


         $verifiadestatus = workerdetailModel::find($id);
         $verifiadestatus->status = 1;
         $verifiadestatus->save();
         return $verifiadestatus;

    }
    public function unvaificationstatuspost(Request $request , $id)
    {


        $verifiadestatus = workerdetailModel::find($id);
        $verifiadestatus->status = 0;
        $verifiadestatus->save();
        return $verifiadestatus;

    }
}
