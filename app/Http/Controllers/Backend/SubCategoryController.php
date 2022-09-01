<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\CategoryController;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;


class SubCategoryController extends Controller
{
    public function subcategory_list(){


        return view ('backend.pages.subcategory.subcategory_list');
    }

    public function subcategory_create(){

        $categories=Category::all();
        //   dd($categories);
        return view ('backend.pages.subcategory.subcategory_create', compact('categories'));
    }
    public function subcategory_store(Request $request){

        $categories=SubCategory::create([

          'name'=>$request->category_name,
          'subname'=>$request->subcategory_name,
          'description'=>$request->category_dis,
        ]);
        return view ('subcategory.list',compact('categories'));
      
          }
}
