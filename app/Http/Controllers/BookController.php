<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\BookModel;


class BookController extends Controller
{


    protected $users;

    public function __construct(Books $users)
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
        return view('admin.addbooks');
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
            'name'=>'required',
            'author'=>'required',
            'lang'=>'required',
            'prize'=>'required',
            'pages'=>'required',
            'description'=>'required',
            'quan'=>'required',
           
            ]);
        

        $name=$request->input('name');
        $author =$request->input('author');
        $lang =$request->input('lang');
        $prize =$request->input('prize');
        $pages = $request->input('pages');
        $description = $request->input('description');
        $quan = $request->input('quan');


        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

           $data=array("name"=>$name,"author"=>$author,"language"=>$lang,"prize"=>$prize,"pages"=>$pages,"description"=>$description,"quan"=>$quan,"image"=>$imageName);  
           $inser=$this->users->inser($data);
           //return $inser;
          // dd( $this->users);
         // echo $data;
         //return view("admin.addbooks");

        return redirect("book")->with('success','Add book successfuly');

         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        
        $data=$this->users::where('book_id',$id)->first(); //select all data and read one data

        return view('admin.editbook',['data'=>$data]);    
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
     
        

        $name=$request->input('name');
        $author =$request->input('author');
        $lang =$request->input('lang');
        $prize =$request->input('prize');
        $pages = $request->input('pages');
        $description = $request->input('description');
        $quan = $request->input('quan');

        // $imageName=$request->file('img');
        // if ($imageName == null) {
        //     $filename=rand(). '.'.$imageName->extension();
        //     $img->move(public_path('images'), $imageName);
        //     $data=array(
        //         'image'=>$filename
        //     );
        //     $dataid->fill($data)->save();
        // }

         $imageName = time().'.'.$request->image->extension();  
   
         $request->image->move(public_path('images'), $imageName);



        //  if (file_exists(public_path($imageName =  $request->extension()))) 
        //  {
        //      unlink(public_path($imageName));
        //  };


    // if ( $this->users::exists($imageName)) {
    //     //File::delete($image_path);
    //     unlink($imageName);
    // }




           $data=array("name"=>$name,"author"=>$author,"language"=>$lang,"prize"=>$prize,"pages"=>$pages,"description"=>$description,"quan"=>$quan,"image"=>$imageName);  
           $this->users->where('book_id',$id)->update($data);
         // echo $data;
         //return view("admin.addbooks");

        return redirect("viewbook")->with('updsuccess','Your book Updated Successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->users::where('book_id',$id)->delete(); //delete 

        return redirect('viewbook')->with('delsuccess','Data successfuly Deleted');
    }
}
