<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Auth\SessionGuard;
use App\Models\Writers;
use App\Models\User;
use Hash;
use Str;

use Validator;

class ApiController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register','userProfile','update']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function login(Request $request){
    //     $credentials = $request->only('email', 'password');

    //     try {
    //         if (! $token = Auth::guard('writer')->attempt($credentials)) {
    //             return response()->json(['error' => 'invalid_credentials'], 400);
    //         }
    //     } catch (Exception $e) {
    //         return response()->json(['error' => 'could_not_create_token'], 500);
    //     }
    //     return response()->json([
    //         'message' => 'User successfully login',
    //         'user' => $credentials=$request->only('email')
    //     ], 201);
       
    // }
    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = Writers::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }
    }
// public function login(Request $request)
// {
//     $user= Writers::where('email', $request->email)->first();
    
//     // print_r($data);
//         if (!$user || !Hash::check($request->password, $user->password)) {
//             return response([
//                 'message' => ['These credentials do not match our records.']
//             ], 404);
//         }
//         $token = $user->createToken('Laravel Password Grant Client')->accessToken;

//         //  $token = $user->createToken('my-app-token')->plainTextToken;
        
    
//         $response = [
//             'user' => $user,
//             'token' => $token
//         ];
    
//          return response($response, 201);
// }
    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'u_name' => 'required|string|between:2,100',
            'lname' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'phone' => 'required',
            'bod' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'county' => 'required',


            
        ]);
       
  

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = Writers::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

    // public function show()
    //  {
    //     return userloginModel::paginate(5);
    // }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return Writers::paginate(5);
        // return response()->json(auth()->user());
    }
    public function update(Request $request,$id){
        
        $validator = Validator::make($request->all(), [
            'u_name' => 'required|string|between:2,100',
            'lname' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            
            'phone' => 'required',
            'bod' => 'required',
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
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
   
}
