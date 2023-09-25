<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderby('id','desc')->paginate();
        return view('categories.index',compact("categories"));  
    }
    
    public function search(){
        return view('categories.search');  
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        return redirect()->route('categories.show',$category);
    }

    public function show(Category $category){
        return view('categories.show',compact('category'));
    }

    public function edit(Category $category){
        return view('Categories.edit', compact('category'));
    }

    public function update(Request $request,Category $category){
    return  $category;
    }
}
