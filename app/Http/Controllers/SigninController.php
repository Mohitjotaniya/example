<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writers;
use Hash;
// use App\Writer;


class SigninController extends Controller
{
    public function __construct()
        {
            $this->middleware('guest')->except('logout');
            
            $this->middleware('guest:writer')->except('logout');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.signin');

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
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'em'=>'required',
            'pass'=>'required',
            'code'=>'required',
            'bod'=>'required',
            'g'=>'required',
            'add'=>'required',
            'cou'=>'required',
            'city'=>'required',
            
           
            ]);
        

        $fname=$request->input('fname');
        $lname =$request->input('lname');
        $em =$request->input('em');
        $password =$request->input('pass');
        $password1 = Hash::make($password);
        $code =$request->input('code');

        $bod = $request->input('bod');
        $g = $request->input('g');
        $add = $request->input('add');
        $cou = $request->input('cou');
    $city = $request->input('city');


           $data=array("u_name"=>$fname,"lname"=>$lname,"email"=>$em,"password"=>$password1,"phone"=>$code,"bod"=>$bod,"gender"=>$g,"address"=>$add,"city"=>$city,"county"=>$cou);  
           Writers::create($data); 
          // dd($data);
            // echo $data;
         //return view("admin.addbooks");

        return redirect("/user_register")->with('success','Add user  successfuly');
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
