<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProfileimageModel;
use App\Models\workerdesiginationModel;
use App\Models\workerdetailModel;
use App\Models\WorkerdocumentModel;
use App\Models\worksImagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PostWorkController extends Controller
{
    public function index()
    {
        if (Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        $category = CategoryModel::all();
        return view('postyourworks')
            ->with('category',$category)
            ->with('profileimage',$profileimage);
    }

    public function postwork( Request $request)
    {
        $userid = Auth::user()->id;

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
        $storeworkdetails->user_id = $userid;
        $storeworkdetails->category_id = $request->category_id;
        $storeworkdetails->fname = $request->first_name;
        $storeworkdetails->lname = $request->last_name;
        if ($request->hasFile('workerprofileimage')){
            $extension = $request->file('workerprofileimage')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('workerprofileimage')->storeAs('workerprofileimage',$filename,'public');
            $storeworkdetails->workerprofileimage = $path;
        }
        $storeworkdetails->email = $request->email;
        $storeworkdetails->phone = $request->phone;
        $storeworkdetails->phone2 = $request->phone2;
        $storeworkdetails->password = Hash::make($password1);;
        $storeworkdetails->status = 0;
        $storeworkdetails->register_date = $request->registerdate;
        $storeworkdetails->todateandtime = $request->todateandtime;
        $storeworkdetails->register_enroll_id =  rand(80,60);
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




            if ($request->hasFile('firstimage')) {
                foreach ($request->firstimage as $files) {
                    $storeworkimages = new worksImagesModel();
                    $storeworkimages->worker_details_id = $storeworkdetails->id;
                    $storeworkimages->user_id = $userid;
                    $extension = $files->getClientOriginalExtension();
                    $filename = uniqid() . "." . $extension;
                    $path = $files->storeAs('workimages', $filename, 'public');
                    $storeworkimages->worksimage = $path;
                    $storeworkimages->save();
                }
            }

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
            return redirect('/myadsview');

        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }
        return $storeworkdetails;
    }
}
