<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Notifications\Notifiable;


class SigninModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable =[
       
        "u_name","lname","email","password","phone","bod","gender","address","city","county"


    ];
    

    protected $table='writer';
}
