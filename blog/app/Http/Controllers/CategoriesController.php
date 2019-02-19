<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoriesController extends Controller
{
    public function index(){
     
        return view('admin.categories.index');

    }

    public function create(){
     return view('admin.categories.create');
    }

    public function show(){

    }

    public function store(CategoryRequest $request){
        $category = new Category($request -> all());
        $category->save();
        flash('La categosría '.$category->name.' ha sido creado con éxito!')->success();

        return redirect()->route('categories.index');
        
    }
}
