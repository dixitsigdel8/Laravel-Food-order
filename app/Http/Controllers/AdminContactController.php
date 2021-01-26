<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Contact;


class AdminContactController extends Controller
{
    protected $contact= null;
    public function __construct(Contact $_contact){
        $this->contact=$_contact;
    }
    public function index(){
        $contact=$this->contact->get();
        return view('backend.contact.index')
        ->with('contact',$contact);

    }

    public function show(Request $request,$id){

    }

    public function delete($id){
        $this->contact->find($id)->delete();
        Toastr::success('Message successfully delete','Success',["positionClass"=>"toast-top-right"]);
        return redirect()->back();
    }
}
