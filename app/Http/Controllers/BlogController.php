<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog;

class BlogController extends Controller
{
    
    protected $blog= null;
    public function __construct(Blog $_blog){
        $this->blog=$_blog;
    }
    public function index(){
        $data=$this->blog->get();
        return view ('backend.blog.blog')->with('blog_data',$data);
    }

    public function getBlogForm(Request $request){
       
        $act=($request->id=='post') ? 'add':'update';
        if($act!=='add'){
            $this->blog=$this->blog->find($request->id);
            if(!$this->blog){
                $request->session()->flash('success',' not found');
                return redirect()->route('blog-list');
            }
        }

        return view ('backend.blog.blog-form')
        ->with('title',$act)
        ->with('blog_data',$this->blog);
        
        
    }

    public function submitBlog(Request $request){

        $act="add";
        if(isset($request->blog_id) && $request->blog_id !=null){
            $act="updat";
            $this->blog=$this->blog->find($request->blog_id);

        }
        $rules=$this->blog->getRules();

        $request->validate($rules);
        
        $success=$this->blog->addblog($request);
             if($success){
                 $request->session()->flash('success','File '.$act.'ed successfully');
             }else{
                $request->session()->flash('sorry','File could not '.$act.'ed');
             }
             return redirect()->route('blog-list');
    }

    public function deleteBlog(Request $request){
        $this->blog=$this->blog->find($request->blog_id);

        if(!$this->blog){
            $request->session()->flash('error','File not found');
            return redirect()->route('blog-list');
        }

        $blog_image=$this->blog->image;
        $del=$this->blog->delete();
        if($del){
            if(file_exists(public_path().'/uploads/blog/'.$blog_image)){
                unlink(public_path().'/uploads/blog/'.$blog_image);
            }
            $request->session()->flash('success','File delete successfully');   
        }else{
         $request->session()->flash('error','Sorry! There is problem');
        }
        return redirect()->route('blog-list');
    }
}
