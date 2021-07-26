<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\viewbookModel;
//use Illuminate\support\facades\DB;
class viewbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = DB::table('add_book')->orderBy('name', 'asc')->paginate(5);

         $users=viewbookModel::sortable()->paginate(5);
           return view('admin.viewbook',['users'=>$users]);
         
          // return view('admin.viewbook');

         //}

        
  
// $users=viewbookModel::paginate();
//   return view('admin.viewbook',['users'=>$users]);

    # code...



//         $users=viewbookModel::paginate(5);

        
      
// return view('admin.viewbook',['users'=>$users]);
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
    public function show(Request $request)
    {

        
			if (isset($_GET['submit'])) {

                $select=$request->select;
                $search=$request->search;
                
          
         $users=viewbookModel::sortable()->where('name','LIKE','%'.$search.'%')->paginate($select );
        //dd($users);
           return view('admin.viewbook',['users'=>$users]);
         
             # code...
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
    public function getPubliclyStorgeFile($filename)

{
    $path = storage_path('app/public/images/'. $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

    return $response;

}	
}
