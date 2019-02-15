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

    public function destroy($id){
        $user = User::find($id);
        flash('Usuario '.$user->name.' ha sido eliminado')->error();
        $user->delete();

        return redirect()->route('users.index');
    }

    public function edit($id){
        
        $user = User::find($id);

        return view('admin.users.edit')->with('user', $user);

    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        
        flash('Datos actualizados')->success();
        
        return redirect()->route('users.index');        

    }

    public function show($id){

    }
}
