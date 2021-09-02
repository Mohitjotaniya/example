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
                                    

                                    
                                    <form method="get" action="{{ url('date_user')}}" >
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <b>FIEST DATE</b>&nbsp;&nbsp;<input type="date"  name="fdate">
           
          
         <!-- <input type="submit" name="submit" />  -->
   
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       

          
         

         
         <b>LAST DATE <b>&nbsp;&nbsp; <input type="date"  name="ldate" >
         
          <input type="submit" name="submit"  />

        
        <br>
        <br>
        <div class="col-md-11 text-right"><a href='{{ url("/exceldate")}}' name="export" class="btn btn-primary" >Export Excel</a> </div>


                                <div class="table-responsive">
                                <table class="table" method="post">
                                        <thead class=" text-primary">
                                            <tr>
           
                                            <th>@sortablelink('id')</th> 
                                                <th>@sortablelink('name')</th>
                                                <th>@sortablelink('bookname')</th>
                                                <th>@sortablelink('date') </th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                        
                                     
                                        
                                        @foreach($return as $row)
                                        
                                        
                                        <tr>
                                            <td>{{ $row->book_id }}</td>
                                            <td>{{ $row->u_name }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->created_at }}</td>
                                           
                                          

                                        
                                        </tr>
                                    
                                        @endforeach
                                        
                                          
                                        </tbody>
                                    </table>
                                    
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