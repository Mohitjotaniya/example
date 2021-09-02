@extends('frontend.master')
@include('frontend.headersection')

@include('frontend.slidersection')


        <!-- Start: Book & Media Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-media-list">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                           
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="catalog" id="catalog" class="form-control">
                                                            <option>Search the Catalog</option>
                                                            <option>Catalog 01</option>
                                                            <option>Catalog 02</option>
                                                            <option>Catalog 03</option>
                                                            <option>Catalog 04</option>
                                                            <option>Catalog 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>All Categories</option>
                                                            <option>Category 01</option>
                                                            <option>Category 02</option>
                                                            <option>Category 03</option>
                                                            <option>Category 04</option>
                                                            <option>Category 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="Search">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="filter-options margin-list">
                                        <div class="row">                                            
                                            <div class="col-md-4 col-sm-4">
                                                <select name="orderby">
                                                    <option selected="selected">Default sorting</option>
                                                    <option>Sort by popularity</option>
                                                    <option>Sort by rating</option>
                                                    <option>Sort by newness</option>
                                                    <option>Sort by price</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="filter-result">Showing items 1 to 9 of 19 total</div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 pull-right">
                                                <div class="filter-toggle">
                                                    <a href="books-media-gird-view-v1.html"><i class="glyphicon glyphicon-th-large"></i></a>
                                                    <a href="books-media-list-view.html" class="active"><i class="glyphicon glyphicon-th-list"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    @foreach($user as $row)
                                <form method="post" action="{{url('/cart')}}" >
                                    {{ csrf_field() }}
                                   
                                    <div class="books-list">
                                   
                                        <article> 
                                            <div class="single-book-box">                                                
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon yellow-icon"></div>
                                                    @if( $row->quan == 0)
                                                    <a href="books-media-detail-v1.html"><img alt="Book" style="width: 300px; height: 465px; opacity: 0.5;" src="{{ route('images.displayImage',$row->image) }}" /></a>                                                                 </div>

                                                    @else
                                                    <a href="books-media-detail-v1.html"><img alt="Book" style="width: 300px; height: 465px;" src="{{ route('images.displayImage',$row->image) }}" /></a>                                                                 </div>

                                                    @endif


                                              
                                                    <div class="post-detail">
                                                  
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title">
                                                                <input type="hidden" name="u_id_i" value=" @if(Session::has('username')) {{Session::get('username')->u_id}} @endif" style="border:none"/>
                                                                    <input type="text" name="name" value="{{ $row->name }} " style="border:none"/>
                                                                    <!-- <a href="books-media-detail-v1.html">{{ $row->name }}</a> -->
                                                                </h3>
                                                                <ul>
                                                                    <li><strong>Author:</strong>
                                                                    <input type="text" name="author" value=" {{ $row->author }}" style="border:none"/></li>
                                                                    <li><strong>ISBN:</strong>
                                                                    <input type="text" name="book_id" value=" {{ $row->book_id }}" style="border:none"></input></li>
                                                                     </li>
                                                                     <li><strong>prize:</strong>
                                                                    <input type="text" name="prize" value=" {{ $row->prize }}" style="border:none"></input></li>
                                                                     </li>

                                                                </ul>
                                                                
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong>
                                                                    <input type="text" name="quan" value=" {{ $row->quan }}" style="border:none"/>
                                                                </li>
                                                                
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul> 
                                                                                                                              
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p> <td><textarea name="description"  rows="4" cols="70" name="quan" style="border:none">{{ $row->description }}</textarea></td></p>
                                                    
                                                    </div>
                                       
                                                    <footer class="entry-footer">
                                                  <!-- <a href='{{ url("cart/{$row->book_id}")}}' cclass="btn btn-dark-gray"  data-toggle="blog-tags" data-placement="top" title="Add TO CART">Edit</a>  -->
                                                
                                                @if( $row->quan == 0)

                                                <button type="button" class="btn btn-lg btn-primary" disabled>OUT OF STOCK</button>


                                                
                                                @else
                                        @if(Session::has('username'))
                                                  <input  href='{{ url("cart/{$row->book_id}")}}' type="submit" name="submit" class="btn btn-dark-gray"  class="fa fa-shopping-cart" data-toggle="blog-tags" data-placement="top" title="Add TO CART" value="Add TO CART" ></input> 
                                                @else

                                                
                                                    <a  href='{{ url("/user_login")}}' class="btn btn-dark-gray"  class="fa fa-shopping-cart" data-toggle="blog-tags" data-placement="top" title="Add TO CART" value="Add TO CART" >Add TO CART</a> 
                                                    @endif
                                                @endif
                                                  <!-- @if(Session::has('username'))
                                                  <input  href='{{ url("cart/{$row->book_id}")}}' type="submit" class="btn btn-dark-gray"  class="fa fa-shopping-cart" data-toggle="blog-tags" data-placement="top" title="Add TO CART" value="Add TO CART" ></input> 
