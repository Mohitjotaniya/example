<!-- Start: Header Section -->
<header id="header-v1" class="navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="index-2.html">
                                        <img src="{{ asset ('frontend') }}/images/libraria-logo-v1.png"
                                            alt="LIBRARIA" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                        <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                        <span>/</span>
                                        <a href="mailto:support@libraria.com"><i
                                                class="fa fa-envelope"></i>support@libraria.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        <div class="dropdown">
                                            <!-- <h1>{{ Session::get('username'); }}</h1> -->
                                            
<!--  -->



                                            

                                        @if(Session::get('username'))
                                        
                                        <!-- <a href="{{ url ('user_register') }}"><i class="fa fa-lock"></i> Register</a>
                                        <li><a class="dropdown-item" href="{{ url('/u_logout') }}">logout</a></li> -->



                                        @if(Session::has('username'))
                                        
   
                                            <strong role="alert" style="color: beige;">{{Session::get('username')->u_name}}


                                               
                                                </strong>
                                               

                                            <ul class="dropdown-menu" >
                                                <li><a class="dropdown-item" href="{{ url('/u_profile') }}">PROFILE</a></li>
                                                <li><a class="dropdown-item" href="{{ url('/user_oder_view') }}">ODER VIEW</a></li>
                                                <li><a class="dropdown-item" href="{{ url('/u_logout') }}">LOGOUT</a></li>
                                            </ul>
                                       

                                            @endif

                                       

                                        @else
                                      
                                        <a href="{{ url ('user_login') }}"><i class="fa fa-lock"></i>Login </a>

                                        <a href="{{ url ('user_register') }}"><i class="fa fa-lock"></i> Register</a>

                                        @endif
                                        </div>
                                        <br>
                                       
                                        <div class="header-cart dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <a href="{{ url ('/cartview') }}" class="btn btn-warning" ><h4><i class="fa fa-shopping-cart">&nbsp &nbsp</i>Cart</h4></a>
                                            <!-- {{Session::get('cart')}} -->
                                            </a>

                                           
                                            @if(Session::has('username'))
                                            
                                            
                                                
                                              
                                                    @else

                                                    @endif
                                         
                                                
                                            
                                                    
                                            
                                              
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                        href="{{ url ('/') }}"> home</a>
                                       

                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                        href="{{ url ('/book_view') }}">Books &amp; Media</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url ('/book_view') }}">Books &amp; Media List View</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                        href="news-events-list-view.html">News &amp; Events</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                        <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="signin.html">Signin/Register</a></li>
                                        <li><a href="404.html">404/Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog Grid View</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Navigation</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="index-2.html">Home</a>
                                <ul>

                                </ul>
                            </li>
                            <li>
                                <a href="books-media-list-view.html">Books &amp; Media</a>
                                <ul>
                                    <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                    <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                    <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                    <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                    <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="news-events-list-view.html">News &amp; Events</a>
                                <ul>
                                    <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                    <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="signin.html">Signin/Register</a></li>
                                    <li><a href="404.html">404/Error</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Grid View</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End: Header Section -->