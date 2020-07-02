@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |product_detail</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{asset('asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('asset/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('asset/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('asset/plugins/summernote/summernote-bs4.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection


@section('content-header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Chi tiết sản phẩm</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
				<li class="breadcrumb-item active">Chi tiết</li>
			</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<!-- Content -->
<div class="container-fluid">
	<!-- Main row -->
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Chi tiết sản phẩm</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				


				<div class="card-body">
					<h5>-Tên sản phẩm : {{$product->name}}</h5>
					<br>
					<h5>-Slug:{{$product->slug}}</h5>
					<br>
					<h5>-Nội dung: {{htmlspecialchars_decode($product->content)}}</h5>
					<br>
					<h5>-Giá ban đầu: {{$product->origin_price}}</h5>
					<br>
					<h5>-Giá bán ra: {{$product->sale_price}}</h5>
					<br>
					<h5>-Trạng thái: 
						@if($product->status == 0)
						<p>Đang nhập</p>
						@elseif($product->status ==1)
						<p>Mở bán</p>
						@else
						<p>Hết hàng</p>
						@endif



						

					</h5>
					<br>
					<h5>-Phần trăm giảm giá: {{ $product->discount_percent}}</h5>
					<br>
					<h5>-Ảnh sản phẩm:
						@foreach($images as $image)
						<div>
							<img src="{{asset($image->path)}}" width="20%" height="20%"><br>
						</div>

						
						@endforeach

					</h5>
					<br>
					
					
					
					<h5>-Danh mục:{{$categories->name}}

					</h5>
					<br>
					

					<h5>-Thông số kỹ thuật:
						<br>
						{{-- @foreach ($product->config as $property)
						<b>{{ $property['key'] }}</b>: {{ $property['value'] }}<br />
						@endforeach --}}
						@foreach (json_decode($product->config) as $config)
						<b>{{ $config->key }}</b>: {{ $config->value }}<br />
						@endforeach


					</h5>
					
					

					
					<br>
					<h5>Created_at: {{$product->created_at}}</h5>
					<br>
					<h5>Updated_at: {{$product->updated_at}}</h5>


				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<a href="{{ route('backend.product.index') }}" class="btn btn-success">Quay lại</a>
					
				</div>
			</div>
		</div>
	</div>
	<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

@endsection


@section('script')

<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('asset/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('asset/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('asset/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('asset/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('asset/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('asset/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('asset/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('asset/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('asset/dist/js/demo.js')}}"></script>

@endsection