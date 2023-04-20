<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\LikeandViewsModel;
use App\Models\LikesModel;
use App\Models\ProfileimageModel;
use App\Models\WishlistModel;
use App\Models\workerdetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class WishlistController extends Controller
{

    public function wishlistview()
    {
        if (Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        if(Auth::check()) {
            $userid = Auth::user()->id;
            $wishlist = WishlistModel::join('worker_details','worker_details.id','=','wishlist.worker_details_id')
                ->join('category','category.id','=','wishlist.category_id')
                ->select('wishlist.*','worker_details.workerprofileimage','worker_details.fname','worker_details.id as workerdetid','worker_details.location','category.category_name')
                ->where('wishlist.user_id',$userid)
                ->get();
        }else{

            return redirect('/loginview');

        }
        $categortpagina = CategoryModel::orderBy('category_name')->get();
        return view('wishlist')
            ->with('categortpagina',$categortpagina)
            ->with('wishlist',$wishlist)
            ->with('profileimage',$profileimage);
    }



    public function insertwishlist(Request $request)
    {

      //    return $request->categoryid;
//        return $request->workdetailid;
       // return 123;
        $userid = Auth::user()->id;
        $insertwishlist = new WishlistModel();
        $insertwishlist->category_id = $request->categoryid;
        $insertwishlist->worker_details_id = $request->workerid;
        $insertwishlist->user_id = $userid;
        $insertwishlist->save();

        $insertlikes = new LikesModel();
        $insertlikes->category_id = $request->categoryid;
        $insertlikes->worker_details_id = $request->workerid;
        $insertlikes->user_id = $userid;
        $insertlikes->likes = 1;
        $insertlikes->save();

        return redirect()->back();

    }

    public function removewishlist($id)
    {
         $deletewishlist = WishlistModel::find($id);
         $deletewishlist->delete();
         return redirect()->back();
    }
}
