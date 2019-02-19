<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
     
        return view('admin.categories.index')->with('categories', $categories);

    }

    public function create(){

     return view('admin.categories.create');

    }

    public function edit($id){
        
        $category = Category::find($id);

        return view('admin.categories.edit')->with('category', $category);

    }

    public function show(){

    }

    public function store(CategoryRequest $request){
        $category = new Category($request -> all());
        $category->save();
        flash('La categosría '.$category->name.' ha sido creado con éxito!')->success();

        return redirect()->route('categories.index');
        
    }

    public function destroy($id){

        $category = Category::find($id);
        flash('Categoría '.$category->name.' ha sido eliminado')->error();
        $category->delete();

        return redirect()->route('categories.index');

    }
    
    public function update(Request $request, $id ){
        $category = Category::find($id);
        $category -> fill($request->all());
        $category->save();
        
        flash('La categoría '.$category->name .' ha sido editada con éxito')->success();
        
        return redirect()->route('categories.index');  


    }
}
