<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){
        return $this->belongsTo('App\Models\Category','cat_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\Admin','user_id','id');
    }
}
