<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    Protected $table        = 'categorys';
    Protected $primaryKey   = 'id';
    public $incrementing = true;
    Protected $keyType      = 'int';
    public $timestamps   = false; 
}
