<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_list(){

    //    return view ('backend.pages.category.category_list'); 
    return view ('backend.pages.category.category_list'); 
    }

    public function category_create(){

          
        return view ('backend.pages.category.category_create'); 
        }
}
