<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_list(){

    $categories=Category::paginate(10);

    return view ('backend.pages.category.category_list',compact('categories')); 
    }

    public function category_create(){

          
        return view ('backend.pages.category.category_create'); 
        }

     public function category_store(Request $request){

          Category::create([

            'name'=>$request->category_name,
            'description'=>$request->category_dis,
          ]);
          return redirect()->route('category.list');
        
            }
}
