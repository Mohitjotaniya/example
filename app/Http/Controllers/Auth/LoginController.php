<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
       
    //     $this->middleware('guest:writer')->except('logout');
    // }
    

    // public function login(Request $request)
    // {  
    //     $inputVal = $request->all();
   
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
   
    //     if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
    //         if (auth()->user()->is_admin == 1) {
    //             return redirect()->route('/Admin/Deshbord');
    //         }else{
    //             return redirect()->route('/Admin');
    //         }
    //     }else{
    //         return redirect()->route('u_login')
    //             ->with('error','Email & Password are incorrect.');
    //     }     
    // }
    // public function showWriterLoginForm()
    // {
    //     return view('auth.login', ['url' => 'writer']);
    // }

    // public function adminLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/admin');
    //     }
    //     return back()->withInput($request->only('email', 'remember'));
    // }
    // public function writerLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     if (Auth::guard('writer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

    //         return redirect()->intended('/writer');
    //     }
    //     return redirect('/')->withInput($request->only('email', 'remember'));
    // }
}
