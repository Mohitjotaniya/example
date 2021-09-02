@extends('admin.masters')

@include('admin.menu')


@include('admin.header')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">ADD BOOKS</h3>
             
            </div>
            <div class="card-body">
              <div id="typography">
                
                <div class="row">
    
                @foreach($return as $row)
               <form action="{{ url ('Update_r',array($row->o_id))}}" method="post">
               @csrf
                  <table class="table" method="post" action="r_book_mang">
                                        <thead class=" text-primary">
                                            <tr>
                                            <th>image</th>
                                            <th>@sortablelink('name')</th>
                                            <th>@sortablelink('USER NAME')</th>
                                            <!-- <th>@sortablelink('quan')</th> -->

                                               
                                               
                                                
                                                
                                              
                                                <th>@sortablelink('DATE')</th>
                                                <th>@sortablelink(' Returned DATE')</th>
                                                <th>@sortablelink(' Action')</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                        
                                     
                                        
                                       <!-- <form action='{{url("/Update_r")}}' method="post">
                                        @csrf -->
                                            <tr>
                                            <td><img style="width: 60px; height: 60px;" src="{{ route('images.displayImage',$row->image) }}" alt="" title=""></td>
                                            <td>{{ $row->name}}</td>
                                            <input type="hidden" name="book_id" value="{{ $row->book_id }}" style="border: none; width: 280px">
                                            <input type="hidden" name="quan" value="{{ $row->quan }}" style="border: none; width: 280px">

                                                <td>{{ $row->u_name }}</td>
                                                <!-- <td>{{ $row->quan }}</td> -->

                                                
                                                
                                               
                                               
                                               
                                                <td><input type="text" name="c_data" value="{{$row->created_at}}" style="border: none; width: 88px" ></td>

                                                <td><input type="date" name="r_date"  value="{{$row->r_date}}" style="border: none; " >
                                                
                                                
                                                </td>

                                                <td><button type="submit" class="btn btn-primary">Submit</button></td>
</td>
                                                

                                            
                                            </tr>
                                            <!-- </form> -->
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                </form>
                 
                
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.footer')
</body>

</html>