@extends('admin.masters')

@include('admin.menu')


@include('admin.header')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Edit User</h3>
             
            </div>
           
             
                
                
       
                                                <form action="{{ url ('Update_u',array($data->u_id))}}"   method="POST" enctype="multipart/form-data" >
                                                 @csrf
   
                                                <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Name
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="text" name="fname"style=" border-color:#000000;"
                                                                value="{{ $data->u_name }}" 
                                                                   
                                                                    class="form-control" id="fname">
                                                              
                                                                @if($errors->any('fname'))
		  <span class="text-danger">{{$errors->first('fname')}}</span>
		@endif
                                                            </div>
                                                          
                                                            <div class="col-sm-3">
                                                                <input type="text" name="lname"style=" border-color:#000000;" 
                                                                value="{{ $data->lname }}" 

                                                                    id="lname" class="form-control">
                                                                lastname
                                                                @if($errors->any('lname'))
		  <span class="text-danger">{{$errors->first('lname')}}</span>
		@endif
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Email
                                                                <input type="email" style="width: 120%; border-color:#000000;"
                                                                    value="{{ $data->email }}" 
                                                                    name="em" data-bvalidator="required" id="email"
                                                                    class="form-control" />
                                                                <span id="availability"></span>
                                                                @if($errors->any('em'))
		  <span class="text-danger">{{$errors->first('em')}}</span>
		@endif
                                                            </div>
                          
                                                        </div><br>

                                                        <!-- <div class="row">
                                                            <div class="col-sm-4">
                                                                Password<input type="password" style="width: 120%; " class="form-control"
                                                                 name="pass"
                                                                    >
                                                            </div>
            
                                                        </div>
                                                        @if($errors->any('password'))
		  <span class="text-danger">{{$errors->first('password')}}</span>
		@endif<br>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Confirm Password<input type="password"
                                                                    style="width: 120%; border-color:#000000;" id="new_pass2" name="cpass"
                                                                    data-bvalidator="equal[new_pass1],required"
                                                                    data-bvalidator-msg-equal="Please enter the same password again"
                                                                    class="form-control">
                                                            </div>
                                                        </div><br> -->
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Mobail Number
                                                                <input type="number"  value="{{ $data->phone }}"   style="width: 120%; background-color: rgb(255, 255, 255); border-color:#000000; " 
                                                                    name="code" class="form-control">
                                                            </div>
            
                                                        </div>
                                                        @if($errors->any('code'))
		  <span class="text-danger">{{$errors->first('code')}}</span>
		@endif<br>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Birthdate<br><input type="date" value="{{$data->bod}}"  style="width: 120%; background-color: rgb(255, 255, 255); border-color:#000000;"
                                                                    name="bod"
                                                                   
                                                                    id="datepicker" 
                                                                    class="form-control">
                                                            </div>
                   
                                                        </div>
                                                        @if($errors->any('bod'))
		  <span class="text-danger">{{$errors->first('bod')}}</span>
		@endif
                     

                                                   

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Address<input type="text" value="{{ $data->address }}" 
                                                                    
                                                                    style="width: 120%; border-color:#000000;" id="address" name="add"
                                                                    data-bvalidator="required"
                                                                    class="form-control">
                                                            </div>
                    
                                                        </div>     
                                                        @if($errors->any('add'))
		  <span class="text-danger">{{$errors->first('add')}}</span>
		@endif<br>                             
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select name="cou"   
                                                                    class="form-control" id="cn"
                                                              >
                                                                    <option value="{{ $data->city }}">{{ $data->city }}</option>
                                                                    <option value="Gujarat  "> Gujarat</option>
                                                                    <option value="mumbai"> mumbai</option>
                                                                    <option value="up"> up</option>

                                                                   

                                                                </select>
                                                                Country<br> 
                                                                @if($errors->any('cou'))
		  <span class="text-danger">{{$errors->first('cou')}}</span>
		@endif<br> 
                                                            </div>
                                                            </div><br>    
                                                            
                                                            
                                                            <div class="row">
                                                            <div class="col-sm-6">
                                                                <select name="city" 
                                                                    class="form-control" id="cn" 
                                                              >
                                                                    <option value="{{ $data->county }}">{{ $data->county }}</option>
                                                                    <option value="rajkot"> rajkot</option>
                                                                    <option value="surat"> surat</option>
                                                                    <option value="div"> div</option>
                                                                    


                                                                   

                                                                </select>
                                                                Country<br> 
                                                                @if($errors->any('cou'))
		  <span class="text-danger">{{$errors->first('cou')}}</span>
		@endif<br> 
                                                            </div>
                                                            </div><br> 
                                                            <!-- <div class="row">
                                                            <div class="col-sm-">
                                                                <select name="city" style=" border-color:#000000;    border: 3px solid #000000;"
                                                                    class="form-control" id="cn"
                                                              >
                                                                    <option style=" border-color:#000000;" value="">Please Select</option>
                                                                    <option value="fhfdhhdfhdf"> fhfdhhdfhdf</option>
                                                                   

                                                                </select>
                                                                Country<br> 
                                                                @if($errors->any('cou'))
		  <span class="text-danger">{{$errors->first('cou')}}</span>
		@endif<br> 
                                                            </div>


                                                            </div>

                                                            </select>
               
                                                        </div><br>                               -->
                                                       
                                                        
                

                                                        <button type="submit"  name="submit" class="btn btn-default">Submit</button>
                                                    

                                                    </div>

                                            </div>
                                            </form>
                  
                  
   
           
          </div>
        </div>
      </div>
      @include('admin.footer')
</body>

</html>