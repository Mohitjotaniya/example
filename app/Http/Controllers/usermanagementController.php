<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermanagementModel;

class usermanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=usermanagementModel::sortable()->paginate(5);
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
            
      
     $users=usermanagementModel::sortable()->where('name','LIKE','%'.$search.'%')->paginate($select );
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
        $data=usermanagementModel::where('u_id',$id)->first(); //select all data and read one data

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
        usermanagementModel::where('u_id',$id)->delete(); //delete 

        return redirect('user_man')->with('delsuccess','Data successfuly Deleted');
    }
}
