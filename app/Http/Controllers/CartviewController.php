<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Books;
use Session;




class CartviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $useredit=$request->session()->get('username')->u_id;
        $addcart=Carts::all()->where('u_id',$useredit);
      
        $sum = Carts::where('u_id',$useredit)->sum('prize');
        $request->session()->put('sum',$sum);

        //SELECT SUM(prize) AS "h" FROM add_to_cart WHERE u_id=2
//dd($users);
        //dd($addcart);
        // Mail::to('jotaniyamohit6259@gmail.com')->send(new SendMail($data));
        $request->session()->put('addcart',$addcart);
        return view('frontend.cart',['addcart'=>$addcart]);
        //return view('frontend.book-media-list-view');
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
    public function show($id)
    {
        //
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
    public function destroy(Request $request,$id)
    {
       
        $result2 = Carts::where(['u_id'=> Session::get('username')->u_id,'c_id' => $id])->first();

        // dd($result2->book_id);

        $result3 = Books::where(['book_id' => $result2->book_id])->first();
        // dd($result3->quan);
        Carts::where('c_id',$id)->delete();
       
        Books::where('book_id',$result2->book_id)->update([
            'quan' => $result3->quan+1
        ]); //delete 

        return redirect('cartview')->with('delsuccess','Data successfuly Deleted');
    }
}
