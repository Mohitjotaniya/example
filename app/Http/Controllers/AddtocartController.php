<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Books;
use Validator;







class AddtocartController extends Controller
{

    protected $users;

    public function __construct(Carts $users)
    {
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$addcart=addtocartModel::paginate(3);
        //return view('frontend.book-media-list-view',['addcart'=>$addcart]);
        return view('frontend.book-media-list-view');
    }

    // public function cartList()
    // {
    //     $cartItems = addtocartModel::getContent();
    //     // dd($cartItems);
    //     return view('cart', compact('cartItems'));
    // }
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
       

        $u_id=$request->input('u_id_i');
        $book_id=$request->input('book_id');
        $name=$request->input('name');
        $author =$request->input('author');
        
        
        $quan = $request->input('quan');
        $prize = $request->input('prize');



           $data=array("book_id"=>$book_id,"u_id"=>$u_id,"name"=>$name,"author"=>$author,"quan"=>$quan ,"prize"=>$prize);  
           $inser=$this->users->inser($data);    
            $users = Carts::select('u_id')->WHERE('u_id',$u_id)->get();
            
            
            $request->session()->put('cart',count($users));
            $request->session()->put('dataofcart',count($data));


            Books::where('book_id',$book_id)->update([
                'quan' => $request->input('quan')-1
            ]);

         

         return redirect("/book_view")->with('success','Add book successfuly');

      
         }
         

       
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $addcart=$this->users->show(); 
        return view('frontend.headersection',['addcart'=>$addcart]);
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











    

//API IN LARAVEL

    public function addtocart(Request $request)
    {


        $validator = Validator::make($request->all(), [
            
            'u_id' => 'required',
            'book_id' => 'required',
            
        ]);
      
      

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }


        $bookdata= Books::where('book_id', $request->book_id)->get();
        
foreach ($bookdata as  $book) {
    $name= $book->name;
    $author= $book->author;
    $quan= $book->quan;
    $prize= $book->prize;
  }

  $u_id=$request->input('u_id');
  $book_id=$request->input('book_id');

  $data=array("book_id"=>$book_id,"u_id"=>$u_id,"name"=>$name,"author"=>$author,"quan"=>$quan ,"prize"=>$prize);  


  $inser=$this->users->inser($data); 
if($inser){
        return response()->json([
            'message' => 'Book Add sucssfully',
          
        ], 201);
    }
    else{
        return response()->json([
            'message' => 'User gjghjghjghj registered',
           
        ], 201);
    }
    }

    public function apishow()
    {
        return $addcart=$this->users->show(); 
    }
}
