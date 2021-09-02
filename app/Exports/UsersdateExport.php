<?php

namespace App\Exports;

use App\Models\User;
use App\Models\boderhisModel;
use DB;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;


class UsersdateExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $fdate=Session::get('fdate');
        $ldate=Session::get('ldate');
        $return = DB::table('user_order')
        ->join('writer', 'user_order.u_id', '=', 'writer.u_id')
        ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
        ->select('writer.*','add_book.*','user_order.*')
        //->where('user_order.created_at' ,'LIKE','%'.$fdate .'%') 
        ->whereBetween('user_order.created_at', array($fdate,$ldate))
        ->select('writer.u_id','writer.u_name','add_book.name','user_order.created_at')
        // ->where('user_order.created_at' ,'LIKE','%'.$ldate .'%' ) 
        ->get();
        return $return;
        // return boderhisModel::
        // join('writer', 'user_order.u_id', '=', 'writer.u_id')
        // ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
        // ->select('writer.u_id','writer.u_name','add_book.name','user_order.created_at','user_order.r_date')
        // ->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAME',
            
            'BOOK NAME',
            
            'ORDER DATE',
            
        ];
    }
}
