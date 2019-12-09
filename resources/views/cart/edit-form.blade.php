<<<<<<< HEAD
@extends('layout2.main')
<script type="text/javascript"  src="../../../ckeditor/ckeditor.js"></script>
<script type="text/javascript"  src="../../../ckfinder/ckfinder.js"></script>
@section('content')
<div class="portlet light">
=======
@extends('admin_material_design.admin')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <!-- /.modal -->
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->     <!-- BEGIN PAGE HEADER-->
      <h3 class="page-title">
      Coolorganic <small>thực phẩm sạch</small>
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="{{route('homeadmin')}}">Trang chủ</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="{{route('adminsuper')}}">Sản phẩm</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->
		<div class="row">
			<div class="portlet light">
>>>>>>> newest
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Sửa bài viết</span>
		</div>
<<<<<<< HEAD
		<div class="actions">
			<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
			<i class="icon-cloud-upload"></i>
			</a>
			<a class="btn btn-circle btn-icon-only green" href="javascript:;">
			<i class="icon-wrench"></i>
			</a>
			<a class="btn btn-circle btn-icon-only red" href="javascript:;">
			<i class="icon-trash"></i>
			</a>
			<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
			</a>
		</div>
=======
>>>>>>> newest
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('cart.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success">
					<div class="input-icon right">
						<label for="form_control_1">Trạng thái đơn hàng</label>
						<select name="status" class="form-control">
							<option value="1">Đang giao hàng</option>
<<<<<<< HEAD
							<option value="0">Đã giao hàng</option>
=======
							<option value="2">Đã giao hàng</option>
>>>>>>> newest
						</select>
					</div>
				</div>

				<div class="input-icon right">
					<label for="form_control_1">Người giao hàng</label>
					<select name="shipper_id" class="form-control">
						@foreach ($shipper as $sp)
							<option value="{{$sp->id}}"
								@if($sp->id == $model->shipper_id)
									selected
								@endif
								>{{$sp->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homepost')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>
<<<<<<< HEAD

@endsection
=======
		</div>
	</div>
</div>
@endsection();
>>>>>>> newest
