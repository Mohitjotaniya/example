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
                  <h3 class="card-title ">USER MENGMENT TABLE</h3>
                  
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
                                    

                                    
                                    <form method="get" action="{{ url('user_man_view')}}" >
          <br>

          show
          <select name="select" >
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
                                <table class="table" method="post" style="width: 1%";>
                                @if ($users->count() == 0)
        <tr>
            <td colspan="5">No products to display.</td>
        </tr>
        @endif
                                        <thead class=" text-primary">
                                            <tr>
           
                                            <th>@sortablelink('u_id')</th> 
                                                <th>@sortablelink('u_name')</th>
                                                <th>@sortablelink('lname')</th>
                                                <th>@sortablelink('email') </th>
                                                <th>@sortablelink('phone') </th>
                                                <!-- <th>@sortablelink('bod')</th>
                                                <th>@sortablelink('gender')</th> -->
                                                <th>@sortablelink('address')</th>
                                                <th>@sortablelink('city')</th>
                                                <th>@sortablelink('county')</th>
                                               
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                        
                                       @foreach($users as $row)
                                        
                                        
                                            <tr>
                                                <td>{{ $row->u_id }}</td>
                                                <td>{{ $row->u_name }}</td>
                                                <td>{{ $row->lname }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <!-- <td>{{ $row->bod }}</td>
                                                <td>{{ $row->gender }}</td> -->
                                                <td>{{ $row->address }}</td>
                                                <td>{{ $row->city }}</td>

                                                <td>{{ $row->county }}</td>

                                               

                                                <td>
                                                
                                                <a href='{{ url("u_delete/{$row->u_id}")}}' class="btn btn-dm btn-danger" onclick="return confirm('Are You sure to Delete Data')">delete</a>|
                                                <a href='{{ url("u_Edit/{$row->u_id}")}}' class="btn btn-dm btn-info">Edit</a></td>

                                            
                                            </tr>
                                        
                                        @endforeach
                                        </tbody>
                                    </table>
<center>
                                    <span>
                                    {{  $users->appends(Request::except(' $users'))->links()  }}



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