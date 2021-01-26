<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use File;

class Testimony extends Model
{
    protected $fillable = ['title','description','image'];
    public function getRules(){
        return[
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'sometimes|image|max:3000'
        ];
    }

    public function addTestimony($request){

        $data= $request->except('_token');

        if($request->has('image')){
            $path=public_path('uploads/testimony');
            if(!File::exists($path)){
                File::makeDirectory($path, 0777, true, true);
            }

            $ext=$request->image->getClientOriginalExtension();
            $file_name="testimony-".date('Ymdhis').rand(0,9).".".$ext;
            $success= $request->image->move($path,$file_name);
            if($success){
                $data['image']=$file_name;
                if($this->image !=null && file_exists(public_path().'/uploads/testimony/'.$this->image) ){
                    unlink(public_path().'/uploads/testimony/'.$this->image);
                } 
            }
        }

        $this->fill($data);
        return $this->save();
    }
}
