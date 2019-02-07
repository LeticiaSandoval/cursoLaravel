<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table ="articles";
    protected $fillable =['titlle','content', 'category_id', 'user_id'];
}
