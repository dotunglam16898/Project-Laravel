<!DOCTYPE html>
<html class="no-js" lang="">

<!-- Mirrored from demo.hasthemes.com/malias-preview/malias/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 02:27:49 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop list| Lâm Đỗ E-shop</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
			============================================ -->		
			<link rel="shortcut icon" type="image/x-icon" href="{{asset('malias/img/favicon.ico')}}">

		<!-- Google Fonts
			============================================ -->		
			<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS
			============================================ -->		
			<link rel="stylesheet" href="{{asset('malias/css/bootstrap.min.css')}}">
		<!-- Font awesome CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/font-awesome.min.css')}}">
		<!-- owl.carousel CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('malias/css/owl.theme.css')}}">
			<link rel="stylesheet" href="{{asset('malias/css/owl.transitions.css')}}">
		<!-- nivo slider CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/lib/css/nivo-slider.css')}}" type="text/css">
		<!-- meanmenu CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/meanmenu.min.css')}}">
		<!-- jquery-ui CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/jquery-ui.css')}}">
		<!-- animate CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/animate.css')}}">
		<!-- main CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/main.css')}}">
		<!-- style CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/style.css')}}">
		<!-- responsive CSS
			============================================ -->
			<link rel="stylesheet" href="{{asset('malias/css/responsive.css')}}">
		</head>
		<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

          <!-- Add your site or application content here -->

          <!-- HEADER-AREA START -->
          <header class="header-area">
           <!-- HEADER-TOP START -->
           <div class="header-top d-lg-block d-md-block d-none">
            <div class="container">
             <div class="row">
              <div class="col-12 col-md-12 col-lg-12 col-xl-12">
               <div class="top-menu">
                <!-- Start Language -->
                <ul class="language">
                 <li><a href="#"><img class="right-5" src="{{asset('malias/img/flags/gb.png')}}" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
                  <ul>
                   <li><a href="#"><img class="right-5" src="{{asset('malias/img/flags/fr.png')}}" alt="#">French</a></li>
                   <li><a href="#"><img class="right-5" src="{{asset('malias/img/flags/gb.png')}}" alt="#">English</a></li>
                   <li><a href="#"><img class="right-5" src="{{asset('malias/img/flags/gb.png')}}" alt="#">English</a></li>
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
           <p class="welcome-msg">Chào mứng bạn đến với E-shop!</p>
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
    <div class="row justify-content-between">
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
    <a href="index.html" title="Malias"><img src="{{asset('malias/img/logo.png')}}" alt="Malias"></a>
  </div>
</div>
<div class="col-lg-9 col-md-12">
 <div class="quick-access">
  <div class="search-by-category">
   <div class="search-container">
    <select>
     <option class="all-cate">All Categories</option>
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
  <form action="#">
   <input type="text" placeholder="Search">
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
     <span class="cart-item">{{Cart::count()}} sản phẩm </span>
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
      Total:
      <span class="amount">{{$total}}.VNĐ</span>
    </span>
    <span class="cart-button-top">
      <a href="{{route('frontend.cart')}}">Xem giỏ</a>
      <a href="checkout.html">Đặt hàng</a>
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
<div class="mainmenu-area">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
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
</header>
<!-- HEADER AREA END -->
<!-- START PAGE-CONTENT -->
<section class="page-content">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <ul class="page-menu">
     <li><a href="index.html">Trang chủ</a></li>
     <li><a href="#">Sản phẩm</a></li>
     <li class="active"><a href="#">Danh sách</a></li>
   </ul>
 </div>
</div>
<div class="row">
 <div class="col-lg-3">
  <!-- CATEGORY-MENU-LIST START -->
  <div class="left-category-menu d-lg-block d-none">
   <div class="left-product-cat">
    <div class="category-heading">
     <h2>Danh mục</h2>
   </div>
   <div class="category-menu-list">
    @foreach($categories_parent as $category_parent)
    <ul>
      <!-- Single menu start -->

      <li class="arrow-plus">
       {{-- <a href="{{route('frontend.list',$category->id)}}">{{$category->name}}</a> --}}
       <a href="{{route('frontend.list',$category_parent->id)}}">{{$category_parent->name}}</a>
       <!--  MEGA MENU START -->
       <div class="cat-left-drop-menu">
        <div class="cat-left-drop-menu-left">
         <a class="menu-item-heading" href="#">Nhà sản xuất</a>
         <ul>
          @foreach($categories_child as $category_child)
          @if($category_child->parent_id == $category_parent->id)
          <li><a href="{{route('frontend.list',$category_child->id)}}">{{$category_child->name}}</a></li>

          @endif
          @endforeach
        </ul>
      </div>



    </div>
    <!-- MEGA MENU END -->
  </li>


  <!-- MENU ACCORDION END -->
