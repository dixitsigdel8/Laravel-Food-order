<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use DB;
class ReservationController extends Controller
{
    protected $reservation= null;
    public function __construct(Reservation $_reservation){
        $this->reservation=$_reservation;
    }
    public function reserve(Request $request){
        $this->validate($request,[
          'first_name'=>'required',
          'second_name'=>'required',
          'email'=>'required',
          'date'=>'required',
          'time'=>'required',
          'phone'=>'required',
          
          
        ]);
        $data=array();
        $data['first_name']=$request->first_name;
        $data['second_name']=$request->second_name;
        $data['email']=$request->email;
        $data['date']=$request->date;
        $data['time']=$request->time;
        $data['phone']=$request->phone;
        $data['message']=$request->message;
       $data['status']=false;

        $reservation=DB::table('reservations')->insert($data);
        Toastr::success('Reservation resquest sent successfully, we will confirm you shortly','Success',["positionClass" => "toast-top-center"]);
        return redirect()->route('site');


    }
}
