@extends('frontend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Lâm Đỗ E-shop</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
			============================================ -->		
			<link rel="shortcut icon" type="image/x-icon" href="malias/img/favicon.ico">

		<!-- Google Fonts
			============================================ -->		
			<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS
			============================================ -->		
			<link rel="stylesheet" href="malias/css/bootstrap.min.css">
		<!-- Font awesome CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/font-awesome.min.css">
		<!-- owl.carousel CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/owl.carousel.css">
			<link rel="stylesheet" href="malias/css/owl.theme.css">
			<link rel="stylesheet" href="malias/css/owl.transitions.css">
		<!-- nivo slider CSS
			============================================ -->
			<link rel="stylesheet" href="malias/lib/css/nivo-slider.css" type="text/css">
		<!-- meanmenu CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/meanmenu.min.css">
		<!-- jquery-ui CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/jquery-ui.css">
		<!-- animate CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/animate.css">
		<!-- main CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/main.css">
		<!-- style CSS
			============================================ -->
			<link rel="stylesheet" href="malias/style.css">
		<!-- responsive CSS
			============================================ -->
			<link rel="stylesheet" href="malias/css/responsive.css">

			@endsection

			@section('slide')
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<!-- CATEGORY-MENU-LIST START -->
						<div class="left-category-menu left-category-menu-2 d-lg-block d-none">
							<div class="left-product-cat">
								<div class="category-heading">
									<h2>categories</h2>
								</div>
								<div class="category-menu-list">
									<ul>
										<!-- Single menu start -->
										<li class="arrow-plus">
											<a href="#">Cameras & Photography</a>
											<!--  MEGA MENU START -->
											<div class="cat-left-drop-menu">
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Handbags</a>
													<ul>
														<li><a href="#">Blouses And Shirts</a></li>
														<li><a href="#">Clutches</a></li>
														<li><a href="#">Cross Body</a></li>
														<li><a href="#">Satchels</a></li>
														<li><a href="#">Sholuder</a></li>
														<li><a href="#">Toter</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Tops</a>
													<ul>
														<li><a href="#">Evening</a></li>
														<li><a href="#">Long Sleeved</a></li>
														<li><a href="#">Short Sleeved</a></li>
														<li><a href="#">Sleeveless</a></li>
														<li><a href="#">T-Shirts</a></li>
														<li><a href="#">Tanks And Camis</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Dresses</a>
													<ul>
														<li><a href="#">Belts</a></li>
														<li><a href="#">Cocktail</a></li>
														<li><a href="#">Day</a></li>
														<li><a href="#">Evening</a></li>
														<li><a href="#">Sundresses</a></li>
														<li><a href="#">Sweater</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Accessories</a>
													<ul>
														<li><a href="#">Bras</a></li>
														<li><a href="#">Hair Accessories</a></li>
														<li><a href="#">Hats And Gloves</a></li>
														<li><a href="#">Lifestyle</a></li>
														<li><a href="#">Scarves</a></li>
														<li><a href="#">Small Leathers</a></li>
													</ul>
												</div>
											</div>
											<!-- MEGA MENU END -->
										</li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li class="arrow-plus">
											<a href="#">SmartPhones & Tablets</a>
											<!--  MEGA MENU START -->
											<div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Women</a>
													<ul>
														<li><a href="#">Belts</a></li>
														<li><a href="#">Jewelry</a></li>
														<li><a href="#">Socks</a></li>
														<li><a href="#">Sunglasses</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">CLOTHING</a>
													<ul>
														<li><a href="#">Boots</a></li>
														<li><a href="#">Brands We Love</a></li>
														<li><a href="#">Casuals</a></li>
														<li><a href="#">Gifts And Tech</a></li>
														<li><a href="#">Gifts And Tech</a></li>
														<li><a href="#">Slippers</a></li>
														<li><a href="#">Speakers</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left cat-left-drop-menu-photo">
													<a href="#"><img src="malias/malias/img/megamenu/vmega_blog1.jpg" alt="Product"></a>
												</div>
											</div>
											<!-- MEGA MENU END -->
										</li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li class="arrow-plus">
											<a href="#">Tv & Audio</a>
											<!--  MEGA MENU START -->
											<div class="cat-left-drop-menu">
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">BAGS</a>
													<ul>
														<li><a href="#">Blazers</a></li>
														<li><a href="#">Bootees Bags</a></li>
														<li><a href="#">Jackets</a></li>
														<li><a href="#">Shoes</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">CLOTHING</a>
													<ul>
														<li><a href="#">Blazers</a></li>
														<li><a href="#">Bootees Bags</a></li>
														<li><a href="#">Jackets</a></li>
														<li><a href="#">Shoes</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">LINGERIE</a>
													<ul>
														<li><a href="#">Blazers</a></li>
														<li><a href="#">Bootees Bags</a></li>
														<li><a href="#">Jackets</a></li>
														<li><a href="#">Shoes</a></li>
													</ul>
												</div>
												<div class="cat-left-drop-menu-left">
													<a class="menu-item-heading" href="#">Shoes</a>
													<ul>
														<li><a href="#">Blazers</a></li>
														<li><a href="#">Bootees Bags</a></li>
														<li><a href="#">Jackets</a></li>
														<li><a href="#">Shoes</a></li>
													</ul>
												</div>
											</div>
											<!-- MEGA MENU END -->
										</li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li>
											<a href="#">Laptop & Computer</a>
										</li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li><a href="#">Sports</a></li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li><a href="#">Smart Phone</a></li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li><a href="#">Computer</a></li>
										<!-- Single menu end -->
										<!-- Single menu start -->
										<li><a href="#">Electronic</a></li>
										<!-- Single menu end -->

										<!-- MENU ACCORDION START -->
										<li class=" rx-child">
											<a href="#">Books</a>
										</li>
										<li class=" rx-parent">
											<a class="rx-default">
												More categories <span class="cat-thumb  fa fa-plus"></span> 
											</a>
											<a class="rx-show">
												close menu <span class="cat-thumb  fa fa-minus"></span>
											</a>
										</li>
										<!-- MENU ACCORDION END -->
									</ul>
								</div>
							</div>
						</div>
						<!-- END CATEGORY-MENU-LIST -->
					</div>
					<div class="col-lg-9">
						<!-- slider -->
						<div class="slider-area">
							<div class="bend niceties preview-1">
								<div id="ensign-nivoslider" class="slides">	
									<img src="malias/img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
									<img src="malias/img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
									<img src="malias/img/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3"/><!-- 
									<img src="malias/malias/img/sliders/slider-1/bg4.jpg" alt="" title="#slider-direction-4"/>  -->     
								</div>
								<!-- direction 1 -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-1-1 ">
										<h1 class="title1">LUMIA 888 DESIGN</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-1-2">
										<p class="title2">Elegant design for business</p>
									</div>
									<!-- layer 3 -->
									<div class="layer-1-3">
										<h2 class="title3">$966.82</h2>
									</div>
									<!-- layer 4 -->
									<div class="layer-1-4">
										<a href="#" class="title4">shopping now</a>
									</div>
								</div>
								<!-- direction 2 -->
								<div id="slider-direction-2" class="slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-2-1">
										<h1 class="title1">WATERPROOF SMARTPHONE</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2-2">
										<p class="title2">RODUCTS ARE EYE-CATCHING DESIGN. YOU CAN TAKE PHOTOS EVEN WHEN Y</p>
									</div>
									<!-- layer 3 -->
									<div class="layer-2-3">
										<a href="#" class="title3">shopping now</a>
									</div>
								</div>
								<!-- direction 3 -->
								<div id="slider-direction-3" class="slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-3-1">
										<h2 class="title1">BUY AIR LACOTE</h2>
									</div>
									<!-- layer 2 -->
									<div class="layer-3-2">
										<h1 class="title2">SUPER TABLET, SUPER GIFT</h1>
									</div>
									<!-- layer 3 -->
									<div class="layer-3-3">
										<p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
									</div>
									<!-- layer 4 -->
									<div class="layer-3-4">
										<a href="#" class="title4">shopping now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- slider end-->
					</div>
				</div>
			</div>

			@endsection

			@section('content')
			<!-- banner area Start -->
			<div class="product-banner-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 ">
							<div class="single-product-banner">
								<a href="#"><img src="malias/img/banner/7.jpg" alt="Product Banner"></a>
								<div class="banner-text banner-1">
									<h2>head phone 2015</h2>
								</div>
							</div>
						</div>
						<div class="col-lg-4 ">
							<div class="single-product-banner">
								<a href="#"><img src="malias/img/banner/8.jpg" alt="Product Banner"></a>
								<div class="banner-text banner-3">
									<h2>
										<span class="word-1">NQkia </span>
										<span class="word-2">Lumia 888 </span>
									</h2>
									<h3>many Colors</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 ">
							<div class="single-product-banner">
								<a href="#"><img src="malias/img/banner/9.jpg" alt="Product Banner"></a>
								<div class="banner-text banner-2">
								</div>
								<div class="banner-text banner-4">
									<h2>Htc <span>N8.</span></h2>
									<h3>
										<span class="word-1">many </span>
										<span class="word-2">Colors</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner area End -->
			<!-- Hot Deals area start -->
			<div class="hot-deals-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="area-title">
								<h3 class="title-group border-red gfont-1">Hot Deals</h3>
							</div>
						</div>
					</div>
					<div class="carosel-circle style-2 row">
						<div class="active-hot-deals-style-2">
							<!-- Start Single-hot-deals -->
							<div class="col-12">
								<div class="single-hot-deals">
									<div class="hot-deals-photo">
										<a href="#"><img src="malias/img/hot-deals/1.jpg" alt="Product"></a>
									</div>
									<div class="count-down">
										<div class="timer">
											<div data-countdown="2017/12/31"></div>
										</div> 
									</div>
									<div class="hot-deals-text">
										<h5><a href="#" class="name-group">Various Versions</a></h5>
										<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
										<div class="price-box">
											<span class="price gfont-2">$99.00</span>
											<span class="old-price gfont-2">$110.00</span>
										</div>
										<div class="hot-deals-button">
											<button><i class="fa fa-plus"></i> Add to Cart</button>
											<div class="hot-deals-button-2">
												<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-hot-deals -->
							<!-- Start Single-hot-deals -->
							<div class="col-12">
								<div class="single-hot-deals">
									<div class="hot-deals-photo">
										<a href="#"><img src="malias/img/hot-deals/2.jpg" alt="Product"></a>
									</div>
									<div class="count-down">
										<div class="timer">
											<div data-countdown="2017/04/30"></div>
										</div> 
									</div>
									<div class="hot-deals-text">
										<h5><a href="#" class="name-group">Ultra Consequad</a></h5>
										<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
										<div class="price-box">
											<span class="price gfont-2">$85.00</span>
											<span class="old-price gfont-2">$110.00</span>
										</div>
										<div class="hot-deals-button">
											<button><i class="fa fa-plus"></i> Add to Cart</button>
											<div class="hot-deals-button-2">
												<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-hot-deals -->
							<!-- Start Single-hot-deals -->
							<div class="col-12">
								<div class="single-hot-deals">
									<div class="hot-deals-photo">
										<a href="#"><img src="malias/img/hot-deals/3.jpg" alt="Product"></a>
									</div>
									<div class="count-down">
										<div class="timer">
											<div data-countdown="2017/08/30"></div>
										</div> 
									</div>
									<div class="hot-deals-text">
										<h5><a href="#" class="name-group">Aldus Consequat</a></h5>
										<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
										<div class="price-box">
											<span class="price gfont-2">$90.00</span>
											<span class="old-price gfont-2">$110.00</span>
										</div>
										<div class="hot-deals-button">
											<button><i class="fa fa-plus"></i> Add to Cart</button>
											<div class="hot-deals-button-2">
												<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-hot-deals -->
							<!-- Start Single-hot-deals -->
							<div class="col-12">
								<div class="single-hot-deals">
									<div class="hot-deals-photo">
										<a href="#"><img src="malias/img/hot-deals/3.jpg" alt="Product"></a>
									</div>
									<div class="count-down">
										<div class="timer">
											<div data-countdown="2017/10/30"></div>
										</div> 
									</div>
									<div class="hot-deals-text">
										<h5><a href="#" class="name-group">Various Versions</a></h5>
										<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
										<div class="price-box">
											<span class="price gfont-2">$85.00</span>
											<span class="old-price gfont-2">$110.00</span>
										</div>
										<div class="hot-deals-button">
											<button><i class="fa fa-plus"></i> Add to Cart</button>
											<div class="hot-deals-button-2">
												<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-hot-deals -->
							<!-- Start Single-hot-deals -->
							<div class="col-12">
								<div class="single-hot-deals">
									<div class="hot-deals-photo">
										<a href="#"><img src="malias/img/hot-deals/3.jpg" alt="Product"></a>
									</div>
									<div class="count-down">
										<div class="timer">
											<div data-countdown="2017/07/30"></div>
										</div> 
									</div>
									<div class="hot-deals-text">
										<h5><a href="#" class="name-group">Ultra Consequad</a></h5>
										<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
										<div class="price-box">
											<span class="price gfont-2">$90.00</span>
											<span class="old-price gfont-2">$110.00</span>
										</div>
										<div class="hot-deals-button">
											<button><i class="fa fa-plus"></i> Add to Cart</button>
											<div class="hot-deals-button-2">
												<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-hot-deals -->
							<!-- Start Single-hot-deals -->
							<div class="col-12">
								<div class="single-hot-deals">
									<div class="hot-deals-photo">
										<a href="#"><img src="malias/img/hot-deals/3.jpg" alt="Product"></a>
									</div>
									<div class="count-down">
										<div class="timer">
											<div data-countdown="2017/06/30"></div>
										</div> 
									</div>
									<div class="hot-deals-text">
										<h5><a href="#" class="name-group">Aldus Consequat</a></h5>
										<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
										<div class="price-box">
											<span class="price gfont-2">$85.00</span>
											<span class="old-price gfont-2">$110.00</span>
										</div>
										<div class="hot-deals-button">
											<button><i class="fa fa-plus"></i> Add to Cart</button>
											<div class="hot-deals-button-2">
												<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-hot-deals -->
						</div>
					</div>
				</div>
			</div>
			<!-- Hot Deals area end -->
			<!-- Banner area start -->
			<div class="banner-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="single-product-banner">
								<a href="#"><img src="malias/img/banner/10.jpg" alt="Product Banner"></a>
								<div class="banner-text banner-2">
								</div>
								<div class="banner-text banner-4">
									<h2>Golden Week !! </h2>
									<h3>
										<span class="word-5">Discounts on all brands, for your excellent choice . </span>
									</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-product-banner">
								<a href="#"><img src="malias/img/banner/11.jpg" alt="Product Banner"></a>
								<div class="banner-text banner-3">
									<h2>
										<span class="word-1">Best Price Shock </span>
									</h2>
									<h2 class="word-6">Quickly old hunters in MALIAS</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Banner area end -->
			<!-- Product tab area start -->
			<div class="product-area">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-12">
							<!-- Start Product-Menu -->
							<div class="product-menu style-2">
								<ul class="nav">
									<li><a class=" active" href="#display-1-1" role="tab" data-toggle="tab">Latest</a></li>
									<li><a href="#display-1-2" role="tab" data-toggle="tab">Sell</a></li>
									<li><a href="#display-1-3"  role="tab" data-toggle="tab">Random</a></li>
								</ul>
							</div>
							<!-- End of product menu -->
						</div>
					</div>
					<!-- Start Product -->
					<div class="product carosel-navigation-style-2">
						<div class="tab-content">
							<!-- Product = Speaker -->
							<div role="tabpanel" class="tab-pane fade show active" id="display-1-1">
								<div class="row">
									<div class="active-product-carosel-style-2">
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="sale-off">
													<span class="sale-percent">-55%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="sale-off">
													<span class="sale-percent">-55%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="sale-off">
													<span class="sale-percent">-45%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/1.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/1bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="sale-off">
													<span class="sale-percent">-45%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/4.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="sale-off">
													<span class="sale-percent">-35%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="sale-off">
													<span class="sale-percent">-35%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/6.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/11.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/13.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/4.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-25%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/6.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-15%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/11.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
								</div>
							</div>
							<!-- End Product = Speaker -->
							<!-- Start Product = TV -->
							<div role="tabpanel" class="tab-pane fade" id="display-1-2">
								<div class="row">
									<div class="active-product-carosel-style-2">
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/13.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/4.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-25%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/6.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="label_new">
													<span class="new">new</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
								</div>
							</div>
							<!-- End Product = TV -->
							<!-- Start Product = Mobile -->
							<div role="tabpanel" class="tab-pane fade" id="display-1-3">
								<div class="row">
									<div class="active-product-carosel-style-2">
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-15%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/1.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/1bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/4.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/6.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/11.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/13.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/10bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/10.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/12.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/12bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/4.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/3.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$99.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-25%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/6.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/4bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Aldus Consequat</a></h5>
													<div class="price-box">
														<span class="price">$85.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-19%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/2bg.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/2.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Ultra Consequad</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="col-12">
											<div class="single-product style-2">
												<div class="sale-off">
													<span class="sale-percent">-15%</span>
												</div>
												<div class="product-img">
													<a href="#">
														<img class="primary-img" src="malias/img/product/mediam/11.jpg" alt="Product">
														<img class="secondary-img" src="malias/img/product/mediam/3bg.jpg" alt="Product">
													</a>
												</div>
												<div class="product-description">
													<h5><a href="#">Various Versions</a></h5>
													<div class="price-box">
														<span class="price">$90.00</span>
														<span class="old-price">$110.00</span>
													</div>
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<div class="hot-deals-button">
														<button><i class="fa fa-plus"></i> Add to Cart</button>
														<div class="hot-deals-button-2">
															<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
														</div>
													</div>
												</div>											
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
								</div>
							</div>
							<!-- End Product = Mobile -->
						</div>
					</div>
					<!-- End Product -->
				</div>	
			</div>
			<!-- Product tab area end -->
			<!-- Blog area start -->
			
			<!-- Blog area end -->
			<!-- START BRAND-LOGO-AREA -->
			<div class="brand-logo-area carosel-navigation-style-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="area-title">
								<h3 class="title-group border-red gfont-1">Brand Logo</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-brand-logo">
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/1.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/2.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/3.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/4.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/5.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/6.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/1.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/2.png" alt=""></a>
								</div>
							</div>
							<div class="col-12">
								<div class="single-brand-logo">
									<a href="#"><img src="malias/img/brand/3.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END BRAND-LOGO-AREA -->
			<!-- START SUBSCRIBE-AREA -->
			<div class="subscribe-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8 col-md-6 col-12">
							<label>Sign Up for Our Newsletter:</label>
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="Enter Your E-mail">
									<button type="submit">Subscribe</button>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="social-media">
								<a href="#"><i class="fa fa-facebook fb"></i></a>
								<a href="#"><i class="fa fa-google-plus gp"></i></a>
								<a href="#"><i class="fa fa-twitter tt"></i></a>
								<a href="#"><i class="fa fa-youtube yt"></i></a>
								<a href="#"><i class="fa fa-linkedin li"></i></a>
								<a href="#"><i class="fa fa-rss rs"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- END SUBSCRIBE-AREA -->

			<!-- END PAGE-CONTENT -->
			@endsection


			@section('script')

<!-- jquery
	============================================ -->		
	<script src="malias/js/vendor/jquery-1.11.3.min.js"></script>
		<!-- popper JS
			============================================ -->		
			<script src="malias/js/popper.min.js"></script>
		<!-- bootstrap JS
			============================================ -->		
			<script src="malias/js/bootstrap.min.js"></script>
		<!-- wow JS
			============================================ -->		
			<script src="malias/js/wow.min.js"></script>
		<!-- meanmenu JS
			============================================ -->		
			<script src="malias/js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
			============================================ -->		
			<script src="malias/js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
			============================================ -->		
			<script src="malias/js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
        	============================================ -->		
        	<script src="malias/js/countdon.min.js"></script>
        <!-- jquery-price-slider js
        	============================================ --> 
        	<script src="malias/js/jquery-price-slider.js"></script>
        <!-- Nivo slider js
        	============================================ --> 		
        	<script src="malias/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- Image zoom js
			============================================ --> 		
			<script src="malias/js/jquery.zoom.min.js"></script>
		<!-- plugins JS
			============================================ -->		
			<script src="malias/js/plugins.js"></script>
		<!-- main JS
			============================================ -->		
			<script src="malias/js/main.js"></script>


			@endsection
