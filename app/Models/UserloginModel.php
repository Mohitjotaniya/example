<?php

namespace App\Models;
//use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserloginModel extends Authenticatable {

    use HasFactory;
    //protected $guarded = array('writer');
    protected $guard = 'writer';

    protected $fillable =[
       
        "u_name","lname","email","password","phone","bod","gender","address","city","county"


    ];
    
    

    protected $table='writer';
}
