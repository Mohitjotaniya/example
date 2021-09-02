<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartviewModel extends Model
{
    use HasFactory;
    protected $fillable =[
       
        "c_id","u_id","book_id","name","author","quan"


    ];

    protected $table='add_to_cart';
}
