<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/category-4col.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 09:55:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Shop - Mylonix Electronics eCommerce</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assetsTwo/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Shadows+Into+Light:400']
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
            @include('cPartials.headerTwo')
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
		</header><!-- End .header -->

		<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="cart.html">Shopping Cart</a>
					</li>
					<li>
						<a href="checkout.html">Checkout</a>
					</li>
					<li class="disabled">
						<a href="cart.html">Order Complete</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Quantity</th>
										<th class="text-right">Subtotal</th>
									</tr>
								</thead>
								<tbody>
                                @if(isset($products))
                                @foreach($products as $product)
									<tr class="product-row">
										<td>
											<figure class="product-image-container">
												<a href="{{url('productInfo',$product['item']['id'])}}" class="product-image">
													<img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="product">
												</a>

												<a href="{{url('cartRemove',$product['item']['id'])}}" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="{{url('productInfo',$product['item']['id'])}}">{{$product['item']['product_name']}}</a>
											</h5>
										</td>
										<td>Ksh: {{number_format($product['item']['product_price'])}}</td>
										<td>
                                        <div class="quantity">
                                            <a href="{{url('cartReduceByOne',$product['item']['id'])}}" class="minus">&minus;</a>
                                            <input type="number" class="input-box" value="{{$product['quantity']}}" max="10" disabled>
                                            <a href="{{url('addByOne',$product['item']['id'])}}" class="plus">&plus;</a>
                                        </div>
                                            <!-- End .product-single-qty -->
										</td>
										<td class="text-right"><span class="subtotal-price">Ksh: {{number_format($product['item']['product_price'] * $product['quantity'])}}</span></td>
									</tr>
                                    @endforeach
									@else
									<tr class="product-row">
										<td>
						<h4>CART IS EMPTY</h4>
										</td>
									</tr>
                                    @endif

								</tbody>


								<tfoot>
									<tr>
										<td colspan="5" class="clearfix">
											<div class="float-left">
												<div class="cart-discount">
													<form action="#">
														<div class="input-group">
															<input type="text" class="form-control form-control-sm"
																placeholder="Coupon Code" required>
															<div class="input-group-append">
																<button class="btn btn-sm" type="submit">Apply
																	Coupon</button>
															</div>
														</div><!-- End .input-group -->
													</form>
												</div>
											</div><!-- End .float-left -->

											<!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>CART TOTALS</h3>

							<table class="table table-totals">
							
								<tfoot>
                                @if(isset($totalPrice))
									<tr>
										<td>Total</td>
										<td>Ksh: {{number_format($totalPrice)}}</td>
									</tr>
                                    @endif

								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="cart.html" class="btn btn-block btn-dark">Proceed to Checkout
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->
        @include('cPartials.footerOne')

    <style>
        * {
  box-sizing: border-box;
}


.quantity {
  display: flex;
  border: 2px solid #3498db;
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.quantity a {
  background-color: #3498db;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 20px;
  width: 30px;
  height: auto;
  text-align: center;
  transition: background-color 0.2s;
}

.quantity a:hover {
  background-color: #2980b9;
}

.input-box {
  width: 40px;
  text-align: center;
  border: none;
  padding: 8px 10px;
  font-size: 16px;
  outline: none;
}

/* Hide the number input spin buttons */
.input-box::-webkit-inner-spin-button,
.input-box::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.input-box[type="number"] {
  -moz-appearance: textfield;
}

        </style>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 09:54:23 GMT -->
</html>