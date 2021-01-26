<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=array(
            array(
              'name'=>'Admin',
              'email'=>'admin@coffee.com',
              'password'=>Hash::make('admin'),
              'role'=>'admin',
              'status'=>'active'
            )
            
        );

       foreach($admin as $ind_user){
           $user=App\User::where('email',$ind_user['email'])->first();

           if(!$user){
               $user=new User();
           }
           $user->fill($ind_user);
           $user->save();
       }

    }
    
}
