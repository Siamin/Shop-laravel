<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $guarded=[];


        public function CategoryModel(){
        return $this->blongsTo('App\Category');
        }
}