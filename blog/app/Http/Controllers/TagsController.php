<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\TagRequest;
use App\Tag;

class TagsController extends Controller
{
    public function index(Request $request){

        $tags = Tag::search($request->name)->orderBy('id', 'ASC')->paginate(5);

        return view('admin.tags.index')->with('tags', $tags);
    }

    public function create(){
        
        return view('admin.tags.create');

    }

    public function edit($id){

        $tag = Tag::find($id);

        return view('admin.tags.edit')->with('tag', $tag);

    }

    public function update(Request $request, $id){
        $tag = Tag::find($id);

        $tag->fill($request->all()); 
        $tag->save();
        
        flash('Datos actualizados')->success();
        
        return redirect()->route('tags.index');        

    }

    public function store(Request $request){

        $tag = new Tag($request->all());
        $tag->save();

        flash('El tag '.$tag->name.' ha sido creado con exito!')->success();

        return redirect()->route('tags.index');

    }

    public function destroy($id){
        $tag = Tag::find($id);
        
        flash('Tag '.$tag->name.' ha sido eliminado')->error();
        $tag->delete();

        return redirect()->route('tags.index');
    }
}
