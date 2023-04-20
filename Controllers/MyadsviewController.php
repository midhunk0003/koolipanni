<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\LikeandViewsModel;
use App\Models\LikesModel;
use App\Models\ProfileimageModel;
use App\Models\workerdesiginationModel;
use App\Models\workerdetailModel;
use App\Models\WorkerdocumentModel;
use App\Models\worksImagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MyadsviewController extends Controller
{
    public function index()
    {
        if (Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        $userid = Auth::user()->id;
        $value =  Session::get('key1');
        $workdetailcount = workerdetailModel::where('user_id',$userid)->get();
        $viewads =  workerdetailModel::join('category','category.id','=','worker_details.category_id')
            ->select('worker_details.*','category.category_name','category.id as categoryid')
            ->where('user_id',$userid)->get();
        foreach ($viewads as $likecount)
        {
            $likecount->like = LikesModel::where('worker_details_id',$likecount->id)
                ->count();
        }
        foreach ($viewads as $viewcount)
        {
            $viewcount->viewsandlikes = LikeandViewsModel::where('worker_details_id',$viewcount->id)
                ->count();
        }
//        return $viewads;
        return view('myadsview')
            ->with('viewads',$viewads)
            ->with('workdetailcount',$workdetailcount)
            ->with('value',$value)
            ->with('profileimage',$profileimage);
    }

    public function vieweditshowworkerdetail($id)
    {
//        return $id;
        if (Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        $value =  Session::get('key1');
        $categortpagina = CategoryModel::orderBy('category_name')->get();
        $workerdetail = workerdetailModel::join('category','category.id','=','worker_details.category_id')
            ->join('workerdesigination','workerdesigination.worker_details_id','=','worker_details.id')
            ->select('worker_details.*','category.category_name',
                'workerdesigination.worker_charge','workerdesigination.price',
                'workerdesigination.desiginationdetails')
            ->where('worker_details.id',$id)->first();
        $workerimages = worksImagesModel::where('worker_details_id',$id)->get(); //get all images in workrimagestable
//        return $workerimages;
        return view('editmyads')
            ->with('categortpagina',$categortpagina)
            ->with('workerdetail',$workerdetail)
            ->with('workerimages',$workerimages)
            ->with('value',$value)
            ->with('profileimage',$profileimage);
    }

    public function updateworkerdetail(Request $request,$id)
    {

//        return $id;

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
        $storeworkdetails = workerdetailModel::find($id);
        $storeworkdetails->category_id = $request->category_id;
        $storeworkdetails->fname = $request->first_name;
        $storeworkdetails->lname = $request->last_name;
        $storeworkdetails->email = $request->email;
        $storeworkdetails->phone = $request->phone;
        $storeworkdetails->phone2 = $request->phone2;
//        $storeworkdetails->password = Hash::make($password1);;
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


        $storedocument = WorkerdocumentModel::where('worker_details_id','=',$id)->first();
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

        $desigdetails = workerdesiginationModel::where('worker_details_id','=',$id)->first();
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
            return redirect()->back();

        }else{
            Session::flash('error','Try Again...');
            return redirect()->back();
        }
//        return $storeworkdetails;
    }






    //insertworkerimg edit section
    public function insertworkerimage(Request $request)
    {
//        return $id;
        $userid = Auth::user()->id;
        $insertimg = new worksImagesModel();
        $insertimg->worker_details_id = $request->workdetail_ID;
        $insertimg->user_id = $userid;
        if ($request->hasFile('works_image')){
            $extension = $request->file('works_image')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('works_image')->storeAs('workimages',$filename,'public');
            $insertimg->worksimage = $path;
        }
        $insertimg->save();
        return redirect()->back();


    }

    //delete edit section  deleteworkerimg
    public function deleteworkerimg($id)
    {
        $delete = worksImagesModel::find($id);
        $delete->delete();
        return redirect()->back();

    }

    //remove my add
    public function removemyad($id)
    {
        //return $id;
        $remove = workerdetailModel::where('id','=',$id)->first();
        $remove->delete();
        return redirect()->back();

    }

    public function updateworkerprofileimg(Request $request , $id)
    {
//        return $request->workerprofileimg;
        $updateimg = workerdetailModel::find($id);
        if ($request->hasFile('workerprofileimg')){
            $extension = $request->file('workerprofileimg')->getClientOriginalExtension();
            $filename =uniqid() . "." . $extension;
            $path = $request->file('workerprofileimg')->storeAs('updateworkerprofileimg',$filename,'public');
            $updateimg->workerprofileimage = $path;
        }
        $updateimg->update();
        return redirect()->back();
    }
}
