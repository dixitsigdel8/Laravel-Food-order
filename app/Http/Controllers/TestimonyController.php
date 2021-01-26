<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Testimony;

class TestimonyController extends Controller
{
    protected $testimony= null;
    public function __construct(Testimony $_testimony){
        $this->testimony=$_testimony;
    }
    public function index(){
        $data=$this->testimony->get();
        return view ('backend.testimony.testimony')->with('testimony_data',$data);
    }

    public function getTestimonyForm(Request $request){
       
        $act=($request->id=='post') ? 'add':'update';
        if($act!=='add'){
            $this->testimony=$this->testimony->find($request->id);
            if(!$this->testimony){
                $request->session()->flash('success',' not found');
                return redirect()->route('testimony-list');
            }
        }

        return view ('backend.testimony.testimony-form')
        ->with('title',$act)
        ->with('testimony_data',$this->testimony);
        
        
    }

    public function submitTestimony(Request $request){

        $act="add";
        if(isset($request->testimony_id) && $request->testimony_id !=null){
            $act="updat";
            $this->testimony=$this->testimony->find($request->testimony_id);

        }
        $rules=$this->testimony->getRules();

        $request->validate($rules);
        
        $success=$this->testimony->addTestimony($request);
             if($success){
                 $request->session()->flash('success','File '.$act.'ed successfully');
             }else{
                $request->session()->flash('sorry','File could not '.$act.'ed');
             }
             return redirect()->route('testimony-list');
    }

    public function deleteTestimony(Request $request){
        $this->testimony=$this->testimony->find($request->testimony_id);

        if(!$this->testimony){
            $request->session()->flash('error','File not found');
            return redirect()->route('testimony-list');
        }

        $testimony_image=$this->testimony->image;
        $del=$this->testimony->delete();
        if($del){
            if(file_exists(public_path().'/uploads/testimony/'.$testimony_image)){
                unlink(public_path().'/uploads/testimony/'.$testimony_image);
            }
            $request->session()->flash('success','File delete successfully');   
        }else{
         $request->session()->flash('error','Sorry! There is problem');
        }
        return redirect()->route('testimony-list');
    }

    public function show($id){
        $testimony=$this->testimony->where('id',$id)->first();
        return view('backend.testimony.testimony-show')
        ->with('testimony',$testimony);
    }


}
