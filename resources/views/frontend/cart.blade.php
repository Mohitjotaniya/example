@extends('frontend.master')
@include('frontend.headersection')


        <!-- End: Header Section -->
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Cart Page</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <!-- @foreach($addcart as  $row )
        <h1>{{$row->name}}</h1><h1>{{$row->book_id}}</h1>
        @endforeach -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="cart-main">
                        <div class="container">
                            <div class="row">
                                <!-- <div class="cart-head">
                                   <div class="col-xs-12 col-sm-6 account-option">
                                        <strong>Scott Fitzgerald</strong>
                                        <ul>
                                            <li><a href="#">Edit Account</a></li>
                                            <li class="divider">|</li>
                                            <li><a href="#">Edit Pin </a></li>
                                        </ul>
                                    </div> -->
                                    <!-- <div class="col-xs-12 col-sm-6 library-info">
                                        <ul>
                                            <li>
                                                <strong>Home Library:</strong>
                                                Stephen A. Schwarzman Building
                                            </li>
                                            <li>
                                                <strong>Email:</strong>
                                                <a href="mailto:scottfitzgerald@gmail.com">scottfitzgerald@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    <div class="clearfix"></div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="page type-page status-publish hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce table-tabs" id="responsiveTabs">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Book Bag</a></li>
                                                    <!-- <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Holds (4)</a></li>
                                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">My Checkouts (0)</a></li>
                                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">My eBooks (1)</a></li>
                                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionE">My Lists</a></li>
                                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionF">Fines/Fees ($0.00)</a></li> -->
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="sectionA" class="tab-pane fade in active">

                                                   
                                                        <form method="post" action='{{ url("/order")}}'>
                                                        {{ csrf_field() }}

                                                            <table class="table table-bordered shop_table cart">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-name">&nbsp;</th>
                                                                        <th class="product-name">Title</th>
                                                                        <th class="product-quantity">Prize</th>
                                                                        <th class="product-quantity">Action</th>
                                                                        
                                                                        <!-- <th class="product-price">Pickup Location </th>                                                                
                                                                        <th class="product-subtotal">&nbsp;</th> -->
                                                                    </tr>
                                                                </thead>
                                                                @foreach($addcart as  $row )
                                                                <tbody>
                                                                    <tr class="cart_item">
                                                                        <td data-title="cbox" class="product-cbox">
                                                                            <span>
                                                                                <input type="checkbox" id="cbox3" value="first_checkbox">
                                                                            </span>
                                                                        </td>
                                                                        <td data-title="Product" class="product-name">
                                                                            <!-- <span class="product-thumbnail">
                                                                                <a href="#"><img src="images/cart/cart-product-1.jpg" alt="cart-product-1"></a>
                                                                            </span> -->
                                                                            <span class="product-detail">
                                                                            <input type="text" name="u_id[]" value="{{Session::get('username')->u_id}}" style="border:none"/>
                                                                            
                                                                                <strong><input type="text" name="name[]" value="{{$row->name}}" style="border:none"/></strong>
                                                                                <span><strong>Author:<input type="text" name="author[]" value="{{$row->author}}" style="border:none"/></strong> </span>
                                                                                <span><strong>ISBN:<input type="text" name="book_id[]" value="{{$row->book_id}}" style="border:none"/></strong></span>
                                                                                <span><strong>quan:</strong> <em><input type="text" name="quan[]" value="{{$row->quan}}" style="border:none"/></em></span>
                                                                                
                                                                            </span>
                                                                        </td>
                                                                        <td><input type="text" name="prize[]" value="{{$row->prize}}" style="border:none"/></td>
                                                                        <td data-title="action" class="product-action">
                                                                            <div class="dropdown">
                                                                            <a href='{{ url("cartdelete/{$row->c_id}")}}' class="btn btn-dm btn-danger" onclick="return confirm('Are You sure to Delete Data')">Remove</a><br>

                                                                                <!-- <a href='{{ url("cartdelete/{$row->c_id}")}}' data-toggle="dropdown" class="dropdown-toggle"  onclick="return confirm('Are You sure to Delete Data')">Remove </a> -->
                                                                                <!-- <ul class="dropdown-menu">
                                                                                    <li><a href="#">Edit Hold</a></li>
                                                                                    <li><a href="#">Cancel Hold</a></li>
                                                                                    <li><a href="#">Add Another Hold</a></li>
                                                                                </ul> -->
                                                                            </div>
                                                                            <div class="addition-action">
                                                                                <small>Additional Actions:</small>
                                                                                <ul>
                                                                                    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    
                                                                    </tr>
                                                                    
                                                                 
                                                                </tbody>
                                                                @endforeach
                                                                 <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>TOTAL :<input type="text" name="sum" value=" {{Session::get('sum')}}" style="border:none"/></td>
                                                                    <td></td>
                                                                    </tr> 
                                                            </table>
                                                            <!-- <center><input type="submit" class="btn btn-dark-gray"  class="fa fa-shopping-cart" data-toggle="blog-tags" data-placement="top" title="checkout" value="checkoutT" ></input>  -->
                                                            @if(Session::get('sum'))
                                                            <a href='{{ url("/order")}} ' class="btn btn-dm btn-danger" >checkout</a><br>
                                                            @else
                                                            @endif
                                                        </form>
                                                       
                                                    </div>
                                                    <div id="sectionB" class="tab-pane fade in">
                                                        <h5>Lorem Ipsum Dolor</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    </div>
                                                    <div id="sectionC" class="tab-pane fade in">
                                                        <h5>Lorem Ipsum Dolor</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    </div>
                                                    <div id="sectionD" class="tab-pane fade in">
                                                        <h5>Lorem Ipsum Dolor</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    </div>                                                    
                                                    <div id="sectionE" class="tab-pane fade in">
                                                        <h5>Lorem Ipsum Dolor</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    </div>                                                    
                                                    <div id="sectionF" class="tab-pane fade in">
                                                        <h5>Lorem Ipsum Dolor</h5>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .entry-content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Section -->
        