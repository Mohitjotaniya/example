<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoderhisModel extends Model
{
    use HasFactory;
    protected $fillable =[
       
        "u_id", "book_id","b_name","b_prize","b_sum","r_date"
 
 
     ];
 
     protected $table='user_order';

   

    //  public function collection()
    //  {
    //      return boderhisModel::all();
    //  }
}
