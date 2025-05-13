<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from htmldemo.net/rozer/rozer/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Mar 2025 12:06:29 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Mylonix – Electronics eCommerce</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets1/images/favicon/favicon.png" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />

        <!-- CSS
  ============================================ -->

            <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <!-- <link rel="stylesheet" href="assets1/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets1/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="assets1/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="assets1/css/vendor/font-awesome.min.css"> -->

            <!-- Plugins CSS (All Plugins Files) -->
         <!-- <link rel="stylesheet" href="assets1/css/plugins/animate.css">
        <link rel="stylesheet" href="assets1/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets1/css/plugins/swiper.css">  -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="assets1/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="assets1/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="assets1/css/style.min.css">

        <!-- Main Style CSS -->
        <!-- <link rel="stylesheet" href="assets1/css/style.css" /> -->
    </head>

    <body>
        <!-- Header Section Start From Here -->
        <header class="header-wrapper">
            <!-- Header Nav Start -->
            <div class="header-nav">
                <div class="container">
                    <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                        <div class="header-static-nav">
                            <p>Welcome you to Mylonix Store!</p>
                        </div>
                        <div class="header-menu-nav">
                            <ul class="menu-nav">
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setting <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                            <li><a href="my-account.html">My account</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="login.html">Sign in</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KSH <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                            <li><a href="#">EUR €</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="pr-0">
                                    <div class="">
                                        <button type="button" id="dropdownMenuButton-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets1/images/flag/1.jpg" alt="" /> English <i class="ion-ios-arrow-down"></i>
                                        </button>

                                
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-top bg-white ptb-30px d-xl-block d-none sticky-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="mobile-menu-toggle home-2">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="logo">
                                <a href="{{url('internet')}}"><img class="img-responsive" src="assets1/images/logo/L.jpg" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body mr-120px">
                                    <form class="d-flex" action="#">
                                      
                                        <input type="text" placeholder="Enter your search key ... " />
                                        <button><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                                <!--Cart info Start -->
                                <div class="header-tools d-flex">
                                    <div class="cart-info d-flex align-self-center">
                                        <a href="compare.html" class="shuffle" data-number=""><i class="icon-shuffle"></i></a>
                                        <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number=""><i class="icon-heart"></i></a>
                                        <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}"><i class="icon-bag"></i><span></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-menu  d-xl-block d-none bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 custom-col-3">
                            <div class="header-menu-vertical bg-blue">
                                <h4 class="menu-title be-af-none">All Cattegories</h4>
                                <ul class="menu-content display-block">
                                    <li class="menu-item">
                                        <a href="#">Electronics <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu flex-wrap">
                                            <li>
                                                <a href="#">
                                                    <span> <strong> Accessories & Parts</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Chargers</a></li>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Electronic Cigarettes</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Camera & Photo</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Camcorders</a></li>
                                                    <li><a href="#">Camera Drones</a></li>
                                                    <li><a href="#">Action Cameras</a></li>
                                                    <li><a href="#">Photo Studio Supplie</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Smart Electronics</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Wearable Devices</a></li>
                                                    <li><a href="#">Smart Home Appliances</a></li>
                                                    <li><a href="#">Smart Remote Controls</a></li>
                                                    <li><a href="#">Smart Watches</a></li>
                                                    <li><a href="#">Smart Wristbands</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Audio & Video</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Televisions</a></li>
                                                    <li><a href="#">TV Receivers</a></li>
                                                    <li><a href="#">Projectors</a></li>
                                                    <li><a href="#">Audio Amplifier Boards</a></li>
                                                    <li><a href="#">TV Sticks</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><strong>Portable Audio & Video</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Headphones</a></li>
                                                    <li><a href="#">Speakers</a></li>
                                                    <li><a href="#">MP3 Players</a></li>
                                                    <li><a href="#">VR/AR Devices</a></li>
                                                    <li><a href="#">Microphones</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <img src="assets1/images/menu-image/banner-mega1.jpg" alt="" />
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Video Games <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Handheld Game Players</a></li>
                                                    <li><a href="#">Game Controllers</a></li>
                                                    <li><a href="#">Joysticks</a></li>
                                                    <li><a href="#">Stickers</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item"><a href="#">Televisions</a></li>
                                    <li class="menu-item"><a href="#">Digital Cameras</a></li>
                                    <li class="menu-item"><a href="#">Headphones</a></li>
                                    <li class="menu-item"><a href="#"> Wearable Devices</a></li>
                                    <li class="menu-item"><a href="#"> Smart Watches</a></li>
                                    <li class="menu-item"><a href="#"> Game Controllers</a></li>
                                    <li class="menu-item"><a href="#"> Smart Home Appliances</a></li>
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-7 custom-col custom-col-3">
                        <!-- Slider Start -->
                            <div class="slider-area slider-height-2">
                                <div class="hero-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(assets1/images/slider-image/sample-3.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                                    <span class="animated color-white">GALAXY WATCH</span>
                                                    <h1 class="animated color-white">
                                                        Pre-Order <br />
                                                        <strong>Exclusive</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(assets1/images/slider-image/sample-4.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                                    <span class="animated color-white">BT HEADPHONE</span>
                                                    <h1 class="animated color-white">
                                                        Headset <br />
                                                        <strong>Hyper X</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                </div>
                            </div>
                            <!-- Slider End -->
                        </div>
                        <div class="col-lg-3">
                            <div class="banner-area banner-area-2">
                                <div class="banner-wrapper mb-15px">
                                    <a href="shop-4-column.html"><img src="assets1/images/banner-image/9.jpg" alt="" /></a>
                                </div>
                                <div class="banner-wrapper">
                                    <a href="shop-4-column.html"><img src="assets1/images/banner-image/10.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
                <!-- Static Area Start -->
                <div class="static-area  ptb-40px">
                    <div class="container">
                        <div class="static-area-wrap">
                            <div class="row">
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Free Shipping</h4>
                                            <p>On all orders over $75.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Free Returns</h4>
                                            <p>Returns are free within 9 days</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Support 24/7</h4>
                                            <p>Contact us 24 hours a day</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>100% Payment Secure</h4>
                                            <p>Your payment are safe with us.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Static Area End -->
            </div>
            <!-- header menu -->
        </header>
        <!-- Header Section End Here -->    

        <!-- Mobile Header Section Start -->
    <div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{url('internet')}}"><img class="img-responsive" src="assets1/images/logo/L.jpg" alt="logo.jpg" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <a href="compare.html" class="shuffle d-xs-none" data-number="3"><i class="icon-shuffle"></i></a>
                            <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number="3"><i class="icon-heart"></i></a>
                            <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}"><i class="icon-bag"></i><span></span></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>

    <!-- Search Category Start -->
    <div class="mobile-search-area d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <form class="d-flex" action="#">
                           
                            <input type="text" placeholder="Enter your search key ... " />
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <div class="mobile-category-nav d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li class="menu-item-has-children menu-item-has-children-1">
                                    <a href="#">Accessories & Parts<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-1">
                                        <li><a href="#">Cables & Adapters</a></li>
                                        <li><a href="#">Batteries</a></li>
                                        <li><a href="#">Chargers</a></li>
                                        <li><a href="#">Bags & Cases</a></li>
                                        <li><a href="#">Electronic Cigarettes</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-2">
                                    <a href="#">Camera & Photo<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-2">
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Camcorders</a></li>
                                        <li><a href="#">Camera Drones</a></li>
                                        <li><a href="#">Action Cameras</a></li>
                                        <li><a href="#">Photo Studio Supplies</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-3">
                                    <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-3">
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Smart Wristbands</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-4">
                                    <a href="#">Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-4">
                                        <li><a href="#">Televisions</a></li>
                                        <li><a href="#">TV Receivers</a></li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">Audio Amplifier Boards</a></li>
                                        <li><a href="#">TV Sticks</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-5">
                                    <a href="#">Portable Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-5">
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Speakers</a></li>
                                        <li><a href="#">MP3 Players</a></li>
                                        <li><a href="#">VR/AR Devices</a></li>
                                        <li><a href="#">Microphones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Wearable Devices</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Game Controllers</a></li>
                                <li><a href="#"> Smart Home Appliances</a></li>
                                <li class="hidden"><a href="#">Projectors</a></li>
                                <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty" aria-hidden="true"></i> More Categories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets1/images/product-image/1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets1/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets1/images/product-image/3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                @if(isset($products))
                @foreach($products as $product)
                    <li>
                        <a href="single-product.html" class="image"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">{{$product['item']['product_name']}}</a>
                            <span class="quantity-price">{{$product['quantity']}} x <span class="amount">  Ksh: {{$product['item']['product_price']}}</span></span>
                            <a href="{{url('cartReduceByOne',$product['item']['id'])}}" class="remove">×</a>
                        </div>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">Ksh: {{$totalPrice}}</span>
                </div>
                <div class="buttons">
                    <a href="{{url('cartO')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="{{url('internet')}}"><span class="menu-text">Home</span></a>
                    
                    </li>
                    <li><a href="{{url('shopCartegory')}}"><span class="menu-text">SHOP</span></a>
                    
                    </li>
                    <li><a href="{{url('blogPost')}}"><span class="menu-text">BLOG</span></a>
                    
                    </li>
                   
                    <li><a href="{{url('contacts')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="offcanvas-buttons mt-30px">
                <div class="header-tools d-flex">
                    <div class="cart-info d-flex align-self-center">
                        <a href="my-account.html" class="user"><i class="icon-user"></i></a>
                        <a href="wishlist.html" data-number=""><i class="icon-heart"></i></a>
                        <a href="{{url('cartO')}}" data-number="{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}"><i class="icon-bag"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li>
                        <a href="#"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>


            <!-- Header Nav End -->
            <div class="header-menu  d-xl-none bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                        <!-- Slider Start -->
                            <div class="slider-area slider-height-2 mb-md-30px mb-lm-30px mb-sm-30px">
                                <div class="hero-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(assets1/images/slider-image/sample-3.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                                    <span class="animated color-white">GALAXY WATCH</span>
                                                    <h1 class="animated color-white">
                                                        Pre-Order <br />
                                                        <strong>Exclusive</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(assets1/images/slider-image/sample-4.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                                    <span class="animated color-white">BT HEADPHONE</span>
                                                    <h1 class="animated color-white">
                                                        Headset <br />
                                                        <strong>Hyper X</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                </div>
                            </div>
                            <!-- Slider End -->
                        </div>
                        <div class="col-lg-3">
                            <div class="banner-area">
                                <div class="banner-wrapper mb-md-30px mb-lm-30px mb-sm-30px">
                                    <a href="shop-4-column.html"><img src="assets1/images/banner-image/9.jpg" alt="" /></a>
                                </div>
                                <div class="banner-wrapper mb-0px">
                                    <a href="shop-4-column.html"><img src="assets1/images/banner-image/10.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
                <!-- Static Area Start -->
                <div class="static-area  ptb-40px">
                    <div class="container">
                        <div class="static-area-wrap">
                            <div class="row">
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Free Shipping</h4>
                                            <p>On all orders over $75.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Free Returns</h4>
                                            <p>Returns are free within 9 days</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Support 24/7</h4>
                                            <p>Contact us 24 hours a day</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                    <div class="single-static">
                                        <img src="assets1/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>100% Payment Secure</h4>
                                            <p>Your payment are safe with us.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Static Area End -->
            </div>
            <!-- header menu -->
        <!-- Feature Area start -->
        <div class="feature-area mt-60px mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">Best Selling Products</h2>
                            <a href="{{url('shopCartegory')}}" style="text-align:right;">View More</a>

                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        <!-- Single Item -->
                        @foreach($bests as $best)
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="{{url('productDetails',$best->id)}}" class="thumbnail">
                                        <img class="first-img" src="{{asset('uploads/product/'.$best->product_image)}}" alt="" />
                                        <img class="second-img" src="{{asset('uploads/product/'.$best->product_image)}}" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="icon-magnifier icons"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>{{$best->product_name}}</span></a>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">Ksh {{$best->product_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                            
                            </article>
                        </div>
                        @endforeach

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area mt-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets1/images/banner-image/4.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->   
        <!-- New Arrivals area start -->
        <div class="feature-area mt-60px mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">New Arrivals</h2>
                            <a href="{{url('shopCartegory')}}" style="text-align:right;">View More</a>

                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        <!-- Single Item -->
                        @foreach($bests as $best)
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="{{url('productDetails',$best->id)}}" class="thumbnail">
                                        <img class="first-img" src="{{asset('uploads/product/'.$best->product_image)}}" alt="" />
                                        <img class="second-img" src="{{asset('uploads/product/'.$best->product_image)}}" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="icon-magnifier icons"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>{{$best->product_name}}</span></a>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">Ksh {{$best->product_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                               
                            </article>
                        </div>
                        @endforeach

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
            <!-- New Arrivals area end -->
        <!-- Banner Area Start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets1/images/banner-image/7.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="assets1/images/banner-image/8.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Category Tab Area Start -->
        <div class="feature-area mt-60px mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">Smart Electronics</h2>
                            <a href="{{url('shopCartegory')}}" style="text-align:right;">View More</a>

                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        <!-- Single Item -->
                        @foreach($bests as $best)
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="{{url('productDetails',$best->id)}}" class="thumbnail">
                                        <img class="first-img" src="{{asset('uploads/product/'.$best->product_image)}}" alt="" />
                                        <img class="second-img" src="{{asset('uploads/product/'.$best->product_image)}}" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="icon-magnifier icons"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>{{$best->product_name}}</span></a>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">Ksh {{$best->product_price}}</li>
                                        </ul>
                                    </div>
                                </div>
                             
                            </article>
                        </div>
                        @endforeach

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Tab Area end -->
        <!-- category Area Start -->
       
        <!-- category Area End -->

            <!-- Recently Add area start -->
           
            <!-- Recently Add area end -->
            <!-- Brand area start -->
            <div class="brand-area mb-60px">
                <div class="container">
                    <div class="brand-slider slider-nav-style-1  slider-nav-style-2">
                        <div class="brand-slider-wrapper swiper-wrapper">
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/1.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/2.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/3.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/4.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/5.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/1.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets1/images/brand-logo/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand area end -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">ABOUT US</h4>
                                    <p class="text-infor">We are a team of designers and developers that create high quality HTML template</p>
                                    <div class="need-help">
                                        <p class="phone-info">
                                            NEED HELP?
                                            <span>
                                                0123456789 <br />
                                                0123456789
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Information</h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Secure Payment</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Stores</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">CUSTOM LINKS</h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="#">Legal Notice</a></li>
                                            <li><a href="#">Prices Drop</a></li>
                                            <li><a href="#">New Products</a></li>
                                            <li><a href="#">Best Sales</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">NEWSLETTER</h4>
                                    <div class="subscrib-text">
                                        <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form
                                            id="mc-embedded-subscribe-form"
                                            class="validate"
                                            novalidate=""
                                            target="_blank"
                                            name="mc-embedded-subscribe-form"
                                            method="post"
                                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        >
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true" style="position: absolute; left: -5000px;">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                
								<p class="copy-text"> © 2021 <strong>Rozer</strong> Made With <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> By <a class="company-name" href="https://hasthemes.com/">
                                <strong> HasThemes</strong></a>.</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <img class="payment-img" src="assets1/images/icons/payment.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                                 <!-- Swiper -->
                                  <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets1/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <!-- <script src="assets1/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets1/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets11/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="assets1/js/vendor/modernizr-3.11.2.min.js"></script> -->

            <!-- Plugins JS -->
         <!-- <script src="assets1/js/plugins/jquery-ui.min.js"></script>
        <script src="assets1/js/plugins/swiper.min.js"></script>
        <script src="assets1/js/plugins/countdown.js"></script>
        <script src="assets1/js/plugins/scrollup.js"></script>
        <script src="assets1/js/plugins/elevateZoom.js"></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script src="assets1/js/vendor/vendor.min.js"></script>
        <script src="assets1/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="assets1/js/main.js"></script>
    </body>

<!-- Mirrored from htmldemo.net/rozer/rozer/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Mar 2025 12:06:39 GMT -->
</html>
