<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsermanagementModel;

class UsermanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=UsermanagementModel::sortable()->paginate(5);
        return view('admin.usermanagement',['users'=>$users]);

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

            $select=$request->select;
            $search=$request->search;
            
      
     $users=UsermanagementModel::sortable()->where('name','LIKE','%'.$search.'%')->paginate($select );
    //dd($users);
       return view('admin.usermanagement',['users'=>$users]);
       // $users=usermanagementModel::paginate(5);
       // return view('admin.usermanagement',['users'=>$users]);
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
        $data=UsermanagementModel::where('u_id',$id)->first(); //select all data and read one data

        return view('admin.u_edit',['data'=>$data]);    
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
        $fname=$request->input('fname');
        $lname =$request->input('lname');
        $em =$request->input('em');
       
        $code =$request->input('code');

        $bod = $request->input('bod');
       
        $add = $request->input('add');
        $cou = $request->input('cou');
        $city = $request->input('city');

       




        $data=array("u_name"=>$fname,"lname"=>$lname,"email"=>$em,"phone"=>$code,"bod"=>$bod,"address"=>$add,"city"=>$city,"county"=>$cou);  
        UsermanagementModel::where('u_id',$id)->update($data);
         // echo $data;
         //return view("admin.addbooks");

        return redirect("/user_man")->with('updsuccess','Your uder Updated Successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UsermanagementModel::where('u_id',$id)->delete(); //delete 

        return redirect('user_man')->with('delsuccess','Data successfuly Deleted');
    }
}
