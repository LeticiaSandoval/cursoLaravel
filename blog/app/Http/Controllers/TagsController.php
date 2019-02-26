<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(){

        return view('admin.tags.index');
    }

    public function create(){
        
        return view('admin.tags.create');

    }

    public function edit($id){

    }
}
