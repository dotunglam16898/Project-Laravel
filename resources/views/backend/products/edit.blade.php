@extends('backend.layouts.master')

@section('css')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 3 |product_Edit</title>
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
			<h1 class="m-0 text-dark">Cập nhật sản phẩm</h1>

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
				<li class="breadcrumb-item"><a href="#">Danh mục</a></li>
				<li class="breadcrumb-item active">Cập nhật</li>
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
					<h3 class="card-title">Cập nhật sản phẩm</h3>

				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{route('backend.product.update',$product->id)}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}


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
							<label for="exampleInputEmail1">Tên sản phẩm</label>
							<input type="text" name="name" class="form-control" id="" placeholder="" value="{{$product->name}}">
						</div>
						{{-- <div class="form-group">
							<label for="exampleInputEmail1">Parent_id</label>
							<input type="text" name="parent_id" class="form-control" id="" placeholder="" value="{{$product->parent_id}}">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Depth</label>
							<input type="text" name="depth" class="form-control" id="" placeholder="" value="{{$product->depth}}">
						</div> --}}
						<div class="form-group">
							<label>Danh mục sản phẩm</label>
							{{-- <select name="category_id" class="form-control select2" style="width: 100%;">
								<option>--Chọn danh mục---</option>
								@foreach($categories as $category)
								@if($category->id == $product->category_id)
								
								<option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
								@endif
								@endforeach
							</select> --}}


							<select name="category_id" class="form-control select2" style="width: 100%;">
								<option>--Chọn danh mục---</option>
								@foreach($categories_child as $category_child)
								<option value="{{ $category_child->id }}">{{ $category_child->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Giá gốc</label>
									<input type="text" name="origin_price" class="form-control" placeholder="Điền giá gốc" value="{{$product->origin_price}}">
								</div>
								
							</div>
							<div class="col-6">
								
								<div class="form-group">
									<label>Giá bán</label>
									<input type="text" name="sale_price" class="form-control" placeholder="Điền giá gốc" value="{{$product->sale_price}}">

								</div>
								
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Đặc điểm sản phẩm</label>
							<textarea class="textarea" name="content"
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{$product->content}}</textarea>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Mô tả sản phẩm</label>
							<textarea  name="description" placeholder="Place some text here"
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$product->description}}</textarea>
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">Hình ảnh sản phẩm</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFile"  name="images[]" multiple>
									<label class="custom-file-label" for="exampleInputFile">Choose file</label>
								</div>
								
								<div class="input-group-append">
									<a href=""><button class="input-group-text">Upload</button></a>
								</div>
								
							</div>


							@foreach($images as $image)
							@if($image->product_id == $product->id)
							<div>
								<img src="{{$image->path}}"  width="20%" height="20%">
								<a href="{{route('backend.product.delete_image', $image->id)}}">Xóa</a>
							</div>
							@endif
							@endforeach

						</div>
						<div class="form-group">
							<label>Trạng thái sản phẩm</label>
							<select name="status" class="form-control select2" style="width: 100%;">
								<option>--Chọn trạng thái---</option>
								<option value="0" @if($product->status == 0) selected="selected" @endif>Đang nhập</option>
								<option value="1" @if($product->status == 1) selected="selected" @endif>Mở bán</option>
								<option value="2" @if($product->status == 2) selected="selected" @endif>Hết hàng</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Slug</label>
							<input type="text" name="slug" class="form-control" id="" placeholder="" value="{{$product->slug}}">
						</div>

						
						<div class="form-group">
							<label >Thông số kỹ thuật</label>
							@foreach(json_decode($product->config) as $key => $value)
							<div  id="config">
								
								<div id="div0">
									<input type="text" name="key[]" placeholder="key" value="{{$key }}">
									<input type="text" name="value[]" placeholder="value" value="{{ $value }}">
									<button class="add">+</button>
									<button class="minus" data-id="div0">-</button>
								</div>
							</div>
							@endforeach
						</div>
						
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						{{-- <button type="submit" class="btn btn-default">Huỷ bỏ</button> --}}
						<a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
						<button type="submit" class="btn btn-success">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

@endsection


@section('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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

<script type="text/javascript">
	$(document).ready(function () {
		var index = 1;
		$(document).on("click",".add",function (e) {
			e.preventDefault();
			$("#config").append(" <div id='div"+ index +"'>\n" +
				"        <input type=\"text\" name=\"key[]\" placeholder=\"key\">\n" +
				"        <input type=\"text\" name=\"value[]\" placeholder=\"value\">\n" +
				"        <button class=\"add\">+</button>\n" +
				"        <button class=\"minus\" data-id=\"div"+ index++ +"\">-</button>\n" +
				"    </div>");
			console.log(index);
		});
		$(document).on("click",".minus",function () {
			let id = $(this).data("id");
			$("#"+id).remove();
		});
		$(document).on("click","#submit-form",function () {
			$("#config").submit();
		})
	})
</script>
@endsection