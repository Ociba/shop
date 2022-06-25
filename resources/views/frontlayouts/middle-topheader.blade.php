<div class="container">
    <div class="header-inner">
        <div class="col-sm-4 col-xs-6 header-left">
        <div class="shipping">
                    <div class="shipping-img"></div>
                    <div class="shipping-text">Delivered to You <span class="shipping-detail">We Can Deliver all products</span></div>
                </div>
            
        </div>
        <div class="col-sm-4 col-xs-6 header-middle">
            <div class="header-middle-top">
                
                <div id="logo"> <a href="index.html"><img style="height:50px;" src="{{asset('front/image/logo1.jpg')}}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a>{{--JOOME <br> <span class="header-title">Get Accomodation,Agriculture Produce & Equipments,Shop Items</span>--}}</div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-6 header-right">
            <div id="cart" class="btn-group btn-block">
                <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"><span id="cart-total">1 item(s) - $254.00</span><i class="fa fa-caret-down"></i></button>
                <ul class="dropdown-menu pull-right cart-dropdown-menu">
                    <li>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="iPhone" alt="iPhone" src="{{asset('front/image/product/7product50x59.jpg')}}"></a></td>
                                    <td class="text-left"><a href="#">iPhone</a></td>
                                    <td class="text-right">x 1</td>
                                    <td class="text-right">$254.00</td>
                                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <li>
                        <div>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-right">$210.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                        <td class="text-right">$2.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>VAT (20%)</strong></td>
                                        <td class="text-right">$42.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-right">$254.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-right"> <span class="btn-viewcart"><a href="/cart/my-cart"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="/checkout/my-checkout"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>