<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;


class UsermanagementModel extends Model
{
    use HasFactory;
    use Notifiable;
    use Sortable;
    protected $fillable =[
       
        "u_name","lname","email","password","phone","bod","gender","address","city","county"


    ];
    
    

   
    
    public $sortable = [
        'u_id','u_name',
                        'lname',
                        'email',
                        'pass','phone','bod','gender','address','city','county'];

                        protected $table='writer';
}
