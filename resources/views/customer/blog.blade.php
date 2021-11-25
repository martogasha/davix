@include('cPartials.header')
    <title>Blog</title>
</div>


            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/pasta.jpg" alt="Bologna">
                                <div class="card-img-overlay">
                                    <a href="#" class="btn btn-light btn-sm">Cooking</a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Pasta with Prosciutto</h4>
                                    <small class="text-muted cat">
                                        <i class="far fa-clock text-info"></i> 30 minutes
                                        <i class="fas fa-users text-info"></i> 4 portions
                                    </small>
                                    <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
                                    <a href="#" class="btn btn-info">Read Recipe</a>
                                </div>
                                <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                    <div class="views">Oct 20, 12:45PM
                                    </div>
                                    <div class="stats">
                                        <i class="far fa-eye"></i> 1347
                                        <i class="far fa-comment"></i> 12
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
<style>
    body {
        padding: 2rem 0rem;
    }

    .card-img {
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .card-title {
        margin-bottom: 0.3rem;
    }

    .cat {
        display: inline-block;
        margin-bottom: 1rem;
    }

    .fa-users {
        margin-left: 1rem;
    }

    .card-footer {
        font-size: 0.8rem;
    }
</style>

<!-- Single Blog  -->


<!-- End Blog 	-->

<!-- =====  CONTAINER END  ===== -->

<!-- =====  FOOTER START  ===== -->
@include('cPartials.footer')
<!-- =====  FOOTER END  ===== -->


<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script> <script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>

</body>
<script>
    x = navigator.geolocation;
    x.getCurrentPosition(success, failure);
    function success(position){
        var myLat = -1.244494;
        var myLong = 36.664079;
        var coords = new google.maps.LatLng(myLat,myLong);
        var mapOptions = {
            zoom:9,
            center: coords,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({map:map, position:coords});
    }
    function failure(){
    }

</script>

<!-- Mirrored from html.lionode.com/fastro/f001/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:54 GMT -->
</html>
