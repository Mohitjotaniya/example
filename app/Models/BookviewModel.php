<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookviewModel extends Model
{
    use HasFactory;
    protected $fillable =[
       
        "name","author","lang","pages","description","quan"


    ];

   

    protected $table='add_book';
}
