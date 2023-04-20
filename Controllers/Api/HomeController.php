<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\CommentsandratingsModel;
use App\Models\LikeandViewsModel;
use App\Models\LogoModel;
use App\Models\ProfileimageModel;
use App\Models\RecentModel;
use App\Models\WishlistModel;
use App\Models\workerdetailModel;
use App\Models\worksImagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {

        $logo = LogoModel::first();
        if(Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        $categortpagina = CategoryModel::orderBy('category_name')->get();
        if (Auth::check()) {
            $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                ->where('worker_details.status', 1)
                ->where('recent_viewed_worker.user_id', Auth::user()->id)->limit(10)
                ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                ->get();
            foreach ($workerdetailsrecentviews as $wish) {
                if (Auth::check()) {
                    $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                        ->where('user_id', Auth::user()->id)
                        ->first();
                }
            }
            foreach ($workerdetailsrecentviews as $commentandrating) {
                $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                    ->select(
                        DB::raw('AVG(commentsandratings.rating) as avgrating')
                    )->first();

            }
        }else{
            $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                ->where('worker_details.status', 1)
                ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                ->get();
            foreach ($workerdetailsrecentviews as $wish) {
                if (Auth::check()) {
                    $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                        ->where('user_id', Auth::user()->id)
                        ->first();
                }
            }
            foreach ($workerdetailsrecentviews as $commentandrating) {
                $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                    ->select(
                        DB::raw('AVG(commentsandratings.rating) as avgrating')
                    )->first();

            }
        }
//        return  count($workerdetailsrecentviews);


        $workerdetails = workerdetailModel::join('category','category.id','=','worker_details.category_id')
            ->where('worker_details.status', 1)
            ->select('worker_details.*','worker_details.id as workerdetid','category.category_name','category.id as catid')
            ->get();

//        return $workerdetails;
        foreach ($workerdetails as $wish)
        {
            if (Auth::check()) {
                $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                    ->where('user_id', Auth::user()->id)
                    ->first();
            }
        }
        foreach ($workerdetails as $commentandrating)
        {
            $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                ->select(
                    DB::raw('AVG(commentsandratings.rating) as avgrating')
                )->first();

        }
        return response()->json([
            'logo'=>$logo,
            'profileimage'=>$profileimage,
            'categortpagina'=>$categortpagina,
            'workerdetails'=>$workerdetails,
            'workerdetailsrecentviews'=>$workerdetailsrecentviews,
        ],200);
    }

    public function workerdetailpage($id=null)
    {
//        return $id;
        if(Auth::check()){
            $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
        }else{
            $profileimage = ProfileimageModel::all();
        }
        $categortpagina = CategoryModel::orderBy('category_name')->get();
        $workerdetails = workerdetailModel::join('category','category.id','=','worker_details.category_id')
            ->join('workerdesigination','workerdesigination.worker_details_id','=','worker_details.id')
            ->select('worker_details.*','worker_details.id as workerdetailsid','category.category_name','category.id as catid','workerdesigination.desiginationdetails')
            ->where('worker_details.id',$id?:$id)
            ->first();
//       return $workerdetails;

        $averagerating = workerdetailModel::join('commentsandratings','commentsandratings.worker_details_id','=','worker_details.id')
            ->where('commentsandratings.worker_details_id',$id?:$id)
            ->select(
                DB::raw('AVG(commentsandratings.rating) as avgrating')
            )->first();
        $workimg = worksImagesModel::where('works_images.worker_details_id',$id?:$id)->get();
        $commentsandrating = CommentsandratingsModel::where('commentsandratings.worker_details_id',$id?:$id)->get();
        $commentsandrating2 = CommentsandratingsModel::where('commentsandratings.worker_details_id',$id?:$id)->count();

        return response()->json([
            'categortpagina'=>$categortpagina,
            'workerdetails'=>$workerdetails,
            'workimg'=>$workimg,
            'commentsandrating'=>$commentsandrating,
            'commentsandrating2'=>$commentsandrating2,
            'profileimage'=>$profileimage,
            'averagerating'=>$averagerating,
        ],200);
    }

    public function insertviewcount(Request $request)
    {

//          return 123;
        $userid = Auth::user()->id;
        $insertlikes = new LikeandViewsModel();
        $insertlikes->category_id = $request->categoryid;
        $insertlikes->worker_details_id = $request->workerid;
        $insertlikes->user_id = $userid?:$userid;
        $insertlikes->views = 1;
        $insertlikes->save();


        ///////////insert recent view//////////////
        $workerid = $request->workerid;
        $recentview = RecentModel::where('worker_details_id','=',$workerid)
            ->where('user_id',Auth::user()->id?:id)
            ->first();

        if(empty($recentview)) {
            $userid = Auth::user()->id;
            $insertlikes = new RecentModel();
            $insertlikes->category_id = $request->categoryid;
            $insertlikes->worker_details_id = $request->workerid;
            $insertlikes->user_id = $userid;
            $insertlikes->save();
            return redirect()->back();
        }else {
            return response()->json([
                'message'=>'Register Successfully',
                'insertlikes'=>$insertlikes,
            ],200);
        }

    }

    public function searchworkerbylocation(Request $request)
    {
        ///
        if(empty($request->location)){

            ////recent view function
            if (Auth::check()) {
                $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                    ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                    ->where('worker_details.status', 1)
                    ->where('recent_viewed_worker.user_id', Auth::user()->id)->limit(10)
                    ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                    ->get();
                foreach ($workerdetailsrecentviews as $wish) {
                    if (Auth::check()) {
                        $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                            ->where('user_id', Auth::user()->id)
                            ->first();
                    }
                }
                foreach ($workerdetailsrecentviews as $commentandrating) {
                    $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                        ->select(
                            DB::raw('AVG(commentsandratings.rating) as avgrating')
                        )->first();

                }
            }else{
                $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                    ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                    ->where('worker_details.status', 1)
                    ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                    ->get();
                foreach ($workerdetailsrecentviews as $wish) {
                    if (Auth::check()) {
                        $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                            ->where('user_id', Auth::user()->id)
                            ->first();
                    }
                }
                foreach ($workerdetailsrecentviews as $commentandrating) {
                    $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                        ->select(
                            DB::raw('AVG(commentsandratings.rating) as avgrating')
                        )->first();

                }
            }
            ////////end recent view function
            $logo = LogoModel::first();
            if (Auth::check()){
                $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
            }else{
                $profileimage = ProfileimageModel::all();
            }
            $categortpagina = CategoryModel::orderBy('category_name')->get();
            $workerdetails = workerdetailModel::join('category','category.id','=','worker_details.category_id')
                ->select('worker_details.*','worker_details.id as workerdetid','category.category_name','category.id as catid')
                ->where('worker_details.status', 1)
                ->get();
            foreach ($workerdetails as $wish)
            {
                if (Auth::check()) {
                    $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                        ->where('user_id', Auth::user()->id)
                        ->first();
                }
            }
            foreach ($workerdetails as $commentandrating)
            {
                $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                    ->select(
                        DB::raw('AVG(commentsandratings.rating) as avgrating')
                    )->first();

            }
//                 return  $workerdetails;
            return view('home')
                ->with('categortpagina',$categortpagina)
                ->with('logo',$logo)
                ->with('workerdetails',$workerdetails)
                ->with('profileimage',$profileimage)
                ->with('workerdetailsrecentviews',$workerdetailsrecentviews);

        } else {
            if (Auth::check()) {
                $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
            } else {
                $profileimage = ProfileimageModel::all();
            }
            $catid2 = $request->categoryid2;
            if (empty($catid2)) {
                ////recent view function
                if (Auth::check()) {
                    $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                        ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                        ->where('worker_details.status', 1)
                        ->where('recent_viewed_worker.user_id', Auth::user()->id)->limit(10)
                        ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                        ->get();
                    foreach ($workerdetailsrecentviews as $wish) {
                        if (Auth::check()) {
                            $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                                ->where('user_id', Auth::user()->id)
                                ->first();
                        }
                    }
                    foreach ($workerdetailsrecentviews as $commentandrating) {
                        $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                            ->select(
                                DB::raw('AVG(commentsandratings.rating) as avgrating')
                            )->first();

                    }
                }else{
                    $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                        ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                        ->where('worker_details.status', 1)
                        ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                        ->get();
                    foreach ($workerdetailsrecentviews as $wish) {
                        if (Auth::check()) {
                            $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                                ->where('user_id', Auth::user()->id)
                                ->first();
                        }
                    }
                    foreach ($workerdetailsrecentviews as $commentandrating) {
                        $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                            ->select(
                                DB::raw('AVG(commentsandratings.rating) as avgrating')
                            )->first();

                    }
                }
                ////////end recent view function
                //return 123;
                $lat = $request->latitude;
                $log = $request->loungnitude;
                $location = $request->location;
                $logo = LogoModel::first();
                $categortpagina = CategoryModel::orderBy('category_name')->get();
                $search = DB::table('worker_details')
                    ->join('category', 'category.id', '=', 'worker_details.category_id')
                    ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid'
                        , DB::raw("6371 * acos(cos(radians(" . $lat .")) * cos(radians(worker_details.latitude)) * cos(radians(worker_details.loungnitude) - radians(" . $log . ")) + sin(radians(" . $lat . ")) * sin(radians(worker_details.latitude)) ) AS distance ")
                    )->having('distance', '<=', '5')
                    ->where('worker_details.status', 1)
                    ->get();
                foreach ($search as $wish) {
                    if (Auth::check()) {
                        $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                            ->where('user_id', Auth::user()->id)
                            ->first();
                    }
                }
                foreach ($search as $commentandrating)
                {
                    $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                        ->select(
                            DB::raw('AVG(commentsandratings.rating) as avgrating')
                        )->first();

                }
//                return $search;
                Session::put('key2', $location);
                $value = Session::get('key2');
                Session::put('keylat',$lat);
                $sessionlat2 = Session::get('keylat');
                Session::put('keylong', $log);
                $sessionlong2 = Session::get('keylong');

                $searchcount = count($search);
                //return $searchcount;
                return view('home')
                    ->with('categortpagina', $categortpagina)
                    ->with('logo', $logo)
                    ->with('search', $search)
                    ->with('searchcount', $searchcount)
                    ->with('value', $value)
                    ->with('sessionlat2', $sessionlat2)
                    ->with('sessionlong2', $sessionlong2)
                    ->with('profileimage', $profileimage)
                    ->with('workerdetailsrecentviews',$workerdetailsrecentviews);
            } else {
                ////recent view function
                if (Auth::check()) {
                    $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                        ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                        ->where('worker_details.status', 1)
                        ->where('recent_viewed_worker.user_id', Auth::user()->id)->limit(10)
                        ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                        ->get();
                    foreach ($workerdetailsrecentviews as $wish) {
                        if (Auth::check()) {
                            $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                                ->where('user_id', Auth::user()->id)
                                ->first();
                        }
                    }
                    foreach ($workerdetailsrecentviews as $commentandrating) {
                        $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                            ->select(
                                DB::raw('AVG(commentsandratings.rating) as avgrating')
                            )->first();

                    }
                }else{
                    $workerdetailsrecentviews = workerdetailModel::join('category', 'category.id', '=', 'worker_details.category_id')
                        ->join('recent_viewed_worker', 'recent_viewed_worker.worker_details_id', '=', 'worker_details.id')
                        ->where('worker_details.status', 1)
                        ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid')
                        ->get();
                    foreach ($workerdetailsrecentviews as $wish) {
                        if (Auth::check()) {
                            $wish->wishlist = WishlistModel::where('worker_details_id', $wish->workerdetid)
                                ->where('user_id', Auth::user()->id)
                                ->first();
                        }
                    }
                    foreach ($workerdetailsrecentviews as $commentandrating) {
                        $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                            ->select(
                                DB::raw('AVG(commentsandratings.rating) as avgrating')
                            )->first();

                    }
                }
                ////////end recent view function


                //category searchfunction
                if (Auth::check()) {
                    $profileimage = ProfileimageModel::where('userid', Auth::user()->id)->first();
                } else {
                    $profileimage = ProfileimageModel::all();
                }
                $lat = $request->latitude;
                $log = $request->loungnitude;
                $location = $request->location;
                $logo = LogoModel::first();
                $catebannerimg = CategoryModel::where('id', $catid2)->first();
                $categortpagina = CategoryModel::orderBy('category_name')->get();
                if (Auth::check()) {
                    $userid = Auth::user()->id;
                    $search = DB::table('worker_details')
                        ->join('category', 'category.id', '=', 'worker_details.category_id')
                        ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid'
                            , DB::raw("6371 * acos(cos(radians(" . $lat . ")) * cos(radians(worker_details.latitude)) * cos(radians(worker_details.loungnitude) - radians(" . $log . ")) + sin(radians(" . $lat . ")) * sin(radians(worker_details.latitude)) ) AS distance ")
                        )->where('worker_details.category_id', $catid2)
                        ->having('distance', '<=', '5')
                        ->where('worker_details.status', 1)
                        ->get();
                    foreach ($search as $wish) {
                        if (Auth::check()) {
                            $wish->wishlist = WishlistModel::where('wishlist.user_id', $userid)
                                ->where('wishlist.category_id', $catid2)
                                ->where('wishlist.worker_details_id', $wish->workerdetid)
                                ->first();
                        }
                    }
                    foreach ($search as $commentandrating)
                    {
                        $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                            ->select(
                                DB::raw('AVG(commentsandratings.rating) as avgrating')
                            )->first();

                    }

//                    return $search;
                    Session::put('key2', $location);
                    $value = Session::get('key2');
                    Session::put('keylat',$lat);
                    $sessionlat2 = Session::get('keylat');
                    Session::put('keylong', $log);
                    $sessionlong2 = Session::get('keylong');
                    $searchcount = count($search);
                } else {
                    $search = DB::table('worker_details')
                        ->join('category', 'category.id', '=', 'worker_details.category_id')
                        ->select('worker_details.*', 'worker_details.id as workerdetid', 'category.category_name', 'category.id as catid'
                            , DB::raw("6371 * acos(cos(radians(" . $lat . ")) * cos(radians(worker_details.latitude)) * cos(radians(worker_details.loungnitude) - radians(" . $log . ")) + sin(radians(" . $lat . ")) * sin(radians(worker_details.latitude)) ) AS distance ")
                        )->where('worker_details.category_id', $catid2)
                        ->having('distance', '<=', '5')
                        ->where('worker_details.status', 1)
                        ->get();
                    foreach ($search as $commentandrating)
                    {
                        $commentandrating->commentsandratings = CommentsandratingsModel::where('worker_details_id', $commentandrating->workerdetid)
                            ->select(
                                DB::raw('AVG(commentsandratings.rating) as avgrating')
                            )->first();

                    }
                    Session::put('key2', $location);
                    $value = Session::get('key2');
                    Session::put('keylat',$lat);
                    $sessionlat2 = Session::get('keylat');
                    Session::put('keylong', $log);
                    $sessionlong2 = Session::get('keylong');

                    $searchcount = count($search);
                }

//        return $searchcount;
                return view('workerpage')
                    ->with('categortpagina', $categortpagina)
                    ->with('logo', $logo)
                    ->with('catebannerimg', $catebannerimg)
                    ->with('search', $search)
                    ->with('searchcount', $searchcount)
                    ->with('value', $value)
                    ->with('sessionlat2', $sessionlat2)
                    ->with('sessionlong2', $sessionlong2)
                    ->with('profileimage', $profileimage)
                    ->with('workerdetailsrecentviews',$workerdetailsrecentviews);
            }
        }
    }
}
