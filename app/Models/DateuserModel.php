<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateuserModel extends Model
{
    use HasFactory;
    protected $fillable =[
    "u_id", "book_id","b_name","b_prize","b_sum"
 
 
];

protected $table='user_order';
}
