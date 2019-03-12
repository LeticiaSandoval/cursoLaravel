<?php

namespace App\Http\Controllers;
use App\Http\Request\TagRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function index(Request $request){

        $articles = Article::Search($request->title)->orderBy('id','desc')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });

        return view('admin.articles.index')->with('articles',$articles);

    }

    public function create(){
        $categories = Category::orderBy('name', 'ASC')->pluck('name','id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name','id');;
        return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
    }

    public function store(ArticleRequest $request)
    {
        if($request->file('image'))
        {
            $file = $request->file('image');
            $name ='blog'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/images/articles/';
            $file->move($path, $name);
        }

       $article = new Article($request->all());
       $article->user_id = \Auth::user()->id;
       $article->save();
       
       $article->tags()->sync($request->tags);
       
       $image = new Image();
       $image->name = $name;
       $image->article()->associate($article);
       $image->save();

       flash('Se ha creado el artículo '.$article->title.' de forma exitosa')->success();

       return redirect()->route('articles.index');

    }

    public function edit($id)
    {
        $article = Article::find($id);
        $article->category; 
        $categories = Category::orderBy('name','DESC')->pluck('name', 'id');
        $tags = Tag::orderBy('name','DESC')->pluck('name', 'id');

        $my_tags = $article->tags->pluck('id')->ToArray();

        return view('admin.articles.edit')->with('categories', $categories)
                                          ->with('article', $article)
                                          ->with('tags',$tags)
                                          ->with('my_tags', $my_tags);
    }
    
    public function destroy($id){
        $article = Article::find($id);
        flash('Artículo ha sido eliminado')->error();
        $article->delete();

        return redirect()->route('articles.index');
   
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());  
        
        $article->save();
        $article->tags()->sync($request->tags);
        flash('Atículo actualizado')->success();
        return redirect()->route('articles.index');

    }

}
