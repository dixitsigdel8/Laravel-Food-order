<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Reservation;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationConfirmed;

class AdminReservationController extends Controller
{
    protected $reservation= null;
    public function __construct(Reservation $_reservation){
        $this->reservation=$_reservation;
    }

    public function index(){
        $reserve=$this->reservation->get();
        return view('backend.reservation.index')
        ->with('reserve',$reserve);
    }

    public function status($id){
       $reservation=$this->reservation->where('id',$id)->first();
       $reservation->status=true;
       $reservation->save();

       Notification::route('mail', $reservation->email)
            ->notify(new ReservationConfirmed());
       Toastr::success('Reservation successfully confirmed','Success',["positionClass"=>"toast-top-right"]);
       return redirect()->back();
    }

    public function destroy($id){
        $this->reservation->find($id)->delete();
        Toastr::success('Reservation successfully delete','Success',["positionClass"=>"toast-top-right"]);
        return redirect()->back();
    }
}