</ul>
@endforeach
</div>
</div>
</div>
<!-- END CATEGORY-MENU-LIST -->
<!-- shop-filter start -->
<div class="shop-filter">
  <div class="area-title">
    <h3 class="title-group gfont-1">Lọc sản phẩm</h3>
  </div>
  <h4 class="shop-price-title">Giá</h4>
  <div class="info_widget">
    <div class="price_filter">
      <div id="slider-range"></div>
      <div class="price_slider_amount">
        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
        <input type="submit"  value="Lọc"/>  
      </div>
    </div>
  </div>
</div>
<!-- shop-filter start -->
<!-- filter-by start -->
{{-- <div class="accordion_one">
  <h4><a class="accordion-trigger" data-toggle="collapse" href="#divone">Color</a></h4>
  <div id="divone" class="collapse in">
   <div class="filter-menu">
    <ul>
     <li><a href="#">Black (2)</a></li>
     <li><a href="#">Blue (2)</a></li>
     <li><a href="#">Brown (3)</a></li>
     <li><a href="#">Green (3)</a></li>
     <li><a href="#">Orange (2)</a></li>
     <li><a href="#">Pink (2)</a></li>
     <li><a href="#">Red (11)</a></li>
     <li><a href="#">Yellow (3)</a></li>
   </ul>
 </div>
</div>
<h4><a class="accordion-trigger" data-toggle="collapse" href="#div2">manufacture</a></h4>
<div id="div2" class="collapse in">
 <div class="filter-menu">
  <ul>
   <li><a href="#">Chanel (2)</a></li>
   <li><a href="#">Christian Dior (2)</a></li>
   <li><a href="#">Ermenegildo (2)</a></li>
   <li><a href="#">Ferragamo (1)</a></li>
   <li><a href="#">Hermes (2)</a></li>
   <li><a href="#">Louis Vuitton (3)</a></li>
   <li><a href="#">Prada (1)</a></li>
 </ul>
</div>
</div>
<h4><a class="accordion-trigger" data-toggle="collapse" href="#div3">Size</a></h4>
<div id="div3" class="collapse in">
 <div class="filter-menu">
  <ul>
   <li><a href="#">L (1)</a></li>
   <li><a href="#">M (5)</a></li>
   <li><a href="#">S (7)</a></li>
   <li><a href="#">XL (5)</a></li>
   <li><a href="#">XXL (6)</a></li>
 </ul>
</div>
</div>
</div> --}}
<!-- filter-by end -->
</div>
<div class="col-lg-9 col-12">
  <!-- START PRODUCT-BANNER -->
  <div class="product-banner">
   <div class="row">
    <div class="col-12">
     <div class="banner">
      <a href="#"><img src="https://hanoicomputercdn.com/media/banner/30_Jun84746f5b3673a92ec3b8f3f0cbe84159.jpg" alt="Product Banner"></a>
    </div>
  </div>
</div>
</div>
<!-- END PRODUCT-BANNER -->
<!-- START PRODUCT-AREA -->
<div class="product-area">
 <div class="row">
  <div class="col-12">
   <!-- Start Product-Menu -->
   <div class="product-menu">
    <div class="product-title">

     <h3 class="title-group-3 gfont-1">
      {{$categories->name}}

    </h3>

  </div>
</div>
<div class="product-filter">
  <ul class="nav">
   <li class="list">
    <a href="#display-1-1" role="tab" data-toggle="tab"></a>
  </li>
  <li class="grid">
    <a class="active" href="#display-1-2" role="tab" data-toggle="tab"></a>
  </li>
</ul>
{{-- <div class="sort">
 <label>Sort By:</label>
 <select>
  <option value="#">Default</option>
  <option value="#">Name (A - Z)</option>
  <option value="#">Name (Z - A)</option>
  <option value="#">Price (Low > High)</option>
  <option value="#">Rating (Highest)</option>
  <option value="#">Rating (Lowest)</option>
  <option value="#">Name (A - Z)</option>
  <option value="#">Model (Z - A))</option>
  <option value="#">Model (A - Z)</option>
</select>
</div> --}}
{{-- <div class="limit">
 <label>Show:</label>
 <select>
  <option value="#">8</option>
  <option value="#">16)</option>
  <option value="#">24</option>
  <option value="#">40</option>
  <option value="#">80</option>
  <option value="#">100</option>
</select>
</div> --}}
</div>

