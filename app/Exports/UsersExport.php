<?php

namespace App\Exports;

use App\Models\boderhisModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;


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
$return=boderhisModel::

        join('writer', 'user_order.u_id', '=', 'writer.u_id')
        ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
        ->where('writer.u_name' ,'LIKE','%'.$name .'%')
        ->select('writer.u_id','writer.u_name','writer.email','add_book.name','add_book.prize','user_order.created_at')
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
