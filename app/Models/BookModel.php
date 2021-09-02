<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class BookModel extends Model
{
    use Notifiable;

    protected $fillable =[
       
        "name","author","language","prize","pages","description","quan","image"


    ];

    protected $table='add_book';
}
