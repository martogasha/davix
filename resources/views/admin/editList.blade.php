<!doctype html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:13:21 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- Title -->
    <title>Davix - Stock</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{asset('asset/fonts/style.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="{{asset('asset/vendor/daterange/daterange.css')}}" />

    <!-- Gallery css -->
    <link rel="stylesheet" href="{{asset('asset/vendor/gallery/gallery.css')}}">

</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Loading ends -->


<!-- *************
    ************ Header section start *************
************* -->

<!-- Header start -->
<header class="header">
    <div class="logo-wrapper">
        <a href="index.html" class="logo">
            <img src="img/logo.png" alt="Wafi Admin Dashboard" />
        </a>
        <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick Links">
            <i class="icon-menu1"></i>
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-box"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Tasks (05)
                    </div>
                    <ul class="header-tasks">
                        <li>
                            <p>#48 - Dashboard UI<span>90%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">90% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#95 - Alignment Fix<span>60%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>#7 - Broken Button<span>40%</span></p>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications (40)
                    </div>
                    <ul class="header-notifications">
                        <li>
                            <a href="#">
                                <div class="user-img away">
                                    <img src="{{asset('asset/img/user21.png')}}" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Abbott</div>
                                    <div class="noti-details">Membership has been ended.</div>
                                    <div class="noti-date">Oct 20, 07:30 pm</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img busy">
                                    <img src="{{asset('asset/img/user10.png')}}" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Braxten</div>
                                    <div class="noti-details">Approved new design.</div>
                                    <div class="noti-date">Oct 10, 12:00 am</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img online">
                                    <img src="{{asset('asset/img/user6.png')}}" alt="User" />
                                </div>
                                <div class="details">
                                    <div class="user-title">Larkyn</div>
                                    <div class="noti-details">Check out every table in detail.</div>
                                    <div class="noti-date">Oct 15, 04:00 pm</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">{{\Illuminate\Support\Facades\Auth::user()->user_name}}</span>
                    <span class="avatar">ZF<span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="{{asset('asset/img/user.png')}}" alt="Admin Template" />
                            </div>
                            <h5>{{\Illuminate\Support\Facades\Auth::user()->user_name}}</h5>
                            <p>Admin</p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                        <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick Settings">
                    <i class="icon-list"></i>
                </a>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<div class="screen-overlay"></div>
<!-- Screen overlay end -->

<!-- Quicklinks box start -->
<div class="quick-links-box">
    <div class="quick-links-header">
        Quick Links
        <a href="#" class="quick-links-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>

    <div class="quick-links-wrapper">
        <div class="fullHeight">
            <div class="quick-links-body">
                <div class="container-fluid p-0">
                    <div class="row less-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="documents.html" class="quick-tile blue">
                                <i class="icon-file-text"></i>
                                Documents
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="crm-dashboard.html" class="quick-tile secondary">
                                <i class="icon-pie-chart1"></i>
                                CRM
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="ecommerce-dashboard.html" class="quick-tile blue">
                                <i class="icon-shopping-cart1"></i>
                                Ecommerce
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <a href="gallery2.html" class="quick-tile photos lg">
                                Photos
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="tasks.html" class="quick-tile">
                                <i class="icon-check-circle"></i>
                                Tasks
                            </a>
                            <a href="calendar-external-draggable.html" class="quick-tile blue">
                                <i class="icon-calendar1"></i>
                                Events
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="chat.html" class="quick-tile blue">
                                <i class="icon-message-circle"></i>
                                Chat
                            </a>
                            <a href="default-layout.html" class="quick-tile">
                                <i class="icon-grid"></i>
                                Layout
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="custom-alerts.html" class="quick-tile secondary">
                                <i class="icon-alert-triangle"></i>
                                Alerts
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="google-maps.html" class="quick-tile blue">
                                <i class="icon-map-pin"></i>
                                Maps
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="https://www.gmail.com/" target="_blank" class="quick-tile white">
                                <i class="icon-drafts"></i>
                                Gmail
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="https://www.youtube.com/" target="_blank" class="quick-tile secondary">
                                <i class="icon-youtube"></i>
                                Youtube
                            </a>
                        </div>
                    </div>
                    <div class="row less-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="user-profile.html" class="quick-tile">
                                <i class="icon-account_circle"></i>
                                Profile
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="contacts.html" class="quick-tile">
                                <i class="icon-phone"></i>
                                Contacts
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="account-settings.html" class="quick-tile">
                                <i class="icon-settings1"></i>
                                Settings
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                            <a href="login.html" class="quick-tile">
                                <i class="icon-lock2"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quicklinks box end -->

<!-- Quick settings start -->
<div class="quick-settings-box">
    <div class="quick-settings-header">
        <div class="date-container">Today <span class="date" id="today-date"></span></div>
        <a href="#" class="quick-settings-box-close">
            <i class="icon-circle-with-cross"></i>
        </a>
    </div>
    <div class="quick-settings-body">
        <div class="fullHeight">
            <div class="quick-setting-list">
                <h6 class="title">Events</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Product Launch</div>
                        <div class="list-location">10:00 AM</div>
                    </li>
                    <li>
                        <div class="list-title">Team Meeting</div>
                        <div class="list-location">01:30 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Q&A Session</div>
                        <div class="list-location">02:30 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Notes</h6>
                <ul class="list-items">
                    <li>
                        <div class="list-title">Refreshing the list</div>
                        <div class="list-location">03:15 PM</div>
                    </li>
                    <li>
                        <div class="list-title">Not able to click on button</div>
                        <div class="list-location">03:18 PM</div>
                    </li>
                </ul>
            </div>
            <div class="quick-setting-list">
                <h6 class="title">Quick Settings</h6>
                <ul class="set-priority-list">
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="systemUpdates">
                            <label class="custom-control-label" for="systemUpdates">System Updates</label>
                        </div>
                    </li>
                    <li>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="noti">
                            <label class="custom-control-label" for="noti">Notifications</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Quick settings end -->

<!-- *************
    ************ Header section end *************
************* -->


<div class="container-fluid">


    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i></i>
						<i></i>
						<i></i>
					</span>
        </button>
        < <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active-page" href="{{url('stock')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Stock
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('adminGallery')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Gallery
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin/order')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Orders
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin/mpesaTransactions')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Mpesa
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('orderDetails')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Order Details
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('rating')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Product Rating
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end -->


    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">


        <!-- Page header start -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Edit Stock</li>

            </ol>

            <ul class="app-actions">
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                        <i class="icon-print"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                        <i class="icon-cloud_download"></i>
                    </a>
                </li>
            </ul>
        </div>
        @include('flash-message')
        <!-- Page header end -->


        <!-- Content wrapper start -->
        <div class="content-wrapper">


            <!-- Gallery start -->
            <div class="baguetteBoxThree gallery">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="{{asset('uploads/product/'.$product->product_image)}}" class="effects">
                            <img src="{{asset('uploads/product/'.$product->product_image)}}" class="img-fluid" alt="Wafi Admin">
                            <div class="overlay">
                                <span class="expand">+</span>
                            </div>
                        </a>
                            <form action="{{url('eProduct')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{$product->id}}" name="prodId">
                            <div class="form-group">
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Product Name:</label>
                                <input type="text" class="form-control" value="{{$product->product_name}}" name="name" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Product Description:</label>
                                <textarea class="form-control" name="desc" id="message-text">{{$product->product_desc}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Product Price:</label>
                                <input type="text" class="form-control" value="{{$product->product_price}}" name="price" id="recipient-name">
                            </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Product Price Cancel:</label>
                                    <input type="text" class="form-control" value="{{$product->price}}" name="priceC" id="recipient-name">
                                </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Product Category:</label>
                                <select class="form-control" name="category" id="exampleFormControlSelect1">
                                    <option value="{{$product->product_category}}">{{$product->product_category}}</option>
                                    <option value="computer">Computer Accessories</option>
                                    <option value="networking">Networking</option>
                                    <option value="office">Office Tools and Stationery</option>
                                    <option value="toner">Toner and cartridges/inks</option>
                                    <option value="projector">Projectors</option>
                                    <option value="printer">Printers</option>
                                    <option value="cctv">CCTV Systems</option>
                                    <option value="laptop">Laptop</option>
                                    <option value="hardDisk">Storage</option>
                                    <option value="software">Softwares</option>
                                    <option value="ups">UPS Backups</option>
                                </select>
                            </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Product Brand:</label>
                                    <select class="form-control" name="category1" id="exampleFormControlSelect1">
                                        <option value="{{$product->product_category1}}">{{$product->product_category1}}</option>
                                        <option value="HP">HP</option>
                                        <option value="SAMSUNG">SAMSUNG</option>
                                        <option value="ANDROID">ANDROID</option>
                                        <option value="ACER">ACER</option>
                                        <option value="LG">LG</option>
                                        <option value="APPLE">APPLE</option>
                                        <option value="TOSHIBA">TOSHIBA</option>
                                        <option value="ASUS">ASUS</option>
                                        <option value="DELL">DELL</option>
                                        <option value="LENOVO">LENOVO</option>
                                        <option value="MSI">MSI</option>
                                        <option value="MICROSOFT">MICROSOFT</option>
                                        <option value="FIJITSU">FUJITSU</option>
                                        <option value="SHUTTLE">SHUTTLE</option>
                                        <option value="IBM">IBM</option>
                                        <option value="GATEWAY">GATEWAY</option>
                                        <option value="INTEL">INTEL</option>
                                        <option value="GIGABYTE">GIGABYTE</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Edit</button>

                        </form>
                    </div>
                    @if($product->status==0)
                    <a href="{{url('status',$product->id)}}"><button class="btn btn-info">
                            In Stock
                        </button></a>
                    @else
                        <a href="{{url('status',$product->id)}}"><button class="btn btn-danger">
                                Out of Stock
                            </button></a>
                        @endif
                </div>
                <!-- Row end -->
            </div>
            <!-- Gallery end -->


        </div>
        <!-- Content wrapper end -->


    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

    <!-- Footer start -->
    <footer class="main-footer">© Davix 2020</footer>
    <!-- Footer end -->

</div>
<!-- Modal #2 -->

<!-- Button trigger modal -->


<!-- Modal -->









<!-- Modal #1 -->

<!-- Button trigger modal -->

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset/js/moment.js')}}"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->
<!-- Slimscroll JS -->
<script src="{{asset('asset/vendor/slimscroll/slimscroll.min.js')}}"></script>
<script src="{{asset('asset/vendor/slimscroll/custom-scrollbar.js')}}"></script>

<!-- Daterange -->
<script src="{{asset('asset/vendor/daterange/daterange.js')}}"></script>
<script src="{{asset('asset/vendor/daterange/custom-daterange.js')}}"></script>

<!-- Gallery JS -->
<script src="{{asset('asset/vendor/gallery/baguetteBox.js')}}" async></script>
<script src="{{asset('asset/vendor/gallery/plugins.js')}}" async></script>
<script src="{{asset('asset/vendor/gallery/custom-gallery.js')}}" async></script>

<!-- Main Js Required -->
<script src="{{asset('asset/js/main.js')}}"></script>

</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:13:29 GMT -->
</html>
