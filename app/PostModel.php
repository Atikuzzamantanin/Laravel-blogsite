<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    Protected $table        = 'posts';
    Protected $primaryKey   = 'id';
    public $incrementing = true;
    Protected $keyType      = 'int';
    public $timestamps   = false; 

    public function category()
    {
        return $this->belongsTo('App\CategoryModel');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tag()
    {
        return $this->belongsTo('App\TagModel');
    }
    


}
