@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |Order_Index</title>
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
			<h1 class="m-0 text-dark">Danh sách hóa đơn</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Hóa đơn</a></li>
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
					<h3 class="card-title">Hóa đơn mới nhập</h3>

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
								<th>Tên khách hàng</th>
								{{-- <th>Product_id</th> --}}
								
								{{-- <th>Giá tiền</th> --}}
								<th>Địa chỉ giao hàng</th>
								<th>Số điện thoại </th>
								
								
								<th>Trạng thái</th>
								<th>Action</th>
								{{-- <th>Updated_at</th> --}}
							</tr>
						</thead>
						<tbody>
							@foreach($orders as $order)
							<tr>
								<td>{{ $order->id }}</td>
								<td> {{ $order->name }}</td>
								{{-- <td>{{ $order->product_id }}</td> --}}
								
								{{-- <td>{{number_format($order->total_price)  }}</td> --}}
								<td>{{$order->address}}</td>
								<td>+84{{$order->phone}}</td>

								@if($order->status == 1)
								<td>Đang vận chuyển</td>
								@else
								<td>Đã vận chuyển</td>
								@endif
								
								




								
								@if($order->status == 1)
								
								<td>

									

									

									



									<a href="{{route('backend.order.show',$order->id)}}"  >
										<button  class="btn btn-success" type="submit"><i class="fa fa-btn fa-eye"></i></button>

									</a>

									<a href="{{route('backend.order.delete',$order->id)}}" >
										<button class="btn btn-danger" type="submit"><i class="fa fa-btn fa-trash-alt"></i></button>

									</a>

									<a href="{{route('backend.order.complete',$order->id)}}" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-check"></i></button>

									</a>

									
									
									
									{{-- <a href="{{route('backend.order.show',$order->id)}}"  >
										<button  class="btn btn-success" type="submit"><i class="fa fa-btn fa-eye"></i></button>

									</a>
									
									
									<a href="{{route('backend.order.delete',$order->id)}}" >
										<button class="btn btn-danger" type="submit"><i class="fa fa-btn fa-trash-alt"></i></button>

									</a>

									<a href="{{route('backend.order.complete',$order->id)}}" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-check"></i></button>

									</a>
									--}}

									

									

								</td>
								@else
								<td>
									<a href="{{route('backend.order.show',$order->id)}}"  >
										<button  class="btn btn-success" type="submit"><i class="fa fa-btn fa-eye"></i></button>

									</a>
									
									<a href="{{route('backend.order.delete',$order->id)}}" >
										<button class="btn btn-danger" type="submit"><i class="fa fa-btn fa-trash-alt"></i></button>

									</a>
								</td>
								
								@endif

								
								
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