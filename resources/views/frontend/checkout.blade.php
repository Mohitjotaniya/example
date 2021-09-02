@extends('frontend.master')
@include('frontend.headersection')
@include('frontend.slidersection')

        <!-- End: Page Banner -->
        <!-- Start: Cart Checkout Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="checkout-main">
                        <div class="container">
                            <div class="row">
                                <div class="cart-head">
                                    <!-- <div class="col-xs-12 col-sm-6 account-option">
                                        <strong>Scott Fitzgerald</strong>
                                        <ul>
                                            <li><a href="#">Edit Account</a></li>
                                            <li class="divider">|</li>
                                            <li><a href="#">Edit Pin </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 library-info">
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
                                    <article class="page type-page status-publish hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce">
                                            
                                                <form action="{{url('/oder_add')}}" class="checkout woocommerce-checkout" method="post" name="checkout">
                                                {{ csrf_field() }}
                                                    <div class="row">
                                                        <!-- <div class="col-sm-8">
                                                            <h2>Manage Date Time </h2>
                                                            <span class="underline left"></span> -->
                                                            
                                                            <!-- @foreach (Session::get('addcart') as $user)
                                                            <div class="woocommerce-info">
                                                                <div class="col-sm-6">
                                                                    <p class="input-required">
                                                                        
                                                                            <b>ISSUE DATE</b>
                                                                            
                                                                        <input type="text" value=" {{date('d/m/Y - H:i', strtotime($user->created_at))}}" class="input-text">
                                                                    </p>
                                                                    <p class="input-required">
                                                                       
                                                                            
                                                                       <b>RETURN DATE</b>
                                                                   <input type="text" value="{{date('d/m/Y - H:i', strtotime($user->created_at))}}" class="input-text">
                                                               </p>
                                                                   
                                                                </div>
                                                                <div class="col-sm-6">
                                                                 <p class="input-required">
                                                                       
                                                                            
                                                                            <b>RETURN DATE</b>
                                                                        <input type="timestamp" value="" class="input-text">
                                                                    </p> 
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            @endforeach 
                                                        </div>-->
                                                        <div class="col-sm-6">
                                                            <h2>Your order</h2>
                                                            <span class="underline left"></span>
                                                            <div class="woocommerce-checkout-review-order" id="order_review">
                                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="product-name">Product</th>
                                                                            <th class="product-total">Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach (Session::get('addcart') as $user)

                                                                        <tr>
                                                                            <td >
                                                                                <input type="text" name="b_name" value="{{ $user->name }}" >
                                                                            </td>
                                                                            <td >
                                                                            <b><input type="text" name="b_prize" value="{{ $user->prize }}" >
                                                                                </b>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        <!-- <tr class="cart_item">
                                                                            <td class="product-name">
                                                                                <span class="woocommerce-product-amount">The Great Gatsby</span>
                                                                            </td>
                                                                            <td class="product-total">
                                                                                <span class="woocommerce-Price-amount amount">$10.00</span>
                                                                            </td>
                                                                        </tr> -->
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr class="cart-subtotal">
                                                                            <td>Cart Sub Total</td>
                                                                            <td><i class="fa fa-rupee"><b>{{Session::get('sum')}}</b></i></td>
                                                                        </tr>
                                                                        <tr class="cart-shipping">
                                                                            <td>Fine</td>
                                                                            <td>$00.00</td>
                                                                        </tr>
                                                                        <tr class="cart-shipping">
                                                                            <td>Shipping</td>
                                                                            <td><strong class="shipping-amount">Free</strong></td>
                                                                        </tr>
                                                                        <tr class="order-total">
                                                                            <th>Order Totals</th>
                                                                            <th><i class="fa fa-rupee"><b><u><input type="text" name="b_sum" value="{{Session::get('sum')}}" ></u><b></i></th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div id="customer_details">
                                                            <div class="col-xs-12 col-sm-6">
                                                                <div class="woocommerce-billing-fields">
                                                                    <h2>Billing Address</h2>
                                                                    <span class="underline left"></span>
                                                                    <div class="row">
                                                                        <div class="billing-address-box">
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_first_name_field" class="form-row form-row form-row-first">
                                                                                <input type="hidden" value="{{Session::get('username')->u_id}}" autocomplete="given-name" placeholder="First Name" id="billing_first_name" name="u_id" class="input-text"> 
                                                                                    <input type="text" value="{{Session::get('username')->name}}" autocomplete="given-name" placeholder="First Name" id="billing_first_name" name="billing_first_name" class="input-text" disabled>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_last_name_field" class="form-row form-row form-row-last validate-required">                                                                        
                                                                                    <input type="text" value="{{Session::get('username')->lname}}" autocomplete="family-name" placeholder="Last Name" id="billing_last_name" name="billing_last_name" class="input-text" disabled>
                                                                                </p>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                            <div class="col-xs-12 col-sm-12">
                                                                                <p id="billing_company_field" class="form-row form-row form-row-wide">
                                                                                    <input type="text" value="{{Session::get('username')->email}}" autocomplete="organization" placeholder="email" id="billing_company" name="email" class="input-text " >
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12">
                                                                                <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required">
                                                                                    <input type="text" value="{{$useredit->address}}" placeholder="Address" name="billing_address_1" class="input-text" >
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                                                    <input type="text" value="{{Session::get('username')->city	}}" placeholder="Town / City" name="billing_city" class="input-text" disabled>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_state_field" class="form-row form-row form-row-first address-field validate-state validate-required" data-o_class="form-row form-row form-row-first address-field validate-required validate-state">
                                                                                    <input type="text" name="billing_state" placeholder="State / County" value="{{Session::get('username')->county	}}" class="input-text " disabled>
                                                                                </p>
                                                                            </div>
                                                                            <!-- <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                                                    <input type="text" value="" placeholder="Postcode / ZIP" id="billing_postcode" name="billing_postcode" class="input-text " disabled>
                                                                                </p>
                                                                            </div> -->
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone">
                                                                                    <input type="tel" value="{{Session::get('username')->phone}}" autocomplete="tel" placeholder="Phone" id="billing_phone" name="billing_phone" class="input-text " disabled>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12">
                                                                                <div class="radio">
                                                                                    <input id="bill-address" type="radio" value="bill-address" name="bill-address">
                                                                                    <label for="bill-address">Ship Items To The Above Billing Address</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6">
                                                                <div class="woocommerce-checkout-payment" id="payment">
                                                                    <h2>Payment Method</h2>
                                                                    <span class="underline left"></span>
                                                                    <div class="form-row place-order">
                                                                        <div class="radio">
                                                                            <input id="ship-address" type="radio" value="ship-address" name="ship-address">
                                                                            <label for="ship-address"><strong><del>Direct Bank Transfer/<del></strong>
                                                                            <del> Make your payment directly into our bank account. Please use your Order ID as the payment refercene. Your order wont be shipped until the funds have cleard in our account.</del>
                                                                            </label>
                                                                            <input id="cash-delivery" type="radio" value="cash-delivery" name="ship-address" checked>
                                                                            <label for="cash-delivery" ><strong>Cash On Delivery</strong></label>
                                                                            <input id="paypal" type="radio" value="paypal" name="ship-address">
                                                                            <label for="paypal"><strong><del>Paypal</del></strong>
                                                                                <span><a href="#"><img src="{{ asset ('frontend') }}/images/cart/payment-discover.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="{{ asset ('frontend') }}/images/cart/payment-american-express.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="{{ asset ('frontend') }}/images/cart/payment-paypal.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="{{ asset ('frontend') }}/images/cart/payment-mastercard.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="{{ asset ('frontend') }}/images/cart/payment-visa.jpg" alt=""></a></span>
                                                                            </label>
                                                                        </div>
                                                                        <input type="submit" data-value="Place order" value="Place order" id="place_order"  class="button alt btn btn-default">	
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>	
                                                    </div>
                                                </form>
                                               
                                            </div>
                                        </div><!-- .entry-content -->
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Checkout Section -->

    
        @include('frontend.socialnetwork')

@include('frontend.footer')
