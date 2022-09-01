<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;

class ProductController extends Controller
{
    public function product_list(){

        $product=Product::with('category','subcategory')->paginate(10);
        return view ('backend.pages.product.product_list');
    }
    public function product_create(){

        $categories=Category::all();
        $subcategories=SubCategory::all();
         
        return view ('backend.pages.product.product_create', compact('categories','subcategories'));
    }

    public function product_store(Request $request){

        Product::create([
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id, 
            'subname'=>$request->subcategory_name,
            'description'=>$request->description,
          ]);
                //   dd($categories);
         return redirect()->route('product.list');
        
            }
}
