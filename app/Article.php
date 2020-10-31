<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'path','category'
    ];
    

    public function categoriablog(){

    	 return $this->hasOne('App\Categoriablog', 'id', 'category');
    }


    public function getreviews(){

    	 return $this->hasMany('App\Review','article_id','id');
    }

}
