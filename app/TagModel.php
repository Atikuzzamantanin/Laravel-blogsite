<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    Protected $table        = 'tags';
    Protected $primaryKey   = 'id';
    public $incrementing = true;
    Protected $keyType      = 'int';
    public $timestamps   = false; 
}