<!-- End Product-Menu -->
<div class="clear"></div>
</div>
</div>
<div class="row">
  <div class="col-12 col-lg-12">		
   <!-- Start Product -->
   <div class="product">
    <div class="tab-content">
     <!-- Product -->
     <div role="tabpanel" class="tab-pane fade show  active" id="display-1-1">
      <div class="row">
       <div class="listview">
        <!-- Start Single-Product -->
        @foreach($productss as $product)
        <div class="single-product row">
         <div class="col-lg-3 col-md-4 col-12">
          <div class="label_new">
           <span class="new">new</span>
         </div>
         <div class="sale-off">
           <span class="sale-percent">-{{$product->discount_percent}}%</span>
         </div>
         @foreach($images as $image)
         @if($image->product_id == $product->id)
         <div class="product-img">
           <a href="#">
            <img class="primary-img" src="{{$image->path}}" alt="Product">

          </a>
        </div>

        @endif

        @endforeach
      </div>
      <div class="col-lg-9 col-md-8 col-12">	
        <div class="product-description">
          <h5><a href="{{route('frontend.show',$product->id)}}">{{$product->name}}</a></h5>
          <div class="price-box">
            <span class="price">{{number_format($product->sale_price)}}.VNĐ</span>
            <span class="old-price">{{number_format($product->origin_price)}}.VNĐ</span>
          </div>
          <span class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </span>
          <p class="description">{!!$product->description !!}</p>
          <div class="product-action">
            <div class="button-group">
             <div class="product-button">
              <a href="{{route('frontend.add_cart',$product->id)}}"><button><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button></a>
            </div>
            <div class="product-button-2">
              <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
              <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
              <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- End Single-Product -->
</div>
</div>
<!-- Start Pagination Area -->
<div class="pagination-area">
 <div class="row">
  <div class="col-5">
   <div class="pagination">
    {!! $productss->links() !!}

  </div>
</div>
<div class="col-7">
 <div class="product-result">
  {{-- <span>Showing 1 to 16 of 19 (2 Pages)</span> --}}
  <span>Hiển thị: {{count($productss)}}  sản phẩm</span>
</div>
</div>
</div>
</div>
<!-- End Pagination Area -->
</div>
<!-- End Product -->
<!-- Start Product-->

<!-- End Product = TV -->
</div>
</div>
<!-- End Product -->
</div>
</div>
</div>
<!-- END PRODUCT-AREA -->
</div>
</div>
</div>
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
     <a href="#"><img src="{{asset('malias/img/brand/apple.png')}}" alt="" style="height: 65px"></a>
   </div>
 </div>
 <div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/asus.png')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/hp.jpg')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/logitechlogo.png')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/logoaorus.png')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/logocorsair.png')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/logodell.jpg')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/logointell.png')}}" alt="" style="height: 65px"></a>
 </div>
</div>
<div class="col-12">
  <div class="single-brand-logo">
   <a href="#"><img src="{{asset('malias/img/brand/apple.png')}}" alt="" style="height: 65px"></a>
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
</section>
<!-- END PAGE-CONTENT -->
<!-- FOOTER-AREA START -->
<footer class="footer-area">
 <!-- Footer Start -->
 <div class="footer">
  <div class="container">
   <div class="row">
    <div class="col-12 col-md-6 col-lg-3">
     <div class="footer-title">
      <h5>My Account</h5>
    </div>
    <nav>
      <ul class="footer-content">
       <li><a href="my-account.html">My Account</a></li>
       <li><a href="#">Order History</a></li>
       <li><a href="wishlist">Wish List</a></li>
       <li><a href="#">Search Terms</a></li>
       <li><a href="#">Returns</a></li>
     </ul>
   </nav>
 </div>
 <div class="col-12 col-md-6 col-lg-3">
   <div class="footer-title">
    <h5>Customer Service</h5>
  </div>
  <nav>
    <ul class="footer-content">
     <li><a href="contact.html">Contact Us</a></li>
     <li><a href="about.html">About Us</a></li>
     <li><a href="#">Delivery Information</a></li>
     <li><a href="#">Privacy Policy</a></li>
     <li><a href="#">Terms & Conditions</a></li>
   </ul>
 </nav>
</div>
<div class="col-12 col-md-6 col-lg-3">
 <div class="footer-title">
  <h5>Payment & Shipping</h5>
</div>
<nav>
  <ul class="footer-content">
   <li><a href="#">Brands</a></li>
   <li><a href="#">Gift Vouchers</a></li>
   <li><a href="#">Affiliates</a></li>
   <li><a href="shop-list.html">Specials</a></li>
   <li><a href="#">Search Terms</a></li>
 </ul>
