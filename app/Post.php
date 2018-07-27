<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    ///para usar una tabla connombreespecifico
    protected $table='posts';
   // protected $table ='posts';
    public $primaryKey='id';
    public $timestamps=true;
//aqui deice que post tiene una relacion con user y pertenece a user
    public function user(){
        return $this->belongsTo('App\User');
    }
  
}
