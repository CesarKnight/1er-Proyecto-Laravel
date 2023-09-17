<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::paginate();
        return view('categories.index',compact("categories"));  
    }
    
    public function search(){
        return view('categories.search');  
    }

    public function show($id){
        $category = Category::find($id);
        return view('categories.show',compact('category'));
    }
}
