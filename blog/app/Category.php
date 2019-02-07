<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    
    //que campos se quieren mostrar
    protected $fillable = ['name'];
}
