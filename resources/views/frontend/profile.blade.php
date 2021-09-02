<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-log-in"></span> Deshbord</a></li>

        <li><a href="{{ url('/u_logout') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    <p><h3><a href="{{ url('/u_profile') }}">Profail Update  </a></h3></p>
      <p><h3><a href="{{ url('/u_change_password') }}">ChangePassword</a></h3></p>
      <p><h3><a href="{{ url('/user_oder_view') }}">ORDER VIEW</a></h3></p>
     
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Update User </h1>
      
      <hr>
      
    
     
      
      <form method="post" action="{{ url ('/Update_u_profile')}}">
      {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    Name
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" name="fname"style=" border-color:#000000;"
                    value=" {{$useredit->u_name}}  " 
                       
                        class="form-control" id="fname">
                        <input type="hidden" name="u_id"style=" border-color:#000000;"
                    value="  {{Session::get('username')->u_id}}  " 
                       
                        class="form-control" id="fname">
                  
                  
                    @if($errors->any('fname'))
<span class="text-danger">{{$errors->first('fname')}}</span>
@endif
                </div>
              
                <div class="col-sm-3">
                    <input type="text" name="lname"style=" border-color:#000000;" 
                    value="{{$useredit->lname}}" 

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
                        value="{{$useredit->email}}" 
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
                    Mobail Number
                    <input type="number"  value="{{$useredit->phone}}"   style="width: 120%; background-color: rgb(255, 255, 255); border-color:#000000; " 
                        name="code" class="form-control">
                </div>

            </div>
            @if($errors->any('code'))
<span class="text-danger">{{$errors->first('code')}}</span>
@endif<br>
            <div class="row">
                <div class="col-sm-4">
                    Birthdate<br><input type="date" value="{{$useredit->bod}}"  style="width: 120%; background-color: rgb(255, 255, 255); border-color:#000000;"
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
                    Address<input type="text" value="{{$useredit->address}}" 
                        
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
                        <option value="{{$useredit->county	}}">{{$useredit->county}}</option>
                        <option value="Gujarat  "> Gujarat</option>
                        <option value="mumbai"> mumbai</option>
                        <option value="up"> up</option>

                       

                    </select>
                    Country<br> 
                    @if($errors->any('cou'))
<span class="text-danger">{{$errors->first('cou')}}</span>
@endif<br> 
                </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <select name="city" 
                            class="form-control" id="cn" 
                      >
                            <option value="{{$useredit->city}}">{{$useredit->city}}</option>
                            <option value="rajkot"> rajkot</option>
                            <option value="surat"> surat</option>
                            <option value="div"> div</option>
                            


                           

                        </select>
                        city<br> 
                        @if($errors->any('cou'))
<span class="text-danger">{{$errors->first('cou')}}</span>
@endif<br> 
                    </div>
                    </div><br> 
                </div>
               

                <button type="submit"  name="submit" class="btn btn-default">Submit</button>
                                                    

            </div>

    </div>
    
                
      </form>
     
    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
