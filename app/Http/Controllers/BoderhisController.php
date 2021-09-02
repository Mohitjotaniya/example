<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\BoderhisModel;
use App\Models\BookModel;




use Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Exports\UsersdateExport;



class BoderhisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $name=$request->name;

        $request->session()->put('name', $name);
        
        $oderhistory = BoderhisModel::join('writer', 'user_order.u_id', '=', 'writer.u_id')
        ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
        ->where('writer.u_name' ,'LIKE','%'.$name .'%')
        ->select('writer.*','add_book.*','user_order.*')
        ->get();
        
       
        //return Excel::download(new Excel, 'users-collection.xlsx');


           // $oderview=orderModel::all()->where('u_id',$u_id);
           return view('admin.bookoderhistory',['oderhistory'=>$oderhistory]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function returnedbook()
    {
        $oderhistory = BoderhisModel::join('writer', 'user_order.u_id', '=', 'writer.u_id')
        ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
        ->select('writer.*','add_book.*','user_order.*')
        ->paginate(10);
        return view('admin.r_book',['oderhistory'=>$oderhistory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function excel()
    {
  
        
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }
    public function exceldate()
    {
  
        
        return Excel::download(new UsersdateExport, 'users-collection.xlsx');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $return =BoderhisModel::join('writer', 'user_order.u_id', '=', 'writer.u_id')
        ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
        ->select('writer.*','add_book.*','user_order.*')
        ->where('o_id',$id)
        ->get();

        //return view('admin.r_book',['oderhistory'=>$oderhistory]);
       // $return=boderhisModel::where('o_id',$id)->first(); //select all data and read one data
//dd($return);
        return view('admin.r_book_u',['return'=>$return]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $r_date =$request->input('r_date');
        //dd( $r_date);
        $data=array("r_date"=>$r_date);  
        BoderhisModel::where('o_id',$id)->update($data);
        $book_id =$request->input('book_id');
        $quan =$request->input('quan');


       
        BookModel::where('book_id',$book_id)->update(['quan' => $request->input('quan')+1]);
       
        return redirect("/r_book")->with('rupdsuccess','Returned book update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
