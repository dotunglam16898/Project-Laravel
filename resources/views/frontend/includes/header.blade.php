<!-- HEADER-TOP START -->
<div class="header-top d-lg-block d-md-block d-none">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 col-xl-12">
				<div class="top-menu">
					<!-- Start Language -->
					<ul class="language">
						<li><a href="#"><img class="right-5" src="malias/img/flags/gb.png" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
							<ul>
								<li><a href="#"><img class="right-5" src="malias/img/flags/fr.png" alt="#">French</a></li>
								<li><a href="#"><img class="right-5" src="malias/img/flags/gb.png" alt="#">English</a></li>
								<li><a href="#"><img class="right-5" src="malias/img/flags/gb.png" alt="#">English</a></li>
							</ul>
						</li>
					</ul>
					<!-- End Language -->
					<!-- Start Currency -->
					<ul class="currency">
						<li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
							<ul>
								<li><a href="#">$ EUR</a></li>
								<li><a href="#">$ GBP</a></li>
								<li><a href="#">$ USD</a></li>
							</ul>
						</li>
					</ul>
					<!-- End Currency -->
					<p class="welcome-msg">Chào mừng bạn đã đến với E-shop!</p>
				</div>
				<!-- Start Top-Link -->
				<div class="top-link">
					<ul class="link">
						
						@if(Auth::check())
						<li>
							<form  action="{{ route('logout') }}" method="POST" >
								@csrf
								<button type="submit" class="btn btn-primary">Đăng xuất</button>
							</form>
						</li>
						<li><a href="my-account.html"><i class="fa fa-user"></i> Xin chào {{Auth::user()->name}}</a></li>
						
						<li><a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a></li>
						<li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
						
						@else
						{{-- <li><a href="{{route('login.form')}}"><i class="fa fa-unlock-alt"></i></a>Login</li> --}}
						<li><a href="{{route('login.form')}}"><i class="fa fa-unlock-alt"></i> Đăng nhập</a></li>
						<li><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>
						<li><a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a></li>
						<li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
						@endif
						
						
						
					</ul>
				</div>
				<!-- End Top-Link -->
			</div>
		</div>
	</div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<div class="header-middle">
	<div class="container">
		<!-- Start Support-Client -->
		<div class="support-client d-lg-block d-md-block d-none">
			<div class="row">
				<!-- Start Single-Support -->
				<div class="col-lg-3 col-md-4">
					<div class="single-support">
						<div class="support-content">
							<i class="fa fa-clock-o"></i>
							<div class="support-text">
								<h1 class="zero gfont-1">Giờ làm việc</h1>
								<p>T2- CN: 8.00 - 18.00</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single-Support -->
				<!-- Start Single-Support -->
				<div class="col-lg-3 d-lg-block d-none">
					<div class="single-support">
						<i class="fa fa-truck"></i>
						<div class="support-text">
							<h1 class="zero gfont-1">Miễn phí vận chuyển</h1>
							<p>Với hóa đơn trên 100.000.000.đ</p>
						</div>
					</div>
				</div>
				<!-- End Single-Support -->
				<!-- Start Single-Support -->
				<div class="col-lg-3 col-md-4">
					<div class="single-support">
						<i class="fa fa-money"></i>
						<div class="support-text">
							<h1 class="zero gfont-1">Hoàn tiền 100%</h1>
							<p>Trong vòng 30 ngày sau khi giao hàng</p>
						</div>
					</div>
				</div>
				<!-- End Single-Support -->
				<!-- Start Single-Support -->
				<div class="col-lg-3 col-md-4">
					<div class="single-support">
						<i class="fa fa-phone-square"></i>
						<div class="support-text">
							<h1 class="zero gfont-1">SĐT: 0829911698</h1>
							<p>Đặt hàng ngay !</p>
						</div>
					</div>
				</div>
				<!-- End Single-Support -->
			</div>
		</div>
		<!-- End Support-Client -->
		<!-- Start logo & Search Box -->
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="logo">
					<a href="index.html" title="Malias"><img src="malias/img/logo.png" alt="Malias"></a>
				</div>
			</div>
			<div class="col-lg-9 col-md-12">
				<div class="quick-access">
					<div class="search-by-category">
						<div class="search-container">
							<select>
								<option class="all-cate">Danh mục</option>
								<optgroup  class="cate-item-head" label="Cameras & Photography">
									<option class="cate-item-title">Handbags</option>
									<option class="c-item">Blouses And Shirts</option>
									<option class="c-item">Clouthes</option>
								</optgroup>
								<optgroup  class="cate-item-head" label="Laptop & Computer">
									<option class="cate-item-title">Apple</option>
									<option class="c-item">Dell</option>
									<option class="c-item">Hp</option>
									<option class="c-item">Sony</option>
								</optgroup>
								<optgroup  class="cate-item-head" label="Electronic">
									<option class="c-item">Mobile</option>
									<option class="c-item">Speaker</option>
									<option class="c-item">Headphone</option>
								</optgroup>
							</select>
						</div>
						<div class="header-search">
							<form action="{{route('frontend.search')}}" method="post">
								@csrf
								<input type="text" placeholder="Search" name="name">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<div class="top-cart">
						<ul>
							<li>
								<a href="{{route('frontend.cart')}}">
									<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
									<span class="cart-total">
										<span class="cart-title">Giỏ hàng</span>
										<span class="cart-item">{{Cart::count()}} sản phẩm  </span>
										{{-- <span class="top-cart-price">$365.00</span> --}}
									</span>
								</a>
								<div class="mini-cart-content">
									@foreach($items as $item)
									<div class="cart-img-details">
										@foreach($images as $image)
										@if($image->product_id == $item->id)
										<div class="cart-img-photo">
											<a href="#"><img src="{{$image->path}}" alt="#"></a>
										</div>
										@endif

										@endforeach
										<div class="cart-img-content">
											<a href="#"><h4>{{$item->name}}</h4></a>
											<span>
												<strong class="text-right">{{$item->qty}} x</strong>
												<strong class="cart-price text-right">{{number_format($item->price)}}.VNĐ</strong>
											</span>
										</div>
										<div class="pro-del">
											<a href="#"><i class="fa fa-times"></i></a>
										</div>
									</div>
									@endforeach
									<div class="clear"></div>
									
									<div class="cart-inner-bottom">
										<span class="total">
											Tổng:
											<span class="amount">{{$total}}.VNĐ</span>
										</span>
										<span class="cart-button-top">
											<a href="{{route('frontend.cart')}}">Xem giỏ </a>
											<a href="">Đặt hàng</a>
										</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End logo & Search Box -->
	</div> 
