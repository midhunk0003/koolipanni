<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\CommentsandratingsModel;
use App\Models\LogoModel;
use App\Models\ProfileimageModel;
use App\Models\User;
use App\Models\WishlistModel;
use App\Models\workerdetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WorkerController extends Controller
{
    public function index($id)
    {
//      return $id;
        if (Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        $logo = LogoModel::first();
        $catebannerimg = CategoryModel::where('id',$id)->first();
        $categortpagina = CategoryModel::orderBy('category_name')->get();
        if (Auth::check()) {
            $userid = Auth::user()->id;
            $categortpagina2 = workerdetailModel::join('category','category.id','worker_details.category_id')
                ->select('worker_details.*','worker_details.id as workerdetid','category.category_name','category.id as catid')
                ->where('worker_details.category_id',$id)
                ->where('worker_details.status', 1)
                ->get();
            foreach ($categortpagina2 as $wish) {
                $wish->wishlist = WishlistModel::where('wishlist.user_id', $userid)
                    ->where('wishlist.category_id', $id)
                    ->where('wishlist.worker_details_id', $wish->workerdetid)
                    ->first();
            }
            foreach ($categortpagina2 as $commentandrating)
            {
                $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                    ->select(
                        DB::raw('AVG(commentsandratings.rating) as avgrating')
                    )->first();

            }
            ////////category id pass to header//////////qry
            $categortpagina3 = workerdetailModel::join('category','category.id','worker_details.category_id')
                ->select('worker_details.*','worker_details.id as workerdetid','category.category_name','category.id as catid')
                ->where('worker_details.category_id',$id)
                ->first();
            ////////category id pass to header/////////qry
        }else{
            $categortpagina2 = workerdetailModel::join('category','category.id','worker_details.category_id')
                ->select('worker_details.*','worker_details.id as workerdetid','category.category_name','category.id as catid')
                ->where('worker_details.category_id',$id)
                ->where('worker_details.status', 1)
                ->get();
            foreach ($categortpagina2 as $commentandrating)
            {
                $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                    ->select(
                        DB::raw('AVG(commentsandratings.rating) as avgrating')
                    )->first();

            }
            ////////category id pass to header//////////qry
            $categortpagina3 = workerdetailModel::join('category','category.id','worker_details.category_id')
                ->select('worker_details.*','worker_details.id as workerdetid','category.category_name','category.id as catid')
                ->where('worker_details.category_id',$id)
                ->first();
            ////////category id pass to header//////////qry

        }
        return view('workerpage')
            ->with('categortpagina',$categortpagina)
            ->with('logo',$logo)
            ->with('catebannerimg',$catebannerimg)
            ->with('categortpagina2',$categortpagina2)
            ->with('categortpagina3',$categortpagina3)
            ->with('profileimage',$profileimage);
    }
}
