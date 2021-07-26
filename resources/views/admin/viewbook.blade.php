@extends('admin.masters')

@include('admin.menu')


@include('admin.header')

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                        <br>  <br>  <br>  <br>
                            <div class="card shadow-lg border-0 rounded-lg mt-5" style="padding:15px !important">
                            <div class="card-header card-header-primary">
                  <h3 class="card-title ">BOOK MENGMENT TABLE</h3>
                  
                </div>




                                
                       
                          


                            <div class="card-body">

                            @if(Session::has('delsuccess'))
                                    <div class="alert alert-success">
                                    
                                    <strong role="alert" class="">{!! Session::get('delsuccess') !!}</strong>
                                    
                                    </div>
                                 

                                    @endif
                                    


                                    @if(Session::has('updsuccess'))
                                    <div class="alert alert-success">
                                    
                                    <strong role="alert" class="">{!! Session::get('updsuccess') !!}</strong>
                                    
                                    </div>
                                 

                                    @endif
                                    

                                    
                                    <form method="get" action="{{ url('view_book_page')}}" >
          <br>

          show
          <select name="select" value="{{request()->query('select')}}">
            <option value="5" >5</option>
            <option value="10" >10</option>
            <option value="20">20</option>
            <option value="50" >50</option>
          </select>entries  
          
         <!-- <input type="submit" name="submit" />  -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
         

         
          <input type="text"  name="search" placeholder="Search for names.." value="{{request()->query('search')}}" title="Type in a name">
         
          <input type="submit" name="submit"  />

        
        <br>
        <br>

                                <div class="table-responsive">
                                <table class="table" method="post">
                                        <thead class=" text-primary">
                                            <tr>
           
                                            <th>@sortablelink('book_id')</th> 
                                                <th>@sortablelink('name')</th>
                                                <th>@sortablelink('author')</th>
                                                <th>@sortablelink('language') </th>
                                                <th>@sortablelink('Prize') </th>
                                                <th>@sortablelink('pages')</th>
                                                <th>@sortablelink('description')</th>
                                                <th>@sortablelink('quan')</th>
                                                <th>image</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                        
                                       @foreach($users as $row)
                                        
                                        
                                            <tr>
                                                <td>{{ $row->book_id }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->author }}</td>
                                                <td>{{ $row->language }}</td>
                                                <td>{{ $row->prize }}</td>
                                                <td>{{ $row->pages }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td>{{ $row->quan }}</td>
                                                <td><img style="width: 100px; height: 100px;" src="{{ route('images.displayImage',$row->image) }}" alt="" title=""></td>
                                               

                                                <td>
                                                
                                                <a href='{{ url("delete/{$row->book_id}")}}' class="btn btn-dm btn-danger" onclick="return confirm('Are You sure to Delete Data')">delete</a>|
                                                <a href='{{ url("Editbook/{$row->book_id}")}}' class="btn btn-dm btn-info">Edit</a></td>

                                            
                                            </tr>
                                        
                                        @endforeach
                                        </tbody>
                                    </table>
<center>
                                    <span>
                                    {{ $users->appends(Request::except(' $users'))->links() }}



</span>
</center>
<style>
    .w-5{
       
        width: 25px;
        margin: auto;
    }
    </style>
                                </div>
                            </div>
                        </div>
                    
            </main>
        </div>
        
        </form>
        </div>  </div>
@include('admin.footer')
</body>

</html>