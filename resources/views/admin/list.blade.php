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
            <img src="{{asset('images/dlogo.jpg')}}" alt="Wafi Admin Dashboard" />
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
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label"></span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">{{\Illuminate\Support\Facades\Auth::user()->user_name}}</span>
                    <span class="avatar"><span class="status busy"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="asset/img/user55.jpeg" alt="Admin Template" />
                            </div>
                            <h5>{{\Illuminate\Support\Facades\Auth::user()->user_name}}</h5>
                            <p>Admin</p>
                        </div>
                        <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                        <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                        <form action="{{route('logout')}}" method="post" id="logout">
                            @csrf
                            <a href="javascript:document.getElementById('logout').submit()"><i class="icon-log-out1"></i> Sign Out</a>
                        </form>
                    </div>
                </div>
            </li>

        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->

<!-- Screen overlay start -->
<!-- Screen overlay end -->

<!-- Quicklinks box start -->
<!-- Quicklinks box end -->

<!-- Quick settings start -->
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
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('admin/blog')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-book-open nav-icon"></i>
                        Blog
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
                <li class="breadcrumb-item active">Stock</li>
                <li>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#customModalTwo">
                        Add Product
                    </button>
                </li>
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
                    @foreach($products as $product)
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <a href="{{asset('uploads/product/'.$product->product_image)}}" class="effects">
                            <img src="{{asset('uploads/product/'.$product->product_image)}}" class="img-fluid" alt="Wafi Admin">
                            <div class="overlay">
                                <span class="expand">+</span>
                            </div>
                        </a>
                        <h6>{{$product->product_name}}</h6>
                        <h4>Ksh:{{$product->product_price}}</h4>
                        <h5 class="text-muted"><s>Ksh:{{$product->price}}</s></h5>

                        <div class="row">
                        <a href="{{url('editProductDetails',$product->id)}}"><button class="btn btn-info">
                            Edit
                            </button></a>
                        <a href="{{url('deleteProduct',$product->id)}}"><button class="btn btn-danger">
                                Delete
                            </button></a>
                        </div>

                    </div>
                    @endforeach

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
<div class="modal fade" id="customModalTwo" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('stock.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="customModalTwoLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Name:</label>
                        <input type="text" class="form-control" name="name" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Product Description:</label>
                        <textarea class="form-control" name="desc" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Price:</label>
                        <input type="text" class="form-control" name="price" id="recipient-name">
                    </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Product Price Cancel:</label>
                    <input type="text" class="form-control" name="priceC" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Product Category:</label>
                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                        <option value="bestSelling">Best Selling</option>
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
                        <option>Select Brand</option>
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



            </div>
            <div class="modal-footer custom">

                <div class="left-side">
                    <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="submit" class="btn btn-link success">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customModalTwoLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('eProduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Name:</label>
                        <input type="text" class="form-control" name="name" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Product Description:</label>
                        <textarea class="form-control" name="desc" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Price:</label>
                        <input type="text" class="form-control" name="price" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Category:</label>
                        <select class="form-control" name="category" id="exampleFormControlSelect1">
                            <option value="home">Home</option>
                            <option value="phone">Phone</option>
                            <option value="laptop">Laptop</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer custom">

                <div class="left-side">
                    <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" class="btn btn-link success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>





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
