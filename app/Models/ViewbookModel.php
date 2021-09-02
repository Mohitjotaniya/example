<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Kyslik\ColumnSortable\Sortable;


class ViewbookModel extends Model
{
   use Sortable;

    use Notifiable;

    protected $fillable =[
       
        "name","author","lang","pages","description","quan"


    ];

    public $sortable = [
        'book_id','name',
                        'author',
                        'language',
                        'pages','prize','description','quan'];

    protected $table='add_book';
}