</nav>
</div>
<div class="col-12 col-md-6 col-lg-3">
 <div class="footer-title">
  <h5>Payment & Shipping</h5>
</div>
<nav>
  <ul class="footer-content box-information">
   <li>
    <i class="fa fa-home"></i><span>Towerthemes, 1234 Stret Lorem, LPA States, Libero</span>
  </li>
  <li>
    <i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@bootexperts.com</a></p>
  </li>
  <li>
    <i class="fa fa-phone"></i>
    <span>01234-56789</span> <br> <span> 01234-56789</span>
  </li>
</ul>
</nav>
</div>
</div>
</div>				
</div>
<!-- Footer End -->
<!-- Copyright-area Start -->
<div class="copyright-area">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="copyright">
      <p>Copyright &copy; <a href="http://bootexperts.com/" target="_blank"> BootExpert</a> All rights reserved.</p>
      <div class="payment">
       <a href="#"><img src="malias/img/payment.png" alt="Payment"></a>
     </div>
   </div>
 </div>
</div>
</div>
</div>
<!-- Copyright-area End -->
</footer>
<!-- FOOTER-AREA END -->	
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
 <!-- Modal -->
 <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   </div>
   <div class="modal-body">
     <div class="modal-product">
      <div class="product-images">
       <div class="main-image images">
        <img alt="#" src="malias/img/product/quickview-photo.jpg"/>
      </div>
    </div><!-- .product-images -->

    <div class="product-info">
     <h1>Aenean eu tristique</h1>
     <div class="price-box-3">
      <hr />
      <div class="s-price-box">
       <span class="new-price">$160.00</span>
       <span class="old-price">$190.00</span>
     </div>
     <hr />
   </div>
   <a href="shop.html" class="see-all">See all features</a>
   <div class="quick-add-to-cart">
    <form method="post" class="cart">
     <div class="numbers-row">
      <input type="number" id="french-hens" value="3">
    </div>
    {{-- <a href="{{route('frontend.add_cart',$product->id)}}"><button class="single_add_to_cart_button" type="submit">Thêm vào giỏ</button></a> --}}
  </form>
</div>
<div class="quick-desc">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
</div>
<div class="social-sharing">
  <div class="widget widget_socialsharing_widget">
   <h3 class="widget-title-modal">Share this product</h3>
   <ul class="social-icons">
    <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
    <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
    <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
    <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
    <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</div>
</div>
</div><!-- .product-info -->
</div><!-- .modal-product -->
</div><!-- .modal-body -->
</div><!-- .modal-content -->
</div><!-- .modal-dialog -->
</div>
<!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->


		<!-- jquery
			============================================ -->		
			<script src="{{asset('malias/js/vendor/jquery-1.11.3.min.js')}}"></script>
		<!-- popper JS
			============================================ -->		
			<script src="{{asset('malias/js/popper.min.js')}}"></script>
		<!-- bootstrap JS
			============================================ -->		
			<script src="{{asset('malias/js/bootstrap.min.js')}}"></script>
		<!-- wow JS
			============================================ -->		
			<script src="{{asset('malias/js/wow.min.js')}}"></script>
		<!-- meanmenu JS
			============================================ -->		
			<script src="{{asset('malias/js/jquery.meanmenu.js')}}"></script>
		<!-- owl.carousel JS
			============================================ -->		
			<script src="{{asset('malias/js/owl.carousel.min.js')}}"></script>
		<!-- scrollUp JS
			============================================ -->		
			<script src="{{asset('malias/js/jquery.scrollUp.min.js')}}"></script>
        <!-- countdon.min JS
        	============================================ -->		
        	<script src="{{asset('malias/js/countdon.min.js')}}"></script>
        <!-- jquery-price-slider js
        	============================================ --> 
        	<script src="{{asset('malias/js/jquery-price-slider.js')}}"></script>
        <!-- Nivo slider js
        	============================================ --> 		
        	<script src="{{asset('malias/lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
		<!-- Image zoom js
			============================================ --> 		
			<script src="{{asset('malias/js/jquery.zoom.min.js')}}"></script>
		<!-- plugins JS
			============================================ -->		
			<script src="{{asset('malias/js/plugins.js')}}"></script>
		<!-- main JS
			============================================ -->		
			<script src="{{asset('malias/js/main.js')}}"></script>
		</body>

		<!-- Mirrored from demo.hasthemes.com/malias-preview/malias/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 02:27:49 GMT -->
		</html>
