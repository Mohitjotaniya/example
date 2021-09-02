<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $fillable =[
       
        "u_id", "book_id","b_name","b_prize","b_sum"
 
 
     ];
 
     protected $table='user_order';
}
