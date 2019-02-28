<?php

namespace App\Http\Controllers;
use App\Http\Request\TagRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;

class ArticlesController extends Controller
{
    public function index(){

    }

    public function create(){
        $categories = Category::orderBy('name', 'ASC')->pluck('name','id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name','id');;
        return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $name ='blog'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'/images/articles/';
        $file->move($path, $name);

    }
}
