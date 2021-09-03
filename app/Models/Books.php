<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Books extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable =[
       
        "name","author","language","prize","pages","description","quan","image"


    ];
    public $sortable = [
        'book_id','name',
                        'author',
                        'language',
                        'pages','prize','description','quan'];


        protected $table = "books";
    public function inser($data)
    {
        return Books::create($data); 
    }
    
}
