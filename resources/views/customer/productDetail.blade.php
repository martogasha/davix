@include('cPartials.header')
<title>Product Detail</title>


                <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>{{$product->product_name}}...</h1>
                    <ul >
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="category_page.html">Products</a></li>
                        <li class="active">{{$product->product_name}}...</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="row mt_10 ">
                    <div class="col-md-6">
                        <div><a class="thumbnails"> <img data-name="product_image" src="{{asset('uploads/product/'.$product->product_image)}}" alt="" /></a></div>
                        <div id="product-thumbnail" class="owl-carousel">
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{asset('uploads/product/'.$product->product_image)}}" data-fancybox="group1" > <img src="{{asset('uploads/product/'.$product->product_image)}}" alt="" /></a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 prodetail caption product-thumb">
                        <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$product->product_name}}</a></h4>
                        <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                        </div>

                        <span class="price mb_20"><span class="amount"><span class="currencySymbol">Ksh:</span>{{$product->product_price}}</span></span>
                        <hr>
                        <ul class="list-unstyled product_info mtb_20">
                                <label>Availability:</label>
                                <span> In Stock</span></li>
                        </ul>
                        <hr>
                        <p class="product-desc mtb_30">{{$product->product_desc}}</p>
                        <div id="product">
                            <div class="button-group mt_30">
                                <form action="{{route('cart.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$product->id}}" name="productId">
                                <button type="submit" class="btn btn-info">ADD TO CART</button>
                                <a href="{{url('/')}}"> <button class="btn btn-info">CONTINUE SHOPPING</button></a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="exTab5" class="mtb_30">
                            <ul class="nav nav-tabs">
                                <li class="active"> <a  href="#1c" data-toggle="tab">Overview</a> </li>
                                <li><a href="#2c" data-toggle="tab">Reviews (1)</a> </li>
                                <li><a href="#3c" data-toggle="tab">Solution</a> </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane active" id="1c">
                                    <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                                </div>
                                <div class="tab-pane" id="2c">
                                    <form class="form-horizontal">
                                        <div id="review"></div>
                                        <h4 class="mt_20 mb_30">Write a review</h4>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Your Name</label>
                                                <input name="name" value="" id="input-name" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Your Review</label>
                                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-md-6">
                                                <label class="control-label">Rating</label>
                                                <div class="rates"><span>Bad</span>
                                                    <input name="rating" value="1" type="radio">
                                                    <input name="rating" value="2" type="radio">
                                                    <input name="rating" value="3" type="radio">
                                                    <input name="rating" value="4" type="radio">
                                                    <input name="rating" value="5" type="radio">
                                                    <span>Good</span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="buttons pull-right">
                                                    <button class="btn btn-md btn-link">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="3c">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-tab" class="mt_40">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Related Products</h2>
                    </div>
                    <div class="tab-content clearfix box">
                        <div class="tab-pane active" id="nArrivals">
                            <div class="nArrivals owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Bestsellers">
                            <div class="Bestsellers owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Featured">
                            <div class="Featured owl-carousel">
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-grid">
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb  mb_30">
                                            <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                            <div class="caption product-detail text-left">
                                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                                <span class="price"><span class="amount"><span class="currencySymbol">Ksh:</span>70.00</span></span>
                                                <div class="button-group text-center">
                                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
   @include('cPartials.footer')

    <!-- =====  FOOTER END  ===== -->
</div>

<a id="scrollup">Scroll</a>
<script src="{{asset('js/jQuery_v3.1.1.min.js')}}"></script> <script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/product_detail_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:39 GMT -->
</html>
