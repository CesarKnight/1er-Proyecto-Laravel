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
        // creamos una variable donde se guardara los datos del formulario
        // y guardamos la variable del orm en la base de datos
       
        $request->validate([        
            'name' => 'required',
            'description' => 'required'
        ]);
        // para mas reglas de validacion mirar 
        // https://laravel.com/docs/10.x/validation#main-content
        
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
        
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        return redirect()->route('categories.show',$category);
    }
}
