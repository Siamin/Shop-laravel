<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded=[];

    public function getTitle(){
        return strlen($this->Title)>50 ? substr($this->Title,0,40) : $this->Title;
    }

    public function getDescription(){
        return substr($this->Description,0,150);
    }

    public function CategoryModel(){
        return $this->belongsTo('App\Category', 'CategorId');
    } 

    public function User(){
        return $this->belongsTo('App\User', 'userId');
    }

}