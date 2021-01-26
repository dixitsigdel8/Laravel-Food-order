<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use File;

class CategoryController extends Controller
{
    protected $article=null;
    public function __construct(Category $_category){
        $this->category=$_category;
    }
    public function index(){
        $data=$this->category->getAllCategory();
        return view('backend.category.category')->with('category_data',$data);

    }
    public function getCategoryForm(Request $request){

        $act=($request->id=='post') ? 'add':'update';
        if($act!=='add'){
            $this->category=$this->category->find($request->id);
            if(!$this->category){
                $request->session()->flash('success','Category not found');
                return redirect()->route('category-list');
            }
        }

        return view ('backend.category.category-form')
        ->with('title',$act)
        ->with('category_data',$this->category);
    }

    public function submitCategory(Request $request){
         
        $act="add";
        if(isset($request->category_id) && $request->category_id !=null){
            $act="updat";
            $this->category=$this->category->find($request->category_id);

        }
        $rules=$this->category->getAddRules();

        $request->validate($rules);
        
        $success=$this->category->addCategory($request);
             if($success){
                 $request->session()->flash('success','Category '.$act.'ed successfully');
             }else{
                $request->session()->flash('sorry','Category could not '.$act.'ed');
             }
             return redirect()->route('category-list');
    }
   public function deleteCategory(Request $request){
       $this->category=$this->category->find($request->category_id);
       
       if(!$this->category){
           $request->session()->flash('error','Category not found');
           return redirect()->route('category-list');
       }
       $del=$this->category->delete();
       if($del){
           $request->session()->flash('success','Category delete successfully');   
       }else{
        $request->session()->flash('error','Sorry! There is problem');
       }
       return redirect()->route('category-list');   
   }


}
