<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 09:54:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$prod->product_name}} - Electronics eCommerce</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assetsTwo/images/icons/favicon.png')}}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{asset('assetsTwo/js/webfont.js')}}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assetsTwo/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assetsTwo/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsTwo/vendor/fontawesome-free/css/all.min.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice bg-primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="category.html" class="category">MEN</a>
                <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="login.html" class="login-link">Log In</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="header-dropdown">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="fas fa-bars"></i>
						</button>
                        <a href="{{url('internetOne')}}" class="logo">
                            <img src="{{asset('assetsTwo/images/log.jpg')}}" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                            <img alt="phone" src="{{asset('assetsTwo/images/phone.png')}}" width="30" height="30" class="pb-1">
                            <h6>Call us now<a href="tel:#" class="text-dark font1">+254 728 422320</a></h6>
                        </div>

                        <a href="login.html" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                        <a href="wishlist.html" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                            </a>


                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                    @if(isset($products))
                                    @foreach($products as $product)
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">{{$product['item']['product_name']}}</a>
                                                </h4>

                                                <span class="cart-product-info">
													<span class="cart-product-qty">{{$product['quantity']}}</span> × Ksh: {{number_format($product['item']['product_price'])}}
                                                </span>
                                            </div>
                                            <!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="product" width="80" height="80">
                                                </a>

                                                <a href="{{url('cartReduceByOne',$product['item']['id'])}}" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                        @endforeach
                                        @endif
                                        <!-- End .product -->
                                        <!-- End .product -->
                                    </div>
                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">Ksh: {{number_format($totalPrice)}}</span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{url('cartView')}}" class="btn btn-gray btn-block view-cart">View
											Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li>
                                <a href="{{url('internetOne')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('shopNow')}}">Shop</a>
                        
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="product.html">Blog</a>
                              
                                <!-- End .megamenu -->
                            </li>
                        
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

        <main class="main">
            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo1.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">{{$prod->product_name}}</a></li>
                    </ol>
                </nav>
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">“Men Black Sports Shoes”</strong>
                        <span>has been added to your cart.</span>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <!---->
                                    <div class="product-label label-sale">
                                        -16%
                                    </div>
                                </div>

                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$prod->product_image1)}}" data-zoom-image="{{asset('uploads/product/'.$prod->product_image1)}}" width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$prod->product_image1)}}" data-zoom-image="{{asset('uploads/product/'.$prod->product_image1)}}" width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$prod->product_image1)}}" data-zoom-image="{{asset('uploads/product/'.$prod->product_image1)}}" width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$prod->product_image1)}}" data-zoom-image="{{asset('uploads/product/'.$prod->product_image1)}}" width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{asset('uploads/product/'.$prod->product_image1)}}" data-zoom-image="{{asset('uploads/product/'.$prod->product_image1)}}" width="468" height="468" alt="product" />
                                    </div>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>

                            <div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$prod->product_image1)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$prod->product_image1)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$prod->product_image1)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$prod->product_image1)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="{{asset('uploads/product/'.$prod->product_image1)}}" width="110" height="110" alt="product-thumbnail" />
                                </div>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title">{{$prod->product_name}}</h1>

                            <div class="product-nav">
                                <div class="product-prev">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="{{asset('assetsTwo/images/products/product-3.jpg')}}"
                                                    style="padding-top: 0px;">

                                                <span>Circled Ultimate 3D Speaker</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="product-next">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="{{asset('assetsTwo/images/products/product-4.jpg')}}"
                                                    style="padding-top: 0px;">

                                                <span>Blue Backpack for the Young</span>
                                        </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                            </div>
                            <!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <span class="old-price">Ksh {{number_format($prod->price)}}</span>
                                <span class="new-price">Ksh {{number_format($prod->product_price)}}</span>
                            </div>
                            <!-- End .price-box -->

                            <div class="product-desc">
                                <p>
                                {{$prod->product_desc}}
                                </p>
                            </div>
                            <!-- End .product-desc -->

                        
                            <div class="product-action">
                           
                                <!-- End .product-single-qty -->
                
                                  <form id="productDetailForm">
                                <input type="hidden" value="{{$prod->id}}" name="productId" id="productDetail">
                                <button type="submit" class="btn btn-info">ADD TO CART</button>
                                <a href="{{url('internetOne')}}" class="btn btn-info" style=background-color:black;>CONTINUE SHOPPING</a>

                                </form>
                            </div>
                            <!-- End .product-action -->

                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-2">
                                <label class="sr-only">Share:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                    <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                                </div>
                                <!-- End .social-icons -->

                                <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                        class="icon-wishlist-2"></i><span>Add to
                                        Wishlist</span></a>
                            </div>
                            <!-- End .product single-share -->
                        </div>
                        <!-- End .product-single-details -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                                Information</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum consectetur sed do, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li>Any Product types that You want - Simple, Configurable
                                    </li>
                                    <li>Downloadable/Digital Products, Virtual Products
                                    </li>
                                    <li>Inventory Management with Backordered items
                                    </li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{asset('assetsTwo/images/products/single/body-shape.png')}}" alt="body shape" width="217" height="398">
                                    </div>
                                    <!-- End .col-md-4 -->

                                    <div class="col-md-8">
                                        <table class="table table-size">
                                            <thead>
                                                <tr>
                                                    <th>SIZE</th>
                                                    <th>CHEST (in.)</th>
                                                    <th>WAIST (in.)</th>
                                                    <th>HIPS (in.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>XS</td>
                                                    <td>34-36</td>
                                                    <td>27-29</td>
                                                    <td>34.5-36.5</td>
                                                </tr>
                                                <tr>
                                                    <td>S</td>
                                                    <td>36-38</td>
                                                    <td>29-31</td>
                                                    <td>36.5-38.5</td>
                                                </tr>
                                                <tr>
                                                    <td>M</td>
                                                    <td>38-40</td>
                                                    <td>31-33</td>
                                                    <td>38.5-40.5</td>
                                                </tr>
                                                <tr>
                                                    <td>L</td>
                                                    <td>40-42</td>
                                                    <td>33-36</td>
                                                    <td>40.5-43.5</td>
                                                </tr>
                                                <tr>
                                                    <td>XL</td>
                                                    <td>42-45</td>
                                                    <td>36-40</td>
                                                    <td>43.5-47.5</td>
                                                </tr>
                                                <tr>
                                                    <td>XLL</td>
                                                    <td>45-48</td>
                                                    <td>40-44</td>
                                                    <td>47.5-51.5</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .product-size-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <table class="table table-striped mt-2">
                                <tbody>
                                    <tr>
                                        <th>Weight</th>
                                        <td>23 kg</td>
                                    </tr>

                                    <tr>
                                        <th>Dimensions</th>
                                        <td>12 × 24 × 35 cm</td>
                                    </tr>

                                    <tr>
                                        <th>Color</th>
                                        <td>Black, Green, Indigo</td>
                                    </tr>

                                    <tr>
                                        <th>Size</th>
                                        <td>Large, Medium, Small</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="{{asset('assetsTwo/images/blog/author.jpg')}}" alt="author" width="80" height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
                                                    <strong>Joe Doe</strong> – April 12, 2018
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p>Excellent.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="add-product-review">
                                    <h3 class="review-title">Add a review</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Your rating <span class="required">*</span></label>
                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>

                                            <select name="rating" id="rating" required="" style="display: none;">
                                                <option value="">Rate…</option>
                                                <option value="5">Perfect</option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Not that bad</option>
                                                <option value="1">Very poor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Your review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <!-- End .form-group -->


                                        <div class="row">
                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-12">
                                                <div class=" custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="save-name" />
                                                    <label class="custom-control-label mb-0" for="save-name">Save my
                                                        name, email, and website in this browser for the next time I
                                                        comment.</label>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                                <!-- End .add-product-review -->
                            </div>
                            <!-- End .product-reviews-content -->
                        </div>
                        <!-- End .tab-pane -->
                    </div>
                    <!-- End .tab-content -->
                </div>
                <!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title">Related Products</h2>

                    <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small">
                    @foreach($bests as $best)
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="{{url('productInfo',$best->id)}}">
                                    <img src="{{asset('uploads/product/'.$best->product_image)}}" width="205" height="205" alt="product">
                                    <img src="{{asset('uploads/product/'.$best->product_image)}}" width="205" height="205" alt="product">
                                </a>
                             
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                            

                           
                                <!-- End .product-countdown-container -->
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('productInfo',$best->id)}}" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('productInfo',$best->id)}}">{{$best->product_name}}</a>
                                </h3>
                          
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">Ksh {{number_format($best->product_price)}}</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        @endforeach

                    </div>
                    <!-- End .products-slider -->
                </div>
                <!-- End .products-section -->

                <hr class="mt-0 m-b-5" />

         
                        <div class="row products-widgets">
                            <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                                <div class="product-column">
                                    <h3 class="section-sub-title ls-n-20">Hot Deals</h3>
                                    @foreach($bests->take(5) as $best)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productInfo',$best->id)}}">
                                                <img src="{{asset('uploads/product/'.$best->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$best->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productInfo',$best->id)}}">{{$best->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{number_format($best->product_price)}}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                    @endforeach
                                    <a href="{{url('shopNow')}}" class="btn btn-primary btn-lg btn-block">View More</a>

                                </div>
                                <!-- End .product-column -->
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                                <div class="product-column">
                                    <h3 class="section-sub-title ls-n-20">Best Selling Products</h3>
                                    @foreach($bests->take(5) as $best)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productInfo',$best->id)}}">
                                                <img src="{{asset('uploads/product/'.$best->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$best->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productInfo',$best->id)}}">{{$best->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{number_format($best->product_price)}}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                    @endforeach
                                    <a href="{{url('shopNow')}}" class="btn btn-primary btn-lg btn-block">View More</a>

                                </div>
                                <!-- End .product-column -->
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                                <div class="product-column">
                                    <h3 class="section-sub-title ls-n-20">Latest Products</h3>
                                    @foreach($bests->take(5) as $best)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="{{url('productInfo',$best->id)}}">
                                                <img src="{{asset('uploads/product/'.$best->product_image)}}" width="84" height="84" alt="product">
                                                <img src="{{asset('uploads/product/'.$best->product_image)}}" width="84" height="84" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-title"> <a href="{{url('productInfo',$best->id)}}">{{$best->product_name}}</a> </h3>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <!-- End .product-ratings -->
                                            </div>
                                            <!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">Ksh {{number_format($best->product_price)}}</span>
                                            </div>
                                            <!-- End .price-box -->
                                        </div>
                                        <!-- End .product-details -->
                                    </div>
                                    @endforeach
                                    <a href="{{url('shopNow')}}" class="btn btn-primary btn-lg btn-block">View More</a>
                                </div>
                                <!-- End .product-column -->
                            </div>
                            <!-- End .col-md-4 -->
                        </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->

        <footer class="footer bg-dark position-relative">
            <div class="footer-middle">
                <div class="container position-static">
                    <div class="footer-ribbon">Get in touch</div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4>
                                <a href="{{url('internetOne')}}">
                                    <img src="{{asset('assetsTwo/images/log.jpg')}}" alt="Logo" class="logo-footer">
                                </a>
                                <p class="m-b-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus. Duis nec vestibulum magna, et dapibus lacus.</p>
                                <a href="#" class="read-more text-white">read more...</a>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-4 pb-sm-0">
                            <div class="widget mb-2">
                                <h4 class="widget-title mb-1 pb-1">Contact Info</h4>
                                <ul class="contact-info m-b-4">
                                    <li>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, Nairobi
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:">+254 728 422320</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="https://portotheme.com/cdn-cgi/l/email-protection#7d101c14113d18051c100d1118531e1210"><span class="__cf_email__" data-cfemail="1f727e76735f7a677e726f737a317c7072">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title pb-1">Customer Service</h4>

                                <ul class="links">
                                    <li><a href="#">Help & FAQs</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="demo1-about.html">About Us</a></li>
                                    <li><a href="#">Corporate Sales</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-0">
                            <div class="widget mb-1 mb-sm-3">
                                <h4 class="widget-title">Popular Tags</h4>

                                <div class="tagcloud">
                                    <a href="#">Bag</a>
                                    <a href="#">Black</a>
                                    <a href="#">Blue</a>
                                    <a href="#">Clothes</a>
                                    <a href="#">Fashion</a>
                                    <a href="#">Hub</a>
                                    <a href="#">Jean</a>
                                    <a href="#">Shirt</a>
                                    <a href="#">Skirt</a>
                                    <a href="#">Sports</a>
                                    <a href="#">Sweater</a>
                                    <a href="#">Winter</a>
                                </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© Mylonix eCommerce. 2025. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons">
                            <span class="payment-icon visa" style="background-image: url({{asset('assetsTwo/images/payments/payment-visa.svg')}})"></span>
                            <span class="payment-icon paypal" style="background-image: url({{asset('assetsTwo/images/payments/payment-paypal.svg')}})"></span>
                            <span class="payment-icon stripe" style="background-image: url({{asset('assetsTwo/images/payments/payment-stripe.png')}})"></span>
                            <span class="payment-icon verisign" style="background-image:  url({{asset('assetsTwo/images/payments/payment-verisign.svg')}})"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .footer-bottom -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                <li><a href="{{url('internetOne')}}"><i class="icon-home"></i>Home</a></li>
                    <li><a href="{{url('shopNow')}}"><i class="icon-bag"></i>SHOP</a></li>

                    <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                </ul>

                <ul class="mobile-menu menu-with-icon mt-2 mb-2">
                   
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="demo1-contact.html">Contact Us</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo1.html">
                <i class="{{url('internetOne')}}"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('shopNow')}}" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="https://www.portotheme.com/html/porto_ecommerce/my-account.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('cartView')}}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                </i>Cart
            </a>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="https://portotheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assetsTwo/js/jquery.min.js')}}"></script>
    <script src="{{asset('assetsTwo/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assetsTwo/js/plugins.min.js')}}"></script>
    <script src="{{asset('assetsTwo/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('assetsTwo/js/jquery.countdown.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assetsTwo/js/main.min.js')}}"></script>
</body>
<script>
$('#relatedForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#related').val();
        $.ajax({
            type:"post",
            url:"{{route('cartView.store')}}",
            data:{
                "_token": "{{ csrf_token() }}",
                productId:productId},
            success:function (data) {
                alert('CART ADDED SUCCESSFULLY');
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
    $('#productDetailForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#productDetail').val();
        $.ajax({
            type:"post",
            url:"{{route('cartView.store')}}",
            data:{
                "_token": "{{ csrf_token() }}",
                productId:productId},
            success:function (data) {
                alert('CART ADDED SUCCESSFULLY');
                location.reload();

            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 09:54:50 GMT -->
</html>