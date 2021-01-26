<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Item;
use File;
use DB;

class ItemController extends Controller
{
    protected $item=null;
    public function __construct(Item $_item){
        $this->item=$_item;
    }
    public function index()
    {
        $item=$this->item->getAllItem();
        return view('backend.item.item',compact('item'));
   }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::get();
        return view('backend.item.item-form')
        ->with('title','Add')
        ->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=> 'required',
            'title'=> 'required|string',
            'subtitle'=> 'required|string',
            'price'=> 'required',
            'image'=> 'required|mimes:jpeg,jpg,bmp,png'
        ]);
        $data=array();
        $data['category_id']=$request->category_id;
        $data['title']=$request->title;
        $data['subtitle']=$request->subtitle;
        $data['price']=$request->price;
        

        if($request->file('image')){
            $path=base_path('/public/uploads/item');
            if(!File::exists($path)){
                File::makeDirectory($path, 0777,true,true);
            }
            $ext=$request->image->getClientOriginalExtension();
            $file_name="Item-".date('Ymdhis').rand(0,9).".".$ext;
            $success=$request->image->move($path, $file_name);
            if($success){
                $data['image']=$file_name;
            }
       
            $item=DB::table('items')->insert($data);
            return redirect()->route('item-list')
                                                   ->with('success','Post created successfully');
                                          
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=DB::table('items')->where('id',$id)->first();
        return view('backend.item.item-show')
                        ->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=DB::table('items')->where('id',$id)->first();
        $category=DB::table('categories')->get();
        return view('backend.item.item-edit')
        ->with('item',$item)
        ->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->oldimage;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'category_id'    =>  'required',
                'title'   =>  'required|string',
                'subtitle'=>'required|string',
                'price'=>'required',
               'image' =>  'required|mimes:jpeg,jpg,bmp,png'
                  ]);
            
                  $ext=$request->image->getClientOriginalExtension();
            $image_name = "Item-".date('Ymdhis').rand(0,9).".".$ext ;
            $image->move(public_path('/public/uploads/item'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'subtitle'     =>  'required',
                'price'=>'required'
            ]);
        }

        $form_data = array(
            'category_id'       =>   $request->category,
            'title'        =>   $request->title,
            'subtitle'=>$request->subtitle,
            'price'=>$request->price,
            'image'  =>   $image_name
        );
        $item=DB::table('items')->where('id',$id)->update($form_data);
       

        return redirect()->route('item-list')
                                           ->with('success','Item updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->item=$this->item->find($request->id);

        if(!$this->item){
            $request->session()->flash('error','Item not found');
            return redirect()->route('Item-list');
        }

        $item_image=$this->item->image;
        $del=$this->item->delete();
        if($del){
            if(file_exists(public_path().'/uploads/item/'.$item_image)){
                unlink(public_path().'/uploads/item/'.$item_image);
            }
            $request->session()->flash('success','Item delete successfully');   
        }else{
         $request->session()->flash('error','Sorry! There is problem');
        }
        return redirect()->route('item-list');
    }
        
}
