
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
                                        <button type="button" id="dropdownMenuButton-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD $ <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                            <li><a href="#">EUR €</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="pr-0">
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets1/images/flag/1.jpg" alt="" /> English <i class="ion-ios-arrow-down"></i>
                                        </button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-3">
                                            <li>
                                                <a href="#"><img src="assets1/images/flag/1.jpg" alt="" /> English</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="assets1/images/flag/2.jpg" alt="" /> Français</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-top bg-white ptb-30px d-xl-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo">
                                <a href="{{url('internet')}}"><img class="img-responsive" src="assets1/images/logo/L.jpg" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-10 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body">
                                    <form class="d-flex" action="#">
                                       
                                        <input type="text" placeholder="Enter your search key ... " />
                                        <button><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                                <div class="contact-link">
                                    <div class="phone">
                                        <p>Call us:</p>
                                        <a href="tel:(+800)345678">(+800)345678</a>
                                    </div>
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
            <div class="header-menu bg-blue sticky-nav d-xl-block d-none padding-0px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 custom-col-2">
                            <div class="header-menu-vertical">
                                <h4 class="menu-title">All Cattegories</h4>
                                <ul class="menu-content display-none">
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
                        <div class="col-lg-9 custom-col-2">
                            <div class="header-horizontal-menu">
                            <ul class="menu-content">
                                    <li class="active menu-dropdown">
                                        <a href="{{url('internet')}}">Home</a>
                                    
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="{{url('shopCartegory')}}">Shop</a>
                                
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="{{url('blogPost')}}">Blog</a>
                                
                                    </li>
                                    
                                    <li><a href="{{url('contacts')}}">contact Us</a></li>
                                </ul>
                            </div>
                            <!-- header horizontal menu -->
                            <div class="intro-text-shipping text-end">
                                <div class="free-ship">Free Shipping on Orders $50+</div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
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
                            <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number=""><i class="icon-heart"></i></a>
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
                        <a href="single-product.html" class="image"><img src="assets1/images/product-image/7.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets1/images/product-image/9.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets1/images/product-image/8.jpg" alt="Cart product Image"></a>
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
                    @if(isset($totalPrice))
                    <span class="amount">Ksh: {{$totalPrice}}</span>
                    @endif

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