</div>
<!-- HEADER-MIDDLE END -->
<!-- START MAINMENU-AREA -->
<div class="mainmenu-area ">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 offset-lg-3">
				<div class="mainmenu d-lg-block d-none">
					<nav>
						<ul>
							<li><a href="{{route('frontend.index')}}">Trang chủ</a>
								<ul>
									<li><a href="index.html">Home Versions 1</a></li>
									<li><a href="index-2.html">Home Versions 2</a></li>
								</ul>
							</li>
							<li><a href="about.html">Về chúng tôi</a></li>
							{{-- <li class="hot"><a href="shop.html">Sản phẩm bán chạy</a></li> --}}
							<li class="new"><a href="{{route('frontend.new')}}">Sản phẩm mới</a></li>
							<li><a href="#">Tiện ích khác</a>
								<ul>
									<li><a href="cart.html">Giỏ hàng</a></li>
									<li><a href="checkout.html">Đặt hàng</a></li>
									<li><a href="account.html">Tạo tài khoản</a></li>
									<li><a href="my-account.html">Tài khoản của tôi</a></li>
									<li><a href="product-details.html">Chi tiết sản phẩm</a></li>
									{{-- <li><a href="shop.html">Shop Grid View</a></li>
									<li><a href="shop-list.html">Shop List View</a></li>
									<li><a href="wishlist.html">Wish List</a></li> --}}
								</ul>
							</li>
							<li><a href="{{route('frontend.contact')}}">Liên hệ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN-MENU-AREA -->
<!-- Start Mobile-menu -->
<div class="mobile-menu-area d-lg-none d-block fix">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav id="mobile-menu">
					<ul>
						<li><a href="index.html">Home</a>
							<ul>
								<li><a href="index.html">Home Page 1</a></li>
								<li><a href="index-2.html">Home Page 2</a></li>
							</ul>
						</li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="shop.html">Bestseller Products</a></li>
						<li><a href="shop-list.html">New Products</a></li>
						<li><a href="#">Pages</a>
							<ul>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="account.html">Create Account</a></li>
								<li><a href="login.html">Login</a></li>
								<li><a href="my-account.html">My Account</a></li>
								<li><a href="product-details.html">Product details</a></li>
								<li><a href="shop.html">Shop Grid View</a></li>
								<li><a href="shop-list.html">Shop List View</a></li>
								<li><a href="wishlist.html">Wish List</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- End Mobile-menu -->			

		<!-- HEADER AREA END -->