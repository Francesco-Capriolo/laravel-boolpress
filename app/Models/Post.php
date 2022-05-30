<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('title','author','content','image_url','slug');
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}
