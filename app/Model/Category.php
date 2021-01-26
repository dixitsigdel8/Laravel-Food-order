<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','added_by'];
    public function getAddRules(){
        return[
            'title'=>'required|string',
        ];
            
    }
    public function addCategory($request){
        $data=$request->except('_token');
            $data['added_by']=$request->user()->id;
             $this->fill($data);
             return $this->save();
    }

    public function user(){
        return $this->hasOne('App\User','id','added_by');
    }

    

    public function getAllCategory(){
       return $this->with('user')->get();
    }
}
