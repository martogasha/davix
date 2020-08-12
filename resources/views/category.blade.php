@include('cPartials.header')
<title>Shop Category</title>

<div class="filter left-sidebar-widget mb_50">
                    <div class="heading-part mtb_20 ">
                        <h2 class="main_title">Refine Search</h2>
                    </div>
                    <div class="filter-block">
                        <p>
                            <label for="amount">Price range:</label>
                            <input type="text" id="amount" readonly>
                        </p>
                        <div id="slider-range" class="mtb_20"></div>
                        <div class="list-group">
                            <button type="button" class="btn">Refine Search</button>
                        </div>
                    </div>
                </div>
                <div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Products</h1>
                    <ul >
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Products</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="category-page-wrapper mb_30">
                    <div class="col-xs-6 sort-wrapper">
                        <label class="control-label" for="input-sort">Sort By :</label>
                        <div class="sort-inner">
                            <select id="input-sort" class="form-control">
                                <option value="ASC" selected="selected">Default</option>
                                <option value="ASC">Name (A - Z)</option>
                                <option value="DESC">Name (Z - A)</option>
                                <option value="ASC">Price (Low &gt; High)</option>
                                <option value="DESC">Price (High &gt; Low)</option>
                                <option value="DESC">Rating (Highest)</option>
                                <option value="ASC">Rating (Lowest)</option>
                                <option value="ASC">Model (A - Z)</option>
                                <option value="DESC">Model (Z - A)</option>
                            </select>
                        </div>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
                    <div class="col-xs-4 page-wrapper">
                        <label class="control-label" for="input-limit">Show :</label>
                        <div class="limit">
                            <select id="input-limit" class="form-control">
                                <option value="8" selected="selected">08</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
                    <div class="col-xs-2 text-right list-grid-wrapper">
                        <div class="btn-group btn-list-grid">
                            <button type="button" id="list-view" class="btn btn-default list-view" ></button>
                            <button type="button" id="grid-view" class="btn btn-default grid-view active" ></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb clearfix mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-xs-6 ">
                        <div class="item">
                            <div class="product-thumb  mb_30">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New LCDScreen and HD Video Recording</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span></span>
                                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
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
                <div class="pagination-nav text-center mt_50">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
    <div class="footer pt_60">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-block">
                    <div class="content_footercms_right">
                        <div class="footer-contact">
                            <div class="footer-logo mb_40"> <a href="index-2.html"> <img src="images/footer-logo.png" alt="fastro"> </a> </div>
                            <ul>
                                <li>B-14 Collins Street West Victoria 2386</li>
                                <li>(+123) 456 789 - (+024) 666 888</li>
                                <li>Contact@yourcompany.com</li>
                            </ul>
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 footer-block">
                    <h6 class="footer-title ptb_20">Categories</h6>
                    <ul>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Footwear</a></li>
                        <li><a href="#">Jewellery</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-md-2 footer-block">
                    <h6 class="footer-title ptb_20">Information</h6>
                    <ul>
                        <li><a href="contact.html">Specials</a></li>
                        <li><a href="#">New Products</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Our Stores</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-2 footer-block">
                    <h6 class="footer-title ptb_20">My Account</h6>
                    <ul>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Orders</a></li>
                        <li><a href="#">My Credit Slips</a></li>
                        <li><a href="#">My Addresses</a></li>
                        <li><a href="#">My Personal Info</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="ptb_20">SIGN UP OUR NEWSLETTER</h6>
                    <p class="mt_10 mb_20">For get offers from our favorite brands & get 20% off for next </p>
                    <div class="form-group">
                        <input class="mb_20" type="text" placeholder="Enter Your Email Address">
                        <button class="btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom mt_60 ptb_10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright-part">@ 2017 All Rights Reserved fastro</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payment-icon text-right">
                            <ul>
                                <li><i class="fa fa-cc-paypal "></i></li>
                                <li><i class="fa fa-cc-stripe"></i></li>
                                <li><i class="fa fa-cc-visa"></i></li>
                                <li><i class="fa fa-cc-discover"></i></li>
                                <li><i class="fa fa-cc-mastercard"></i></li>
                                <li><i class="fa fa-cc-amex"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =====  FOOTER END  ===== -->
</div>

<a id="scrollup">Scroll</a>
<script src="js/jQuery_v3.1.1.min.js"></script> <script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    } );
</script>
</body>

<!-- Mirrored from html.lionode.com/fastro/f001/category_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 06:07:21 GMT -->
</html>
