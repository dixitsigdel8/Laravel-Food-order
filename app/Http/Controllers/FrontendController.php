<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Testimony;
use App\Model\Item;
use App\Model\Category;

class FrontendController extends Controller
{
    protected $blog=null;
    protected $testimony=null;
    protected $category=null;
    public function __construct(Blog $_blog,Testimony $_testimony,Item $_item,Category $_category){
        $this->blog=$_blog;
        $this->testimony=$_testimony;
        $this->item=$_item;
        $this->category=$_category;
    }
    public function index(){
        $blog=$this->blog->orderBy('id','DESC')->paginate('3');
        $testimony=$this->testimony->orderBy('id','DESC')->get();
        $item=$this->item->paginate(4);
        return view('frontend.home')
        ->with('blog',$blog)
        ->with('testimony',$testimony)
        ->with('item',$item);
    }

    public function menu(){
        $item=$this->item->get();
        $category=$this->category->get();
        return view('frontend.pages.menu')
        ->with('item',$item)
        ->with('category',$category);
    }
    
    public function contact(){
        return view('frontend.pages.contact');
    }
}
