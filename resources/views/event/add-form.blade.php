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
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm sự kiện</span>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('event.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="code" value="" class="form-control">
						<label for="form_control_1">Mã giảm giá</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="type" value="" class="form-control">
						<label for="form_control_1">Hình thức giảm giá</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="description" value="" class="form-control">
						<label for="form_control_1">Mô tả </label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="percent_off" value="" class="form-control">
						<label for="form_control_1">Số % giảm</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="minimum" value="" class="form-control">
						<label for="form_control_1">Đơn hàng tối thiểu</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="date" name="start_date" value="" class="form-control">
						<label for="form_control_1">Ngày bắt đầu</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="date" name="end_date" value="" class="form-control">
						<label for="form_control_1">Ngày kết thúc</label>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homeevent')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
			</div>
		</form>
	</div>
</div>
		</div>
	</div>
</div>
@endsection();