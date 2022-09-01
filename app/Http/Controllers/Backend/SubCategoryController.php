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

       $Subcategories=SubCategory::with('category')->paginate(10);
        return view ('backend.pages.subcategory.subcategory_list',compact('Subcategories'));
    }

    public function subcategory_create(){

        $categories=Category::all();
        return view ('backend.pages.subcategory.subcategory_create', compact('categories'));
    }

    
    public function subcategory_store(Request $request){

      SubCategory::create([
          'category_id'=>$request->category_id,
          // 'name'=>$request->category_name,
          'subname'=>$request->subcategory_name,
          'description'=>$request->description,
        ]);
              //   dd($categories);
       return redirect()->route('subcategory.list');
      
          }
}
