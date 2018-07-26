<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    ///para usar una tabla connombreespecifico
    //protected $table='posts';
   // protected $table ='posts';
    public $primaryKey='id';
    public $timestamps=true;
}
