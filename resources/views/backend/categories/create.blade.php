@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |Category_Create</title>
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
			<h1 class="m-0 text-dark">Tạo danh mục</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Danh mục</a></li>
				<li class="breadcrumb-item active">Tạo mới</li>
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
					<h3 class="card-title">Tạo mới danh mục</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{route('backend.category.store')}}">
					@csrf


					<div class="card-body">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<div class="form-group">
							<label for="exampleInputEmail1">Tên danh mục</label>
							<input type="text" name="name" class="form-control" id="" placeholder="Tên người dùng">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Parent_id</label>
							<input type="text" name="parent_id" class="form-control" id="" placeholder="Tên người dùng">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Depth</label>
							<input type="text" name="depth" class="form-control" id="" placeholder="Tên người dùng">
						</div>
						{{-- <div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Số điện thoại</label>
							<input type="text" name="phone" class="form-control" id="" placeholder="SĐT người dùng">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Địa chỉ</label>
							<input type="text" name="address" class="form-control" id="" placeholder="Địa chỉ người dùng">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Mật khẩu</label>
							<input type="password" name="password" class="form-control" id="">
						</div> --}}
						{{-- <div class="form-group">
							<label for="exampleInputEmail1">Nhập lại mật khẩu</label>
							<input type="password" name="repassword" class="form-control" id="">
						</div> --}}
						{{-- <div class="form-group">
							<label>Quyền</label>
							<select class="form-control select2" name="role" style="width: 100%;">
								<option>Chọn quyền</option>
								<option value="1">Admin</option>
								<option value="2">User</option>
							</select>
						</div> --}}
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						{{-- <button type="submit" class="btn btn-default">Huỷ bỏ</button> --}}
						<a href="{{ route('backend.category.index') }}" class="btn btn-default">Huỷ bỏ</a>
						<button type="submit" class="btn btn-sucess">Tạo mới</button>
					</div>
				</form>
			</div>
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