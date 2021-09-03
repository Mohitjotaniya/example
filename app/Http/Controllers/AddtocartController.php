<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\BookModel;
use App\Models\Books;






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
           $this->users::create($data); 
         //  dd($data);
    //        if (  addtocartModel::create($data)) {
    //         return redirect("/book_view")->with('success','Add book successfuly');
    //     } else {
    //         return redirect("/book_view")->with('success','Add book successfuly');
    // }

            //$addcart=addtocartModel::paginate(3);
            $users = Carts::select('u_id')->WHERE('u_id',$u_id)->get();
            // dd(count($users));
            
            $request->session()->put('cart',count($users));
            $request->session()->put('dataofcart',count($data));


            Books::where('book_id',$book_id)->update([
                'quan' => $request->input('quan')-1
            ]);

            // dd($request->session()->get('cart'));
            //dd($users);
            //$request->session()->get('cart', $users);
            //dd( $request->session());
          // $d='SELECT u_id, COUNT(*) FROM addtocartModel WHERE u_id=1';

           //dd($users);
           // dd( $this->users);
         // echo $data;
         //return view("admin.addbooks");

        

         return redirect("/book_view")->with('success','Add book successfuly');

      
         }
         

        //  public function updateCart(Request $request)
        //  {
        //      \data::update(
        //          $request->book_id,
        //          [
        //              'quantity' => [
        //                  'relative' => false,
        //                  'value' => $request->quantity
        //              ],
        //          ]
        //      );
        //      session()->flash('success', 'Item Cart is Updated Successfully !');

        // return redirect("/book_view");
        //     }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $addcart= $this->users::paginate(3);
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
}
