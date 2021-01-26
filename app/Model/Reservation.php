<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['first_name','second_name','email','phone','date','time','status','message'];
}
