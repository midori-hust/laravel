<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model{
    protected $table='todolist';
    public $timestamp=false;
    public function Detail(){
        return $this->hasOne('App\Detail','work_id');
    }
}
