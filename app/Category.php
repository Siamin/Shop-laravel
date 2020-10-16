<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    

    public function getParent(){
        return $this->hasOne('App\category','id','parentId')->withDefault(['name'=>'None']);
    }
    
    public function getDateCreate(){
        // return $this->hasOne('App\category','created_at');
    }

    public function getChild(){
        return $this->hasMany('App\Category','parentId');
    }
}