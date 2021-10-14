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

    public function inser($data)
    {
        return Carts::create($data); 
    }

    
    public function show()
    {
        return Carts::paginate(3) ;
    }

    public function idshow($useredit)
    {
        return Carts::all()->where('u_id',$useredit) ;
    }
    public function cartdelete($c_id)
    {
        return   Carts::where('c_id',$c_id)->delete(); ;
    }
}
