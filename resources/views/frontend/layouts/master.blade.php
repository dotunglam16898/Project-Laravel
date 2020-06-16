<!DOCTYPE html>
<html>
<head>
	@yield('css')
</head>
<body>
<header class="header-area">
	@include('frontend.includes.header')
</header>
	


<div class="category-slider-area">
	
	@yield('slide')
</div>


<section class="page-content">
	@yield('content')
</section>

<footer class="footer-area">
	@include('frontend.includes.footer')
</footer>

@yield('script')
</body>
</html>