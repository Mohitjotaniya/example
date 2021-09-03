<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

class Writers extends Authenticatable
{
   
    use HasFactory;
    use Sortable;
    protected $guard = 'writer';
    protected $fillable =[
       
        "u_name","lname","email","password","phone","bod","gender","address","city","county"


    ];
    public $sortable = [
        'u_id','u_name',
                        'lname',
                        'email',
                        'pass','phone','bod','gender','address','city','county'];
}
