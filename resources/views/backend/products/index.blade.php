@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |Product_Index</title>
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
			<h1 class="m-0 text-dark">Danh sách sản phẩm</h1>

			@if(session()->has('success'))
			<div class="alert alert-success"><span >{{session()->get('success')}}</span></div>
			@endif

			@if(session()->has('error'))
			<span style="color: red">{{session()->get('error')}}</span>
			@endif
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
					<h3 class="card-title">Sản phẩm mới nhập</h3>

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
								<th>Tên sản phẩm</th>
								{{-- <th>Nội dung</th> --}}
								{{-- <th>Danh mục sản phẩm</th> --}}
								<th>Giá bán gốc</th>
								<th>Giá bán ra</th>
								{{-- <th>Ảnh sản phẩm</th> --}}
								<th>Trạng thái</th>
								{{-- <th>Thông số Kỹ thuật</th> --}}
								<th>Action</th>
								{{-- <th>Updated_at</th> --}}
							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							<tr>
								<td>{{ $product->id }}</td>
								<td>{{ $product->name }}</td>
								{{-- <td>{!! $product->content !!}</td> --}}
								{{-- <td>{{ $product->category}}</td> --}}
								<td>{{ number_format($product->origin_price) }}</td>
								<td>{{ number_format($product->sale_price) }}</td>
								{{-- <td>{{$product->images}}</td> --}}
								
								@if($product->status == 0)
								<td>Đang nhập</td>
								@elseif($product->status ==1)
								<td>Mở bán</td>
								@else
								<td>Hết hàng</td>




								@endif
								{{-- <td>
									@foreach (json_decode($product->config) as $config)
									<b>{{ $config->key }}</b>: {{ $config->value }}<br />
									@endforeach

									
								</td> --}}

								
								<td>
									@can('update',$product)
									<a href="{{route('backend.product.show',$product->id)}}"  >
										<button  class="btn btn-success" type="submit"><i class="fa fa-btn fa-eye"></i></button>

									</a>


									<a href="{{route('backend.product.edit',$product->id)}}">
										<button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-edit"></i></button>
										
									</a>
									<a href="{{route('backend.product.destroy',$product->id)}}" >
										<button class="btn btn-danger" type="submit"><i class="fa fa-btn fa-trash-alt"></i></button>

									</a>


									@endcan

									@cannot('update',$product)
									{{-- <a href="{{route('backend.product.show',$product->id)}}"  class="btn btn-success">Detail</a> --}}
									<a href="{{route('backend.product.show',$product->id)}}"  >
										<button  class="btn btn-success" type="submit"><i class="fa fa-btn fa-eye"></i></button>

									</a>

									@endcannot
									

								</td>
								{{-- <td><span class="tag tag-success">Approved</span></td> --}}
								{{-- <td>{{ $product->updated_at }}</td> --}}
								
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
{!! $products->links() !!}

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