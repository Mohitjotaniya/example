<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Carts;
use App\Models\Books;
use App\Models\Writers;
use Validator;



use App\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use PDF;
use Dompdf\Dompdf; 

//use Mail;




class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $useredit=$request->session()->get('username');

        $result = Writers::where('u_id',$request->session()->get('username')->u_id)->first();

        $oderview=Order::all();
        return view('frontend.checkout',['useredit'=>$result]);

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
        

    

        $u_id = $request->session()->get('username')->u_id;
        $allcart = Carts::where('u_id',$u_id)->get();


        foreach($allcart as $cart)
        {

        $order = new Order();
        $order->book_id = $cart['book_id'];
        $order->u_id = $cart['u_id'];
        $order->b_sum =$request->input('b_sum');
        // $order->status = 'Pendding';
        // $order->payment_method = $r->input('payment');
        $order->save();

        }
        $result = Carts::where(['u_id'=> $u_id])->delete();



         $this->email =$request->input('email');
         //dd($this->email);
             $u_id =$request->input('u_id');
        $b_name =$request->input('b_name');
        $b_prize =$request->input('b_prize');
        $b_sum =$request->input('b_sum');
        
        $data=array("u_id"=>$u_id,"b_name"=>$b_name,"b_prize"=>$b_prize,"b_sum"=>$b_sum);  
        //require_once __DIR__ . '/vendor/autoload.php';
        // $attechfiles =
        //     public_path('/home/mohit_jotaniya/htdocs/example/pdf/jotaniyamohit6259@gmail.com.pdf');
            
        
        // Create an instance of the class:
        $mpdf = new \Mpdf\Mpdf();
        
        // Write some HTML code:
        $mpdf->WriteHTML('hello');
        $path='/home/mohit_jotaniya/htdocs/example/pdf';
        // Output a PDF file directly to the browser
        $mpdf->Output(''.$path.'/'. $this->email.'.pdf');
        //Mail::to($email)->send(new SendMail($data));
        Mail::send('dynamic_email_template',compact('data'), function($message) use ($mpdf){
            $message->from('jotaniyamohit6259@gmail.com');
            $message->to( $this->email);
            // $message->subject('you Invoice');
            //Attach PDF doc
            $message->attachData($mpdf->Output('F'),'customer.pdf');
        });
        
     

            
           
           return redirect("/user_oder_view")->with('success','Add book successfuly');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $u_id = $request->session()->get('username')->u_id;
   


    $oderview = Order::join('writers', 'orders.u_id', '=', 'writers.u_id')
    ->join('books', 'orders.book_id', '=', 'books.book_id')
    ->select('writers.*','books.*','orders.*')
    ->where('orders.u_id',$u_id)
    ->get();
    
       // $oderview=orderModel::all()->where('u_id',$u_id);
        return view('frontend.user_order_view',['oderview'=>$oderview]);
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
    public function pdf(Request $request)
    {
        $u_id = $request->session()->get('username')->u_id;
       
    
    
        $oderview = Order::
        join('writers', 'orders.u_id', '=', 'writers.u_id')
        ->join('books', 'orders.book_id', '=', 'books.book_id')
        ->select('writers.*','books.*','orders.*')
      
        ->where('orders.u_id',$u_id)
        ->get();
       
           // $oderview=orderModel::all()->where('u_id',$u_id);
           // return view('frontend.user_order_view',['oderview'=>$oderview]);
        $pdf = PDF::loadView('page',['oderview'=>$oderview]);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf', 'D');
        // $mpdf = new \Mpdf\Mpdf();
        // $mpdf->SetDisplayMode('fullpage');
        // $mpdf->Output('prueba.pdf', 'D');

    }



    //API LARAVEl

    public function order(Request $request)
    {

         
        $validator = Validator::make($request->all(), [
            
            'u_id' => 'required',
           
            
        ]);
         if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $u_id=$request->input('u_id');

        $allcart = Carts::where('u_id',$u_id)->get();
        $sum = Carts::where('u_id',$u_id)->sum('prize');


        foreach($allcart as $cart)
        {

        $order = new Order();
        $order->book_id = $cart['book_id'];
        $order->u_id = $cart['u_id'];
        $order->b_sum =$sum;
        // $order->status = 'Pendding';
        // $order->payment_method = $r->input('payment');
        $order->save();

        }
        $result = Carts::where(['u_id'=> $u_id])->delete();

        return response()->json([
            'message' => 'order successfuly Add',
           
        ], 201);
       
       
    }
}
