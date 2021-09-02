<div class="col-sm-4">
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

                                                                        <tr class="cart_item">
                                                                            <td class="product-name">
                                                                                <span class="woocommerce-product-amount">{{ $user->name }}</span>
                                                                            </td>
                                                                            <td class="product-total">
                                                                                <span class="woocommerce-Price-amount amount"><b>{{ $user->prize }}</b></span>
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
                                                                            <th><i class="fa fa-rupee"><b><u>{{Session::get('sum')}}</u><b></i></th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>


                                                        <h1>
                                    <a href="">
                                        <img src="{{ asset ('frontend') }}/images/libraria-logo-v1.png"
                                            alt="LIBRARIA" />
                                    </a>

                                    <H2>YOUR ORDER  CONFIRMATION </H2>
                                    
                                </h1>