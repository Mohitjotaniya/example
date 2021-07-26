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
                

              <div class="card-body">

@if(Session::has('success'))
        <div class="alert alert-success">
        
        <strong role="alert" class="">{!! Session::get('success') !!}</strong>
        
        </div>
     

        @endif
        

                <div class="row">
                  
 

<div class="container">
 
  <form action="{{ url('book')}}" method="post" enctype="multipart/form-data">
   @csrf
    <div class="form-group">
      <label for="email">BOOK NAME:</label>
      <input type="text" class="form-control" id="email"name="name" value="">
    </div>
    	@if($errors->any('name'))
		  <span class="text-danger">{{$errors->first('name')}}</span>
		@endif
    <div class="form-group">
      <label for="pwd">BOOK Author:</label>
      <input type="text" class="form-control" id="pwd"  name="author">
    </div>
    @if($errors->any('author'))
		  <span class="text-danger">{{$errors->first('author')}}</span>
		@endif
    <div class="form-group">
      <label for="pwd">BOOK Language:</label>
      <input type="text" class="form-control" id="pwd"  name="lang">
    </div>
    @if($errors->any('lang'))
		  <span class="text-danger">{{$errors->first('lang')}}</span>
		@endif
    <div class="form-group">
      <label for="pwd">BOOK Prize:</label>
      <input type="number" class="form-control" id="pwd"  name="prize">
    </div>
    @if($errors->any('prize'))
		  <span class="text-danger">{{$errors->first('prize')}}</span>
		@endif
    <div class="form-group">
      <label for="pwd">BOOK Pages:</label>
      <input type="number" class="form-control" id="pwd"  name="pages">
    </div>
    @if($errors->any('pages'))
		  <span class="text-danger">{{$errors->first('pages')}}</span>
		@endif
    <div class="form-group">
      <label for="pwd">BOOK Description:</label>
      <input type="text" class="form-control" id="pwd"  name="description">
    </div>
    @if($errors->any('description'))
		  <span class="text-danger">{{$errors->first('description')}}</span>
		@endif
    <div class="form-group">
    <label for="quantity">Quantity (between 1 and 5):</label>
  <input type="number"class="form-control" id="quantity" name="quan" min="1" max="10">
  </div>
  @if($errors->any('quan'))
		  <span class="text-danger">{{$errors->first('quan')}}</span>
		@endif
  <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

    <br> <br>
    <button type="submit"  name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.footer')
<!-- </body>

</html> -->