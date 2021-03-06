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
   <form action="" method="get">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="col-md-7">
                <input style="border: 1px solid" class="nav-item form-control mr-sm-2" type="text" name="keyword" placeholder="Tìm kiếm.....">
              </div>
              <div class="col-md-2">
                <button class="btn btn-sx yellow"><i class="fa fa-search"></i> Search</button>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </form>
  <div class="row">
    <div class="col-md-12">
          <div class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-picture"></i>Danh sách tài khoản
                </div>
              </div>
              <div class="portlet-body flip-scroll">
                <table class="table table-striped ">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Họ và tên
                    </th>
                    <th>
                       Ảnh đại diện
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Email
                    </th>
                    <th>
                       Địa chỉ
                    </th>
                    <th>
                       Giới Tính
                    </th>
                    <th>
                      Ngày sinh
                    </th>
                    <th>
                      Quyền
                    </th>
                    <th>
                      <a href="{{route('user.add')}}" class="btn btn-primary">
                      <i class="fa fa-plus"></i>Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($taikhoan as $tk)
                <tbody>
                <tr>
                    <td style="width: 50px;">
                       {{$tk->id}}
                    </td>
                    <td style="width: 180px;">
                       {{$tk->name}}
                    </td>
                    <td>
                       <img src="{{$tk->image}}" style="width: 130px;">
                    </td>
                    <td>
                       {{$tk->phone_number}}
                    </td>
                    <td>
                       {{$tk->email}}
                    </td>
                    <td>{{$tk->address}}</td>
                    <td>
                       @if($tk->gender == 1)
                       <p>Nam</p>
                       @elseif($tk->gender == 0)
                       <p>Nữ</p>
                       @endif
                    </td>
                    <td>
                       {{$tk->date_of_birth}}
                    </td>
                    <td>
                     @if($tk->role == "Admin")
                     <p class="btn btn-danger">Admin</p>
                     @elseif($tk->role == "Edirtor")
                     <p class="btn btn-success">Editor</p>
                     @elseif($tk->role == "Shipper")
                     <p class="btn btn-info">Shipper</p>
                     @else
                     <p class="btn btn-warning">Member</p>
                    @endif
                    </td>
                    <td>
                      <a href="{{route('users.edit', ['id' => $tk->id])}}" class="btn btn-success">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('user.remove', ['id' => $tk->id])}}" class="btn btn-danger xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$taikhoan->links()}}</td>
                </tr>
                </table>
            </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
          </div>
    </div>
  </div>
    </div>
</div>
@endsection();
