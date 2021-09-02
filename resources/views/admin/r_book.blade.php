@extends('admin.masters')

@include('admin.menu')


@include('admin.header')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Returned books</h3>
             
            </div>
       
            <div class="card-body">
            @if(Session::has('rupdsuccess'))
        <div class="alert alert-success">
        
        <strong role="alert" class="">{!! Session::get('rupdsuccess') !!}</strong>
        
        </div>
     

        @endif
              <div id="typography">
                
                <div class="row">

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

                                        
                                       @foreach($oderhistory as $row)
                                        
                                       <!-- <form action='{{url("/r_book_up")}}' method="post">
                                        @csrf -->
                                            <tr>
                                            <td><img style="width: 60px; height: 60px;" src="{{ route('images.displayImage',$row->image) }}" alt="" title=""></td>
                                            <td><input type="text" name="book_name" value="{{ $row->name }}" style="border: none; width: 280px"></td>
                                            <input type="hidden" name="book_id" value="{{ $row->book_id }}" style="border: none; width: 280px">
                                            <input type="hidden" name="quan" value="{{ $row->quan }}" style="border: none; width: 280px">

                                                <td><input type="text" name="u_name" value="{{ $row->u_name }}"  style="border: none; width: 100px;"></td>
                                                <!-- <td>{{ $row->quan }}</td> -->

                                                
                                                
                                               
                                               
                                               
                                                <td><input type="text" name="c_data" value="{{$row->created_at}}" style="border: none; width: 88px" ></td>

                                                <td><input type="text" name="r_date"  value="{{$row->r_date}}" style="border: none; " >
                                                
                                                
                                                </td>

                                                <td><a href='{{ url("Editrbook/{$row->o_id}")}}'  class="btn btn-dm btn-warning">Submit</a></td>
</td>
                                                

                                            
                                            </tr>
                                            <!-- </form> -->
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    
                                    <center>
                                    <span>
                                    {{ $oderhistory ->links() }}



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
          </div>
        </div>
      </div>
      @include('admin.footer')
</body>

</html>