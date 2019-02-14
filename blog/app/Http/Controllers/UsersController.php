<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    public function index(){
       $users = User::orderBy('id', 'ASC')->paginate(6);
       return view('admin.users.index')->with('users', $users);
    }


    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $user = new User($request->all());
        $user ->password = bcrypt($request->password);
        $user->save();
        flash('Se ha registrado a '.$user->name.' de forma exitosa')->success();
        return redirect()->route('users.index');
    }
}
