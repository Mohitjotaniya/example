<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddtocartModel extends Model
{
    use HasFactory;

    protected $fillable =[
       
       "u_id", "book_id","name","author","quan","prize"


    ];

    protected $table='add_to_cart';
}
