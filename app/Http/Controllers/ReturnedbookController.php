<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReturnedbookModel;
use App\Models\BookModel;





class ReturnedbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $re=returnedbookModel::all();
        // //dd($re);
        // return view('admin.r_book',['re'=>$re]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

//         $book_name=$request->input('book_name');
//         $u_name=$request->input('u_name');
//         $c_data=$request->input('c_data');
//         $r_date =$request->input('r_date');

//         $data=array("book_name"=>$book_name,"u_name"=>$u_name,"c_data"=>$c_data,"r_date"=>$r_date); 
//         returnedbookModel::create($data); 
//         $book_id =$request->input('book_id');
//         $quan =$request->input('quan');


//         // return view('admin.r_book',['re'=>$re]);
//    bookModel::where('book_id',$book_id)->update(['quan' => $request->input('quan')+1]);

//         return redirect("/r_book")->with('success','Add book successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
