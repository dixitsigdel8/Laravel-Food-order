<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Contact;

class CantactController extends Controller
{
    protected $contact= null;
    public function __construct(Contact $_contact){
        $this->contact=$_contact;
    }
    public function sendmessage(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required',
           'message'=>'required'
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject;
        $data['message']=$request->message;
       $contact= $this->contact->fill($data);
       $contact->save();
        Toastr::success('Your message successfully sent','Success',["positionClass"=>"toast-top-right"]);
       return redirect()->back();

    }
}
