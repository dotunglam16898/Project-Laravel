<!DOCTYPE html>
<html>
<head>
	@yield('css')
</head>
<body>
	{{-- <header class="header-area">
		@include('frontend.includes.header')
	</header> --}}
	
	@yield('content')



	<footer class="footer-area">
		@include('frontend.includes.footer')
	</footer>

	@yield('script')
</body>
</html>