<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\SubCatWorkIncludeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\Count;

class SubcategoryController extends Controller
{
    public function index()
    {
        $category = CategoryModel::all();
        $subcategory = SubcategoryModel::join('category','category.id','=','subcategorymodel.category_id')
            ->select('subcategorymodel.*','category.id as catid','category.category_name','category.category_image')
            ->get();

        foreach ($subcategory as $item)
        {
            $item->workinclude = SubCatWorkIncludeModel::where('subcateg_id',$item->id)
                ->get();
        }
//        return $subcategory;
        return view('admin.subcategory')
            ->with('category',$category)
            ->with('subcategory',$subcategory);
    }

    public function insertcategory(Request $request)
    {


               $inssubcategory = new SubcategoryModel();
               $inssubcategory->category_id = $request->category_id;
               $inssubcategory->subcategory = $request->subcategory;
               if ($request->hasFile('image'))
               {
                   $extension = $request->file('image')->getClientOriginalExtension();
                   $filename =uniqid() . "." . $extension;
                   $path = $request->file('image')->storeAs('subcategory_image',$filename,'public');
                   $inssubcategory->image = $path;
               }
             $inssubcategory->status = 0;
             $inssubcategory->subcat_description = $request->subcat_description;
             $inssubcategory->work_details = $request->workdetails;
             $inssubcategory->general_starting_price = $request->generalpricing;
             $inssubcategory->starting_price = $request->startingprice;
             $inssubcategory->duration = $request->duration;
             $inssubcategory->turnaround_time = $request->turnaround;
             $inssubcategory->save();
             $count = \count($request->workinclude);
             if ($count > 0) {
                 for ($i = 0; $i <  $count; $i++) {
                     $subcatworkinclud = new SubCatWorkIncludeModel();
                     $subcatworkinclud->category_id = $request->category_id;
                     $subcatworkinclud->subcateg_id = $inssubcategory->id;
                     $subcatworkinclud->workerincludeddetails = $request->workinclude[$i];
                     $subcatworkinclud->save();
                 }
             }
             if ($inssubcategory)
             {
                 Session::flash('success','sub category inserted');
                 return redirect()->back();
             }else{
                 Session::flash('error','something went wrong');
                 return redirect()->back();
             }
    }
}