@else
                                                    <a  href='{{ url("/user_login")}}' class="btn btn-dark-gray"  class="fa fa-shopping-cart" data-toggle="blog-tags" data-placement="top" title="Add TO CART" value="Add TO CART" >Add TO CART</a> 
                                                    @endif -->
                                                    <!-- <a href="{{ url('/add-to-cart', $row->book_id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a>  -->
                                                         <!-- <a class="btn btn-dark-gray"  data-toggle="blog-tags" data-placement="top" title="Add TO CART" href="">Read More</a>  -->
                                                    </footer>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </article>
                                       
                                       
                                    </div>
                                   
                                </form>
                                @endforeach
                                {{ $user->links() }}

                 
                                   </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                        <div class="widget widget_related_search open" data-accordion>
                                            <h4 class="widget-title" data-control>Related Searches</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Subject</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Authors</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Series</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Other Searches</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_narrow_search" data-accordion>
                                            <h4 class="widget-title" data-control>Narrow your search</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Type of Material</h5>
                                                    <div class="widget_material" data-content>
                                                       
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                       
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Publishing Date </h5>
                                                    <div class="widget widget_material" data-content>
                                                      
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                       
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Popularity </h5>
                                                    <div class="widget widget_material" data-content>
                                                       
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                        
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Language </h5>
                                                    <div class="widget widget_material" data-content>
                                                       
                                                            <label><input type="checkbox" name="material" value="books"> Books</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Electronic Resources</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> ebooks</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Sound Recording</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Large Print</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Audio eBooks</label>
                                                        
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_recent_releases">
                                            <h4 class="widget-title">New Releases</h4>
                                            <ul>
                                                <li><a href="#">Books</a></li>
                                                <li><a href="#">eBooks</a></li>
                                                <li><a href="#">DVDS</a></li>
                                                <li><a href="#">Magazines</a></li>
                                                <li><a href="#">Audio</a></li>
                                                <li><a href="#">eAudio</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_recent_entries">
                                            <h4 class="widget-title">On-Order Items</h4>
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="{{ asset ('frontend') }}/images/order-item-01.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="{{ asset ('frontend') }}/images/order-item-02.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="{{ asset ('frontend') }}/images/order-item-03.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Author:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Start: Staff Picks -->
                        <!-- <section class="team staff-picks">
                            <div class="container">
                                <div class="center-content">
                                    <h2 class="section-title">Staff Picks</h2>
                                    <span class="underline center"></span>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="team-list">
                                    <div class="team-member">
                                        <figure>
                                            <img src="{{ asset ('frontend') }}/images/books-media/staff-pick/staff-picks-01.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="{{ asset ('frontend') }}/images/books-media/staff-pick/gail.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Downtown & Business</span>
                                                    <h4>The Collector</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member">
                                        <figure>
                                            <img src="{{ asset ('frontend') }}/images/books-media/staff-pick/staff-picks-02.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="{{ asset ('frontend') }}/images/books-media/staff-pick/katherine.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Katherine, West End</span>
                                                    <h4>Mongolia</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member">
                                        <figure>
                                            <img src="{{ asset ('frontend') }}/images/books-media/staff-pick/staff-picks-03.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="{{ asset ('frontend') }}/images/books-media/staff-pick/chris.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Chris, East Liberty</span>
                                                    <h4>The Revolution</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <!-- End: Staff Picks -->
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Books & Media Section -->
        @include('frontend.socialnetwork')

@include('frontend.footer')