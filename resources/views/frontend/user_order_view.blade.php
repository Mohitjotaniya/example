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
        <!-- <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li> -->
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
      <h1>ORDER VIEW </h1>
      <a href='{{ url("pdf_d")}}' class="btn btn-dm btn-danger" >PDF Download</a>|

      <hr>
      <table class="table" method="post">
                                        <thead class=" text-primary">
                                            <tr>
           
                                            <th>image</th> 
                                                <th>name</th>
                                               
                                                <th>language </th>
                                                <th>Prize </th>
                                                <th>Date </th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>

                                        
                                        @foreach($oderview as $view)
                                        
                                        
                                            <tr>
                                            <td><img style="width: 100px; height: 100px;" src="{{ route('images.displayImage',$view->image) }}" alt="" title=""></td>
                                                <td>{{ $view->name }}</td>
                                               
                                                <td>{{ $view->language }}</td>
                                                <td>{{ $view->prize }}</td>
                                                <td>{{date('d/m/Y - H:i', strtotime($view->created_at))}}</td>
                                                
                                               
                                                                                              

                                                <td>
                                                
                                               

                                            
                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                    </table>
      
    
     
     
     
    </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
