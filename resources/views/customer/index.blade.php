@include('cPartials.header')
<title>Davix</title>

                <div class="left_banner left-sidebar-widget mt_30 mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
                <div class="left-cms left-sidebar-widget mb_50">
                    <ul>
                        <li>
                            <div class="feature-i-left ptb_40">
                                <div class="icon-right Shipping"></div>
                                <h6>Free Shipping</h6>
                                <p>Free delivery worldwide</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-i-left ptb_40">
                                <div class="icon-right Order"></div>
                                <h6 >Order Online</h6>
                                <p>Hours : 8am - 11pm</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-i-left ptb_40">
                                <div class="icon-right Save"></div>
                                <h6>Shop And Save</h6>
                                <p>For All Spices & Herbs</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-i-left ptb_40">
                                <div class="icon-right Safe"></div>
                                <h6>Safe Shoping</h6>
                                <p>Ensure genuine 100%</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="banner">
                    <div class="main-banner owl-carousel">
                        <div class="item"><a href="#"><img src="images/main_banner1.jpg" alt="Main Banner" class="img-responsive" /></a></div>
                        <div class="item"><a href="#"><img src="images/main_banner1.jpg" alt="Main Banner" class="img-responsive" /></a></div>
                        <div class="item"><a href="#"><img src="images/main_banner1.jpg" alt="Main Banner" class="img-responsive" /></a></div>
                    </div>
                </div>
                <div id="brand_carouse" class="ptb_30 text-center">
                    <div class="type-01">
                        <div class="heading-part mb_20 ">
                            <h2 class="main_title">Top Categories</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="brand owl-carousel ptb_20">
                                    <div class="item text-center"> <a href="#"><img src="images/brand/hplogo.jpg" alt="Disney" class="img-responsive" /></a> </div>
                                    <div class="item text-center"> <a href="#"><img src="images/brand/asus.jpg" alt="Canon" class="img-responsive" /></a> </div>
                                    <div class="item text-center"> <a href="#"><img src="images/brand/lg.jpg" alt="Harley" class="img-responsive" /></a> </div>
                                    <div class="item text-center"> <a href="#"><img src="images/brand/sony.jpg" alt="Canon" class="img-responsive" /></a> </div>
                                    <div class="item text-center"> <a href="#"><img src="images/brand/ace.jpg" alt="Canon" class="img-responsive" /></a> </div>
                                    <div class="item text-center"> <a href="#"><img src="images/brand/samsung.jpg" alt="Dell" class="img-responsive" /></a> </div>
                                    <div class="item text-center"> <a href="#"><img src="images/brand/app.jpg" alt="Canon" class="img-responsive" /></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =====  BANNER END  ===== -->
                <!-- =====  SUB BANNER  STRAT ===== -->
                <!-- =====  SUB BANNER END  ===== -->

                <!-- =====  PRODUCT TAB  ===== -->
                <div id="product-tab" class="mt_40">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Home Electronics</h2>
                    </div>
                    <div class="tab-content clearfix box">
                        <div class="tab-pane active" id="nArrivals">
                            <div class="nArrivals owl-carousel">
                                @foreach($homes as $home)
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="{{url('productDetail',$home->id)}}"> <img data-name="product_image" src="{{asset('uploads/product/'.$home->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('uploads/product/'.$home->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">{{$home->product_name}}</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>{{$home->product_price}}</span></span>
                                                <div class="button-group text-center">
                                                    <form action="{{route('cart.store')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$home->id}}" name="productId">
                                                        <button type="submit" class="btn btn-info">ADD TO CART</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div id="product-tab" class="mt_40">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Phones</h2>
                    </div>
                    <div class="tab-content clearfix box">
                        <div class="tab-pane active" id="nArrivals">
                            <div class="nArrivals owl-carousel">
                                @foreach($phones as $phone)
                                    <div class="product-grid">
                                        <div class="item">
                                            <div class="product-thumb">
                                                <div class="image product-imageblock"> <a href="{{url('productDetail',$phone->id)}}"> <img data-name="product_image" src="{{asset('uploads/product/'.$phone->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('uploads/product/'.$phone->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                                <div class="caption product-detail text-left">
                                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">{{$phone->product_name}}</a></h6>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                    <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>{{$phone->product_price}}</span></span>
                                                    <div class="button-group text-center">
                                                        <form action="{{route('cart.store')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{$phone->id}}" name="productId">
                                                            <button type="submit" class="btn btn-info">ADD TO CART</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div id="product-tab" class="mt_40">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Computers and Laptops</h2>
                    </div>
                    <div class="tab-content clearfix box">
                        <div class="tab-pane active" id="nArrivals">
                            <div class="nArrivals owl-carousel">
                                @foreach($laptops as $laptop)
                                    <div class="product-grid">
                                        <div class="item">
                                            <div class="product-thumb">
                                                <div class="image product-imageblock"> <a href="{{url('productDetail',$laptop->id)}}"> <img data-name="product_image" src="{{asset('uploads/product/'.$laptop->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{asset('uploads/product/'.$laptop->product_image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                                <div class="caption product-detail text-left">
                                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">{{$laptop->product_name}}</a></h6>
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                    <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>{{$laptop->product_price}}</span></span>
                                                    <div class="button-group text-center">
                                                        <form action="{{route('cart.store')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{$laptop->id}}" name="productId">
                                                        <button type="submit" class="btn btn-info">ADD TO CART</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- =====  PRODUCT TAB  END ===== -->
                <!-- =====  SUB BANNER  STRAT ===== -->

                <!-- =====  SUB BANNER END  ===== -->
                <!-- =====  sale product  ===== -->
                <!-- =====  sale product end ===== -->
                <!-- =====  SUB BANNER  STRAT ===== -->
                <!-- =====  SUB BANNER END  ===== -->
                <!-- =====  product ===== -->
                <!-- =====  product end  ===== -->
                <!-- =====  Blog ===== -->
            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
@include('cPartials.footer')
    <!-- =====  FOOTER END  ===== -->

</div>
<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.firstVisitPopup.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 05:21:23 GMT -->
</html>
