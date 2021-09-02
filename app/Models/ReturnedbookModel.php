<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnedbookModel extends Model
{
    use HasFactory;
    protected $fillable =[
       
         "book_name","u_name","c_data","r_date"
 
     ];
 
     protected $table='returnedbook';
}
