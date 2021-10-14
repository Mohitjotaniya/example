<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;


class Writers extends Authenticatable 
{
   
    use HasApiTokens,HasFactory, Notifiable;
    use Sortable;
   protected $guard = 'writer';
   public $fillable =[
       
        "u_name","lname","email","password","phone","bod","gender","address","city","county"


    ];
    public $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $primaryKey = 'u_id';



    public $sortable = [
        'u_id','u_name',
                        'lname',
                        'email',
                        'pass','phone','bod','gender','address','city','county'];


     public function inser($data)
        {
            return Writers::create($data); 
        }

        
        // public function update($data)
        // {
        //     return Writers::create($data); 
        // }
}
