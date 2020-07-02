@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |Category_Index</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="asset/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="asset/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="asset/plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section('content-header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Danh sách danh mục</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
				<li class="breadcrumb-item active">Danh sách</li>
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
					<h3 class="card-title">Danh mục mới nhập</h3>

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
								<th>Tên Danh mục</th>
								<th>Slug</th>
								<th>Updated_at</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->slug }}</td>
								
								{{-- <td>{{ $category->sale_price }}</td>
								<td>{{ $category->image }}</td> --}}
								{{-- <td><span class="tag tag-success">Approved</span></td> --}}
								<td>{{ $category->updated_at }}</td>
								<td>
									<a href="{{route('backend.category.show',$category->id)}}"  class="btn btn-success">Detail</a>
									<a href="{{route('backend.category.edit',$category->id)}}"><button class="btn btn-primary">Edit</button></a>
									
									
									<a href="{{route('backend.category.destroy',$category->id)}}"  class="btn btn-danger">Delete</a>
								</td>
								
							</tr>

							@endforeach
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
{!! $categories -> links() !!}

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