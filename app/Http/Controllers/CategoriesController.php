<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('categories.index');  
    }
    
    public function search(){
        return view('categories.search');   
    }

    public function show($fet){
        return view('categories.show',compact('fet'));
    }
}
