<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writers;
use Auth;
use \Hash;
use Session;
use App\Writer;






class UserloginController extends Controller
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
        return view('frontend.user_login');

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
    public function edit(Request $r)
    { 
        $useredit=$r->session()->get('username');

        $result = Writers::where('u_id',$r->session()->get('username')->u_id)->first();
        // dd($result->name);

        return view('frontend/profile',['useredit'=>$result]);
        //$current_user = Auth::guard('writer')->user();
        
        // dd($this->m);
        // if(Auth::guard('writer'));
        // {
        //     $m=Auth::guard('writer')->user();
        //        dd($m);
        // }
       // $userprofile = Auth::user();
        
       // $data=userloginModel::where('u_id',$id)->first(); //select all data and read one data
       //dd($data);
       //dd();

        //return view('frontend/profile');    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $id=$request->input('u_id');
            $fname=$request->input('fname');
            $lname =$request->input('lname');
            $em =$request->input('em');
           
            $code =$request->input('code');
    
            $bod = $request->input('bod');
          
            $add = $request->input('add');
            $cou = $request->input('cou');
            $city = $request->input('city');
    
           
    
    
    
    
            $data=array("u_name"=>$fname,"lname"=>$lname,"email"=>$em,"phone"=>$code,"bod"=>$bod,"address"=>$add,"city"=>$city,"county"=>$cou);  
            Writers::where('u_id',$id)->update($data);
            //dd($data);
             // echo $data;
             //return view("admin.addbooks");
    
            return redirect("u_profile")->with('updsuccess','Your uder Updated Successfuly');
    
        
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
            'password' => 'required|min:6'
        ]);
        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );
           
          

          // dd('$request->session()');
           if(Auth::guard('writer')->attempt($user_data))
           {


            //  $m=Auth::guard('writer')->user()->name;
            //    dd($m); 
           // $request->session()->get('id', $request->get('u_id'));
          //dd(Auth::guard('writer')->check()) ;
            //$request->session()->put('data', $request->get('email'));
            //$data = $request->session()->all();
            //$this->userprofile = Auth::guard('writer');
            //   $remember=$request->remember;
            //   if (!empty($remember)) {
            //       setcookie('email',$request->get('email'),time()+60*60*24*15);
            //       setcookie('password',$request->get('password'),time()+60*60*24*15);
      
            //   }
            $userss=Auth::guard('writer')->user();
            // dd($userss);
            $request->session()->put('username',$userss);
                return redirect('/');
                // $this->m=Auth::guard('writer')->user();
                
                   //return view('frontend.content');
                //   return $this->m;
                //return redirect('/');
               
        // $userss=Auth::guard('writer')->user();
       
        // return view('frontend.content',['userss'=>$userss]);
        
           }
           else
           {
               
            return back()->with('error', 'Wrong Login Details');
            }
        // if (Auth::guard('writer')->attempt($user_data) )
       
        // {

        //     return redirect('')->intended('/writer');
        // }
        // return redirect('/Admin')->withInput($request->only('email', 'remember'));
    
//         $email = $request->get('email');
//         $pass  = $request->get('password');
   

//        // $user = userloginModel::where('email', '=', $email)->first();
       
//     //     $user_data = array(
//     //   'email'  => $request->get('email'),
//     //   'pass'  => $request->get('password')
      
//     //  );
//      $user = userloginModel::where('email', '=', $email)->first();

// //dd($user);
//        // Session::put('email',$request->email);
//         $request->session()->put('data', $request->get('email'));



//         //$session=Session::get('email');
//        //dd( $request->session());
//         if (Auth::login($user)) {
            
//             return redirect('/user_login') ->with('fail','Login Fail, please check email id');
//           // return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
//         }
//         if (!Hash::check($pass, $user->pass)) {
//             return redirect('/user_login') ->with('fail','Login Fail, pls check password');
//           //return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
//         }
//         return redirect('/');
//        // $request->session()->put('data', $request->get('email'));
        
        
    
    
    
//      $this->validate($request, [
//       'email'   => 'required|email',
//       'password'  => 'required|alphaNum|min:3'
//      ]);

//      $user_data = array(
//       'email'  => $request->get('email'),
//       'pass'  => $request->get('password')
      
//      );
// //dd(Auth::attempt($user_data));
// $user = userloginModel::where($user_data)->first();
//      if(Auth::login($user))
//      {

//         $remember=$request->remember;
//         if (!empty($remember)) {
//             setcookie('email',$request->get('email'),time()+60*60*24*15);
//             setcookie('password',$request->get('password'),time()+60*60*24*15);

//         }
      
//       return redirect('/');
//      }
//      else
//      {
         
//       return back()->with('error', 'Wrong Login Details');
//      }

    }

     function logout(Request $request)
    {
        Auth::logout('writer');

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        session()->forget('username');

        return redirect('/');
    }

    function u_profile()
    {
        Auth::guard('writer');
        return redirect('/');
        return view('frontend/profile');
    }


    
    function u_change_password()
    {
        return view('frontend/change_password');
    }

    public function u_update_password(Request $request)
    {
        $id=$request->input('u_id');
        $password=$request->input('password');
        $data=array("password"=>$password); 
         
        Writers::where('u_id',$id)->update($data);
  
        return redirect()->back();

    //     $current_user =session()->get('username');
    //    //dd($current_user);   
    //    if(Hash::check($request->old_password,$current_user->password))
    //    {
    //    // dd($current_user->password);   
    //         $current_user->update([
    //             'password'=> bcrypt($request->new_password)
    //         ]);

    //         return redirect('/')->with('success','Password successfully updated.');

    //    }else{
    //        return redirect()->back()->with('error','Old password does not matched.');
    //    }
}
}
