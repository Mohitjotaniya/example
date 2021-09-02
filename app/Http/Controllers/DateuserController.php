<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateuserModel;



class DateuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fdate=$request->fdate;
        $ldate=$request->ldate;

         $request->session()->put('fdate', $fdate);
         $request->session()->put('ldate', $ldate);
         
        $return = DateuserModel::join('writer', 'user_order.u_id', '=', 'writer.u_id')
                ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
                ->select('writer.*','add_book.*','user_order.*')
                ->whereBetween('user_order.created_at', array($fdate,$ldate))
                //->where('user_order.created_at' ,'LIKE','%'.$fdate .'%') 
               
                ->get();
       
        return view('admin.dateuser',['return'=>$return]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Request $request)
    {
       
			if (isset($_GET['submit'])) {

                $fdate=$request->fdate;
                $ldate=$request->ldate;
                // dd($fdate);
                // dd( $request->session()->put('fdate', $fdate));
                // $return = DB::table('user_order')
                // ->join('writer', 'user_order.u_id', '=', 'writer.u_id')
                // ->join('add_book', 'user_order.book_id', '=', 'add_book.book_id')
                // ->select('writer.*','add_book.*','user_order.*')
                // ->where('user_order.created_at' ,'LIKE','%'.$fdate .'%') 
                // // ->where('user_order.created_at' ,'LIKE','%'.$ldate .'%' ) 
                // ->get();

            
              
                //->where('created_at' ,$fdate)
                
                
               // select * from user_order where created_at between '2021-08-23 14:20:29' and '2021-08-25 14:20:29'

       //  $users=dateuserModel::where('created_at')->select("created_at.","$fdate");
     //  dd($return);
    //  return redirect("date_user",['return'=>$return]);
           return view('admin.dateuser',['return'=>$return]);
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
