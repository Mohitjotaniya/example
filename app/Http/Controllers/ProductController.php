<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Carts;
use Validator;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show()
    {
        return Books::paginate(5);
    }

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


        $user = Carts::create($data);
if($user){
        return response()->json([
            'message' => 'User Add sucssfully',
          
        ], 201);
    }
    else{
        return response()->json([
            'message' => 'User gjghjghjghj registered',
           
        ], 201);
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
