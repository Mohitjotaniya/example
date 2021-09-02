@extends('admin.masters')

@include('admin.menu')


@include('admin.header')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Borrowed Books Order History</h3>
             
            </div>
            <br>

            
            <div class="card-body">
              <div id="typography">
               
             
              <form method="get" action="{{ url('b_book_o_h')}}" >
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <b>NAME SARECH</b>&nbsp;&nbsp;<input type="text"  name="name">
           
         <input type="submit" name="submit"  />
         <!-- <input type="submit" name="submit" />  -->
   
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       

          
         

         
        
         
          

        
        <br>
        <br>
        <div class="col-md-11 text-right"><a href='{{ url("/excel")}}' name="export" class="btn btn-primary" >Export Excel</a> </div>
                <div class="row">
                <table class="table" method="post">
                                        <thead class=" text-primary">
                                            <tr>
                                            <th>image</th>
                                            <th>@sortablelink('book_id')</th> 
                                            <th>@sortablelink('USER NAME')</th>

                                                <th>@sortablelink('name')</th>
                                               
                                                <th>@sortablelink('Prize') </th>
                                                
                                              
                                                <th>@sortablelink('DATE')</th>
                                               
                                                
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                        
                                       @foreach($oderhistory as $row)
                                        
                                        
                                            <tr>
                                            <td><img style="width: 100px; height: 100px;" src="{{ route('images.displayImage',$row->image) }}" alt="" title=""></td>

                                                <td>{{ $row->book_id }}</td>
                                                <td>{{ $row->u_name }}</td>
                                                <td>{{ $row->name }}</td>
                                              
                                                <td>{{ $row->prize }}</td>
                                               
                                               
                                                <td>{{date('d/m/Y - H:i', strtotime($row->created_at))}}</td>


                                                <td>
                                                

                                            
                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                    </table>
         
 
<!--                   
                @foreach($oderhistory as $view)
                                        
                                        
                                        <tr>
                                        <td><img style="width: 100px; height: 100px;" src="{{ route('images.displayImage',$view->image) }}" alt="" title=""></td>
                                            <td>{{ $view->name }}</td>
                                           
                                            <td>{{ $view->language }}</td>
                                            <td>{{ $view->prize }}</td>
                                            <td>{{date('d/m/Y - H:i', strtotime($view->created_at))}}</td>
                                            
                                           
                                                                                          

                                            <td>
                                            
                                           

                                        
                                        </tr>
                                    
                                        @endforeach
                 
                 -->
                 
                 
                  
                  
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
      @include('admin.footer')
</body>

</html>