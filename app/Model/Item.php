<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Caegory;

class Item extends Model
{
    protected $fillable = [
        'title',
        'suntitle',
        'price',
        'category_id',
        'added_by',
        'image', 
       ];

       public function category()
       {
        return $this->hasOne('App\Model\Category','id','category_id');
       }

       public function getAllItem(){
        return $this->with('category')->get();
       }
}
