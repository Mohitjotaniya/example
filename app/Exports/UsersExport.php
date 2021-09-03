<?php

namespace App\Exports;

use App\Models\boderhisModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;
use App\Models\Order;


class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//   boderhisModel::
//         join('writer', 'user_order.u_id', '=', 'writer.u_id')
//         ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
//         ->select('writer.*','add_book.*','user_order.*')
//         ->get();

//         return collect([
//             [
//                 'name' => 'Povilas',
//                 'surname' => 'Korop',
//                 'email' => 'povilas@laraveldaily.com',
//                 'twitter' => '@povilaskorop'
//             ],
//             [
//                 'name' => 'Taylor',
//                 'surname' => 'Otwell',
//                 'email' => 'taylor@laravel.com',
//                 'twitter' => '@taylorotwell'
//             ]
//         ]);
$name=Session::get('name');
$return=Order::

        join('writers', 'orders.u_id', '=', 'writers.u_id')
        ->join('books', 'orders.book_id', '=', 'books.book_id')
        ->where('writers.u_name' ,'LIKE','%'.$name .'%')
        ->select('writers.u_id','writers.u_name','writers.email','books.name','books.prize','orders.created_at')
        ->get();
        return $return;
       // dd($re); 
    //    foreach( $result as $row){
    //         dd($row->name);
    //    }
    
      
 //return $result;
        // boderhisModel::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAME',
            'EMAIL',
            'BOOK NAME',
            'BOOK PRIZE',
            'ORDER DATE',
        ];
    }

    
   
}
