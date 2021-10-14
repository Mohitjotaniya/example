<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writers;
use App\Models\User;
use Auth;
use Hash;
use Str;
use Validator;
use App\Writer;


// use App\Writer;


class SigninController extends Controller
{
    public function __construct(Writers $users)
        {

            $this->users = $users;

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
           $inser=$this->users->inser($data);  
          // Writers::create($data); 
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





// API IN LARAVEl

public function register(Request $request) {
    $validator = Validator::make($request->all(), [
        'u_name' => 'required',
        'lname' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
        'phone' => 'required',
        'bod' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'city' => 'required',
        'county' => 'required',


        
    ]);
   


    // if($validator->fails()){
    //     return response()->json($validator->errors()->toJson(), 400);
    // }

  
//     $u_name=$request->input('u_name');
//     $lname =$request->input('lname');
//     $email =$request->input('email');
//     $password =$request->input('password');
//     $password1 = Hash::make($password);
//     $phone =$request->input('phone');

//     $bod = $request->input('bod');
//     $gender = $request->input('gender');
//     $address = $request->input('address');
//     $county = $request->input('county');
// $city = $request->input('city');


//        $data=array("u_name"=>$u_name,"lname"=>$lname,"email"=>$email,"password"=>$password1,"phone"=>$phone,"bod"=>$bod,"gender"=>$gender,"address"=>$address,"city"=>$city,"county"=>$county);  
//        $inser=$this->users->inser($data);  
if ($validator->fails())
    {
        return response(['errors'=>$validator->errors()->all()], 422);
    }
    $request['password']=Hash::make($request['password']);
    $request['remember_token'] = Str::random(10);
    $user = Writers::create($request->toArray());
    $token = $user->createToken('Laravel Password Grant Client')->accessToken;
    $response = ['token' => $token];
    //return response($response, 200);

    return response()->json([
        'message' => 'User successfully registered',
        'user' => $user
    ], 201);

}


public function Apiupdate(Request $request,$id){
        
    $validator = Validator::make($request->all(), [
        'u_name' => 'required|string|between:2,100',
        'lname' => 'required|string|between:2,100',
        'email' => 'required|string|email|max:100|unique:users',
        'password' => 'required|',
        'phone' => 'required',
        'bod' => 'required|date',
        'gender' => 'required',
        'address' => 'required',
        'city' => 'required',
        'county' => 'required',


        
    ]);
    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }
//$id= Auth::guard('writer');

   // $product = Writers::find($id);
    $product=Writers::where('u_id', $id)->update(array_merge(
        $validator->validated(),
        ['password' => bcrypt($request->password)]
    ));
    $response = ['message' => 'You have been successfully Update out!'];
    return response($response, 200);
    //dd($product);
    //return $product;


    //return response()->json(auth()->user());
}


public function login (Request $request) {

    $validator = Validator::make($request->all(), [
       
        'email' => 'required|string|email|max:100|unique:users',
        'password' => 'required',
        

        
    ]);
    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }
    $user= Writers::where('email', $request->email)->first();
   // dd( $user);
    
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }
      

         $token = $user->createToken('my-app-token')->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token
        ];
    
         return response($response, 201);
}


public function logout (Request $request) {
    $user = Auth::user()->createToken();
    $user->revoke();
    return 'logged out';
}

}
