<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 09:50:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mylonix – Electronics eCommerce</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assetsTwo/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assetsTwo/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assetsTwo/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assetsTwo/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="assetsTwo/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assetsTwo/vendor/simple-line-icons/css/simple-line-icons.min.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice text-white bg-dark">
            <div class="container text-center">
                <h5 class="d-inline-block mb-0">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="demo1-shop.html" class="category">MEN</a>
                <a href="demo1-shop.html" class="category">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <header class="header home">
            <div class="header-top bg-primary text-uppercase">
                <div class="container">
            
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto">
                        <p class="top-message mb-0 d-none d-sm-block">Welcome To Mylonix!</p>
                        <div class="header-dropdown dropdown-expanded mr-3">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="demo1-contact.html">Contact Us</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="#" class="login-link">Log In</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook ml-0" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram ml-0" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle text-dark sticky-header">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{url('internetOne')}}" class="logo">
                            <img src="assetsTwo/images/log.jpg" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max pl-2">
                        <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
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
                                    <button class="btn icon-magnifier" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                            <i class="icon-phone-2"></i>
                            <h6 class="pt-1 line-height-1">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">+254 728 422320</a></h6>
                        </div>
                        <!-- End .header-contact -->

                        <a href="login.html" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>

                        <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a>

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
        </header>
        <!-- End .header -->

        <main class="main home">
            <div class="container mb-2">
              
                <div class="row">
                    <div class="col-lg-9">
                        <div class="home-slider slide-animate owl-carousel owl-theme mb-2" data-owl-options="{
							'loop': false,
							'dots': true,
							'nav': false
						}">
                            <div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                                <img class="slide-bg" style="background-color: #2699D0;" src="assetsTwo/images/demoes/demo1/slider/slide-1.png" width="880" height="428" alt="home-slider">
                                <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                                    <h4 class="text-white mb-0">Find the Boundaries. Push Through!</h4>
                                    <h2 class="text-white mb-0">Summer Sale</h2>
                                    <h3 class="text-white text-uppercase m-b-3">70% Off</h3>
                                    <h5 class="text-white text-uppercase d-inline-block mb-0 ls-n-20 align-text-bottom">
                                        Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">$<em
                                                class="align-text-top">199</em>99</b></h5>
                                    <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Shop Now!</a>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                            <!-- End .home-slide -->

                            <div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                                <img class="slide-bg" style="background-color: #dadada;" src="assetsTwo/images/demoes/demo1/slider/slide-2.jpg" width="880" height="428" alt="home-slider">
                                <div class="banner-layer text-uppercase appear-animate" data-animation-name="fadeInUpShorter">
                                    <h4 class="m-b-2">Over 200 products with discounts</h4>
                                    <h2 class="m-b-3">Great Deals</h2>
                                    <h5 class="d-inline-block mb-0 align-top mr-5 mb-2">Starting At
                                        <b>$<em>299</em>99</b>
                                    </h5>
                                    <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                            <!-- End .home-slide -->

                            <div class="home-slide home-slide3 banner banner-md-vw banner-sm-vw  d-flex align-items-center">
                                <img class="slide-bg" style="background-color: #e5e4e2;" src="assetsTwo/images/demoes/demo1/slider/slide-3.jpg" width="880" height="428" alt="home-slider" />
                                <div class="banner-layer text-uppercase appear-animate" data-animation-name="fadeInUpShorter">
                                    <h4 class="m-b-2">Up to 70% off</h4>
                                    <h2 class="m-b-3">New Arrivals</h2>
                                    <h5 class="d-inline-block mb-0 align-top mr-5 mb-2">Starting At
                                        <b>$<em>299</em>99</b>
                                    </h5>
                                    <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                                </div>
                                <!-- End .banner-layer -->
                            </div>
                            <!-- End .home-slide -->
                        </div>
                        <!-- End .home-slider -->

                        <div class="banners-container m-b-2 owl-carousel owl-theme" data-owl-options="{
							'dots': false,
							'margin': 20,
							'loop': false,
							'responsive': {
								'480': {
									'items': 2
								},
								'768': {
									'items': 3
								}
							}
						}">
                          
                            <!-- End .banner -->
                        
                            <!-- End .banner -->
                        
                            <!-- End .banner -->
                        </div>
                    
                    <!-- End .info-box -->

                   
                    <!-- End .info-box -->
                    @include('cPartials.category')

                   
                    <!-- End .info-box -->


                            <nav class="navbar" style="background-color: #e3f2fd;" data-bs-theme="light">
                            <h4>
                            Sponsored Products</h4> <h5><a href="{{url('shopNow')}}">View More</a></h5>
                    <!-- Navbar content -->
                            </nav>


                        <div class="products-slider owl-carousel m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                        @foreach($bests as $best)
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="{{url('productInfo',$best->id)}}">
                                        <img src="{{asset('uploads/product/'.$best->product_image)}}" width="205" height="205" alt="product" />
                                    </a>
                                   
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{url('productInfo',$best->id)}}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title"> <a href="{{url('productInfo',$best->id)}}">{{$best->product_name}}</a> </h3>
                                
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
                        <!-- End .featured-proucts -->


                    <nav class="navbar" style="background-color: #e3f2fd;" data-bs-theme="light">
                            <h4>
                            Top Selling Products</h4> <h5><a href="{{url('shopNow')}}">View More</a></h5>
                    <!-- Navbar content -->
                            </nav>


                        <div class="products-slider owl-carousel m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                        @foreach($bests as $best)
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="{{url('productInfo',$best->id)}}">
                                        <img src="{{asset('uploads/product/'.$best->product_image)}}" width="205" height="205" alt="product" />
                                    </a>
                                   
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{url('productInfo',$best->id)}}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title"> <a href="{{url('productInfo',$best->id)}}">{{$best->product_name}}</a> </h3>
                                
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
                        <!-- End .brands-slider -->

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

                        <hr class="mt-1 mb-3 pb-2">

                        <div class="feature-boxes-container">
                            <div class="row">
                                <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                                    <div class="feature-box  feature-box-simple text-center">
                                        <i class="icon-earphones-alt"></i>

                                        <div class="feature-box-content p-0">
                                            <h3 class="mb-0 pb-1">Customer Support</h3>
                                            <h5 class="mb-1 pb-1">Need Assistance?</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                        </div>
                                        <!-- End .feature-box-content -->
                                    </div>
                                    <!-- End .feature-box -->
                                </div>
                                <!-- End .col-md-4 -->

                                <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-credit-card"></i>

                                        <div class="feature-box-content p-0">
                                            <h3 class="mb-0 pb-1">Secured Payment</h3>
                                            <h5 class="mb-1 pb-1">Safe & Fast</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                        </div>
                                        <!-- End .feature-box-content -->
                                    </div>
                                    <!-- End .feature-box -->
                                </div>
                                <!-- End .col-md-4 -->

                                <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-action-undo"></i>

                                        <div class="feature-box-content p-0">
                                            <h3 class="mb-0 pb-1">Returns</h3>
                                            <h5 class="mb-1 pb-1">Easy & Free</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                        </div>
                                        <!-- End .feature-box-content -->
                                    </div>
                                    <!-- End .feature-box -->
                                </div>
                                <!-- End .col-md-4 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .feature-boxes-container -->
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                    <aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
                        <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
                            <h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

                            <nav class="side-nav">
                                <ul class="menu menu-vertical sf-arrows">
                                    <li class="active"><a href="demo1.html"><i class="icon-home"></i>Home</a></li>
                                    <li>
                                        <a href="demo1-shop.html" class="sf-with-ul"><i
                                                class="sicon-badge"></i>Categories</a>
                                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <a href="#" class="nolink pl-0">VARIATION 1</a>
                                                    <ul class="submenu">
                                                        <li><a href="category.html">Fullwidth Banner</a></li>
                                                        <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                                Banner</a>
                                                        </li>
                                                        <li><a href="category-banner-boxed-image.html">Boxed Image
                                                                Banner</a>
                                                        </li>
                                                        <li><a href="demo1-shop.html">Left Sidebar</a></li>
                                                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a href="category-off-canvas.html">Off Canvas Filter</a>
                                                        </li>
                                                        <li><a href="category-horizontal-filter1.html">Horizontal
                                                                Filter1</a>
                                                        </li>
                                                        <li><a href="category-horizontal-filter2.html">Horizontal
                                                                Filter2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                               
                                                <div class="col-lg-4 p-0">
                                                    <div class="menu-banner">
                                                        <figure>
                                                            <img src="assetsTwo/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4>
                                                                <span class="">UP TO</span><br />
                                                                <b class="">50%</b>
                                                                <i>OFF</i>
                                                            </h4>
                                                            <a href="demo1-shop.html" class="btn btn-sm btn-dark">SHOP
                                                                NOW</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .megamenu -->
                                    </li>
   
                                    <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                                    <li><a href="#"><i class="icon-cat-gift"></i>Special Offer!<span
                                    class="tip tip-hot">Hot</span></a></li>
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- End .side-menu-container -->

                        <div class="widget widget-banners px-3 pb-3 text-center">
                            <div class="owl-carousel owl-theme dots-small">
                                <div class="banner d-flex flex-column align-items-center">
                                    <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase">
                                        <em>Sale</em>Many Item
                                    </h3>

                                    <h4 class="sale-text text-uppercase"><small>UP
                                            TO</small>50<sup>%</sup><sub>off</sub></h4>
                                    <p>Bags, Clothing, T-Shirts, Shoes, Watches and much more...</p>
                                    <a href="demo1-shop.html" class="btn btn-dark btn-md">View Sale</a>
                                </div>
                                <!-- End .banner -->

                                <div class="banner banner4">
                                    <figure>
                                        <img src="assetsTwo/images/demoes/demo1/banners/banner-7.jpg" alt="banner">
                                    </figure>

                                    <div class="banner-layer">
                                        <div class="coupon-sale-content">
                                            <h4>DRONE + CAMERAS</h4>
                                            <h5 class="coupon-sale-text text-gray ls-n-10 p-0 font1"><i>UP
                                                    TO</i><b class="text-white bg-dark font1">$100</b> OFF</h5>
                                            <p class="ls-0">Top Brands and Models!</p>
                                            <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">VIEW
                                                SALE</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .banner -->

                                <div class="banner banner5">
                                    <h4>HEADPHONES SALE</h4>

                                    <figure class="m-b-3">
                                        <img src="assetsTwo/images/demoes/demo1/banners/banner-8.jpg" alt="banner">
                                    </figure>

                                    <div class="banner-layer">
                                        <div class="coupon-sale-content">
                                            <h5 class="coupon-sale-text ls-n-10 p-0 font1"><i>UP
                                                    TO</i><b class="text-white bg-secondary font1">50%</b> OFF</h5>
                                            <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">VIEW
                                                SALE</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .banner -->
                            </div>
                            <!-- End .banner-slider -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-newsletters bg-gray text-center">
                            <h3 class="widget-title text-uppercase m-b-3">Subscribe Newsletter</h3>
                            <p class="mb-2">Get all the latest information on Events, Sales and Offers. </p>
                            <form action="#">
                                <div class="form-group position-relative sicon-envolope-letter">
                                    <input type="email" class="form-control" name="newsletter-email" placeholder="Email address">
                                </div>
                                <!-- Endd .form-group -->
                                <input type="submit" class="btn btn-primary btn-md" value="Subscribe">
                            </form>
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-testimonials">
                            <div class="owl-carousel owl-theme dots-left dots-small">
                                <div class="testimonial">
                                    <div class="testimonial-owner">
                                        <figure>
                                            <img src="assetsTwo/images/clients/client-1.jpg" alt="client">
                                        </figure>

                                        <div>
                                            <h4 class="testimonial-title">john Smith</h4>
                                            <span>CEO &amp; Founder</span>
                                        </div>
                                    </div>
                                    <!-- End .testimonial-owner -->

                                    <blockquote class="ml-4 pr-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- End .testimonial -->

                                <div class="testimonial">
                                    <div class="testimonial-owner">
                                        <figure>
                                            <img src="assetsTwo/images/clients/client-2.jpg" alt="client">
                                        </figure>

                                        <div>
                                            <h4 class="testimonial-title">Dae Smith</h4>
                                            <span>CEO &amp; Founder</span>
                                        </div>
                                    </div>
                                    <!-- End .testimonial-owner -->

                                    <blockquote class="ml-4 pr-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- End .testimonial -->

                                <div class="testimonial">
                                    <div class="testimonial-owner">
                                        <figure>
                                            <img src="assetsTwo/images/clients/client-3.jpg" alt="client">
                                        </figure>

                                        <div>
                                            <h4 class="testimonial-title">John Doe</h4>
                                            <span>CEO &amp; Founder</span>
                                        </div>
                                    </div>
                                    <!-- End .testimonial-owner -->

                                    <blockquote class="ml-4 pr-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- End .testimonial -->
                            </div>
                            <!-- End .testimonials-slider -->
                        </div>
                        <!-- End .widget -->

                        <!-- End .widget -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->
        @include('cPartials.footerOne')

</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 09:52:50 GMT -->
</html>