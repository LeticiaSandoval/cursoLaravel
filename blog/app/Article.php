<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table ="articles";
    protected $fillable =['titlle','content', 'category_id', 'user_id'];

    //relacion uno a muchos

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
       return $this->belongsTo('App\user');
    }

    public function images(){
        return $this->hasMany('App\Imagen');
    }

    public function tags(){
       return $this->belongsToMany('App\Tag');
    }
}
