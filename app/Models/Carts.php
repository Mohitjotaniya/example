<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable =[
       
        "c_id","u_id","book_id","name","author","quan","prize"


    ];
    protected $table = "carts";
}
