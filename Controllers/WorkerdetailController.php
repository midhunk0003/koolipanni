<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\CommentsandratingsModel;
use App\Models\LogoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerdetailController extends Controller
{
   public function index()
   {
       $logo = LogoModel::first();
       $categortpagina = CategoryModel::orderBy('category_name')->get();
           return view('workerdetailpage')
           ->with('categortpagina',$categortpagina)
           ->with('logo',$logo);
   }
   public function commentsrating(Request $request)
   {

        $starrated = $request->input('rating');
        $userid = Auth::user()->id;
         $username = Auth::user()->name;


        $commentsandrat = new CommentsandratingsModel();
        $commentsandrat->user_id = $userid;
        $commentsandrat->user_name = $username;
        $commentsandrat->worker_details_id = $request->workerid;
        $commentsandrat->comments = $request->comment;
        $commentsandrat->rating = $starrated;
        $commentsandrat->save();
        return redirect()->back();





   }
}
