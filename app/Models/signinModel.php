<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Notifications\Notifiable;


class signinModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable =[
       
        "name","lname","email","pass","phone","bod","gender","address","city","county"


    ];
    

    protected $table='add_user';
}
