<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterModel extends Model
{
    Protected $table        = 'footers';
    Protected $primaryKey   = 'id';
    public $incrementing = true;
    Protected $keyType      = 'int';
    public $timestamps   = false; 
}
