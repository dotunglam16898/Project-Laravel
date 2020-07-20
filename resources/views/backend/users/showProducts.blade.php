@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |showProducts_user</title>
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
			<h1 class="m-0 text-dark">Chi tiết người dùng</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
				<li class="breadcrumb-item"><a href="#"></a>Người dùng</li>
				<li class="breadcrumb-item active">chi tiết</li>
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

		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Chi tiết người dùng</h3>

					<div class="card-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

							<div class="input-group-append">
								<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên Người dùng</th>
								<th>Email</th>
								
								<th>Địa chỉ</th>
								<th>Số điện thoại</th>
								<th>Sản phẩm tạo ra</th>
								<th>Quyền truy cập</th>
								{{-- <th>Updated_at</th> --}}
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{$user->email}}</td>

								<td>{{ $user->address }}</td>
								<td>+84{{$user->phone}}</td>
								
								
								
								<td>
									@foreach($products as $product) 
									{{$product->name}}<br>
									@endforeach
								</td>

								@if($user->role == 1)
								<td>Admin</td>
								@else
								<td>User</td>
								@endif



								
								
							</tr>

							
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
	</div>
	<!-- /.row (main row) -->
</div><!-- /.container-fluid -->


@endsection


@section('script')
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/plugins/moment/moment.min.js"></script>
<script src="asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>

@endsection