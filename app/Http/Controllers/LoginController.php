<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Hash;
use Session;

use App\Models\LoginModel;
use Auth;
use Validator;
use App\Models\User;



class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logins');
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
    public function destroy($id)
    {
        //
    }

    public function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );
//dd(Auth::attempt($user_data));
     if(Auth::attempt($user_data))
     {
        $remember=$request->remember;
        if (!empty($remember)) {
            setcookie('email',$request->get('email'),time()+60*60*24*15);
            setcookie('password',$request->get('password'),time()+60*60*24*15);

        }

       
         return redirect('/Admin/Deshbord');
     }
     else
     {
         
      return back()->with('error', 'Wrong Login Details');
     }

    }

    // function successlogin()
    // {
    //  return view('successlogin');
    // }Hash

    function logout()
    {
     Auth::logout();
     Session::flush();
     return redirect('/Admin');
    }

     function change_password()
    {
        return view('change_password');
    }
    
    public function update_password(Request $request)
    {
       
        // $request->validate([
        // 'old_password'=>'required|min:6|max:100',
        // 'new_password'=>'required|min:6|max:100',
        // 'confirm_password'=>'required|same:new_password'
        // ]);
        //  $user_data = array(
        //      'passwords'  => $request->get('old_password'),

            
        //    );
        // dd($user_data);
        //$current_user = auth()->user();
        //$password = Auth::user()->password;
       // $user = Auth::user();

  

        //'user_id' => $request->user()->id


        
       // print($request->user()->id);
        
       // print($user->email);
      // $current_user = User::all();
        $current_user = Auth::user();
        //dd($current_user);   
       if(Hash::check($request->old_password,$current_user->password))
       {
       // dd($current_user->password);   
            $current_user->update([
                'password'=> bcrypt($request->new_password)
            ]);

            return redirect('/Admin/Deshbord')->with('success','Password successfully updated.');

       }else{
           return redirect()->back()->with('error','Old password does not matched.');
       }
}
}
