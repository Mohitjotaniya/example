@include('frontend.headersection')
@include('frontend.master')

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Signin</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index-2.html">Home</a></li>
                <li>Signin</li>
            </ul>
        </div>
    </div>
</section>
<!-- End: Page Banner -->
<!-- Start: Cart Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="signin-main">
                <div class="container">
                    <div class="woocommerce">
                        <div class="woocommerce-login">
                            <div class="company-info signin-register">
                          
                                <div class="col-md-8 border-dark new-user">
                                    <div class="row">
                                        
                                            <div class="company-detail new-account bg-light margin-right">
                                                <div class="new-user-head">
                                                    <h2>Create New Account</h2>
                                                    <span class="underline left"></span>
                                                    <p>If no barcode has been assigned for your account, please contact
                                                        the library.</p>
                                                </div>

                                                @if(Session::has('success'))
        <div class="alert alert-success">
        
        <strong role="alert" class="">{!! Session::get('success') !!}</strong>
        
        </div>
     

        @endif
                                                <form action="{{ url('/register')}}"  method="POST" enctype="multipart/form-data" >
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
                                                                   
                                                                   
                                                                    class="form-control" id="fname">
                                                              
                                                                @if($errors->any('fname'))
		  <span class="text-danger">{{$errors->first('fname')}}</span>
		@endif
                                                            </div>
                                                          
                                                            <div class="col-sm-3">
                                                                <input type="text" name="lname"style=" border-color:#000000;"
                                                                   
                                                                    data-bvalidator="required,alpha, minlen[1],maxlen[10]"
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
                                                                   
                                                                    name="em" data-bvalidator="required" id="email"
                                                                    class="form-control" />
                                                                <span id="availability"></span>
                                                                @if($errors->any('em'))
		  <span class="text-danger">{{$errors->first('em')}}</span>
		@endif
                                                            </div>
                          
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Password<input type="password" style="width: 120%; border-color:#000000;"
                                                                 name="pass"
                                                                    >
                                                            </div>
            
                                                        </div>
                                                        @if($errors->any('pass'))
		  <span class="text-danger">{{$errors->first('pass')}}</span>
		@endif<br>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Confirm Password<input type="password"
                                                                    style="width: 120%; border-color:#000000;" id="new_pass2" name="cpass"
                                                                    data-bvalidator="equal[new_pass1],required"
                                                                    data-bvalidator-msg-equal="Please enter the same password again"
                                                                    class="form-control">
                                                            </div>
                                                        </div><br>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Mobail Number
                                                                <input type="number" style="width: 120%; background-color: rgb(255, 255, 255); border-color:#000000; " 
                                                                    name="code" class="form-control">
                                                            </div>
            
                                                        </div>
                                                        @if($errors->any('code'))
		  <span class="text-danger">{{$errors->first('code')}}</span>
		@endif<br>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Birthdate<br><input type="date" style="width: 120%; background-color: rgb(255, 255, 255); border-color:#000000;"
                                                                    name="bod"
                                                                   
                                                                    id="datepicker" data-bvalidator="required"
                                                                    class="form-control">
                                                            </div>
                   
                                                        </div>
                                                        @if($errors->any('bod'))
		  <span class="text-danger">{{$errors->first('bod')}}</span>
		@endif
                                                
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <br><input type="radio" value="male"
                                                                    
                                                                    name="g" id="mg" 
                                                                   >Male<br>
                                                                <input type="radio" value="female"
                                                                   
                                                                    name="g" id="fg">Female

                                                                </td><br>
                                                                @if($errors->any('g'))
		  <span class="text-danger">{{$errors->first('g')}}</span>
		@endif
                                                            </div>
              
                                                        </div><br>

                                                   

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                Address<input type="text"
                                                                    
                                                                    style="width: 120%; border-color:#000000;" id="address" name="add"
                                                                    data-bvalidator="required"
                                                                    class="form-control">
                                                            </div>
                    
                                                        </div>     
                                                        @if($errors->any('add'))
		  <span class="text-danger">{{$errors->first('add')}}</span>
		@endif<br>                             
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <select name="cou" 
                                                                    class="form-control" id="cn"
                                                              >
                                                                    <option value="">Please Select</option>
                                                                    <option value="fhfdhhdfhdf"> gujarat</option>
                                                                    <option value="fhfdhhdfhdf"> up</option>
                                                                    <option value="fhfdhhdfhdf"> bihar</option>
                                                                   

                                                                </select>
                                                                Country<br> 
                                                                @if($errors->any('cou'))
		  <span class="text-danger">{{$errors->first('cou')}}</span>
		@endif<br> 
                                                            </div>
                     
                                                            <div class="row">
                                                            <div class="col-sm-3">
                                                                <select name="city" style=" border-color:#000000;    border: 3px solid #000000;"
                                                                    class="form-control" id="cn"
                                                              >
                                                                    <option style=" border-color:#000000;" value="">Please Select</option>
                                                                    <option value="fhfdhhdfhdf"> rajkot</option>
                                                                    <option value="fhfdhhdfhdf"> surat</option>
                                                                    <option value="fhfdhhdfhdf"> Div</option>
                                                                   

                                                                </select>
                                                                Country<br> 
                                                                @if($errors->any('cou'))
		  <span class="text-danger">{{$errors->first('cou')}}</span>
		@endif<br> 
                                                            </div>


                                                            </div>

                                                            </select>
               
                                                        </div><br>                              
                                                       
                                                        </div><br>
                

                                                        <button type="submit"  name="submit" class="btn btn-default">Submit</button>
                                                    

                                                    </div>

                                            </div>
                                            </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
</div>
</div>
<!-- End: Cart Section -->

<!-- Start: Social Network -->
<section class="social-network section-padding">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Follow Us</h2>
            <span class="underline center"></span>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <ul>
            <li>
                <a class="facebook" href="#" target="_blank">
                    <span>
                        <i class="fa fa-facebook-f"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="twitter" href="#" target="_blank">
                    <span>
                        <i class="fa fa-twitter"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="google" href="#" target="_blank">
                    <span>
                        <i class="fa fa-google-plus"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="rss" href="#" target="_blank">
                    <span>
                        <i class="fa fa-rss"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="linkedin" href="#" target="_blank">
                    <span>
                        <i class="fa fa-linkedin"></i>
                    </span>
                </a>
            </li>
            <li>
                <a class="youtube" href="#" target="_blank">
                    <span>
                        <i class="fa fa-youtube"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End: Social Network -->


</body>


</html>
@include('frontend.footer')