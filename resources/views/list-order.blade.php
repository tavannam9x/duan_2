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
            <!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="col-md-12">
          <div class="tabbable-line boxless">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab_1" data-toggle="tab">
                Chưa xử lý </a>
              </li>
              <li>
                <a href="#tab_2" data-toggle="tab">
                Đang giao hàng </a>
              </li>
              <li>
                <a href="#tab_3" data-toggle="tab">
                Đã xử lý </a>
              </li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="portlet-body flip-scroll">
                <table class="table table-striped">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên khách hàng
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Địa chỉ nhận
                    </th>
                    <th>
                       Lời nhắn
                    </th>
                    <th>
                       Ngày nhận
                    </th>
                    <th>
                       Ngày gửi
                    </th>
                    <th>
                       Tổng tiền
                    </th>
                    <th>
                       Người giao hàng
                    </th>
                    <th>
                       Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($order0 as $lc)
                <tbody>
                <tr>
                    <td>
                       {{$lc->id}}
                    </td>
                    <td style="width: 150px;">
                       {{$lc->name}}
                    </td>
                    <td>
                       {{$lc->phone_number}}
                    </td>
                    <td style="width: 250px;">
                       {{$lc->order_address}}
                    </td>
                    <td style="width: 200px;">
                       {{$lc->note}}
                    </td>
                    <td>
                       {{$lc->order_date}}
                    </td>
                    <td>
                       {{$lc->sent_date}}
                    </td>
                    <td>
                       {{$lc->total_price}} VNĐ
                    </td>
                    <td>
                       @isset($lc->shipper->name)
                        {{$lc->shipper->name}}
                       @endisset
                    </td>
                    <td>
                      @if($lc->status == 0)
                       <p class="btn btn-warning">Chưa xử lý</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('cart.edit', ['id' => $lc->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="{{route('homecartdetail', ['id' => $lc->id])}}" class="btn btn-success">
                      <i class="fa fa-edit"></i> Chi tiết </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                @if($order0 != null)
                <tr>
                  <td colspan="13" class="text-center">{{$order0->links()}}</td>
                </tr>
                @endif
                </table>
              </div>
              </div>
              <div class="tab-pane" id="tab_2">
                <div class="portlet-body flip-scroll">
                <table class="table table-striped">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên khách hàng
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Địa chỉ nhận
                    </th>
                    <th>
                       Lời nhắn
                    </th>
                    <th>
                       Ngày nhận
                    </th>
                    <th>
                       Ngày gửi
                    </th>
                    <th>
                       Tổng tiền
                    </th>
                    <th>
                       Người giao hàng
                    </th>
                    <th>
                       Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($order1 as $lc)
                <tbody>
                <tr>
                    <td>
                       {{$lc->id}}
                    </td>
                    <td style="width: 150px;">
                       {{$lc->name}}
                    </td>
                    <td>
                       {{$lc->phone_number}}
                    </td>
                    <td style="width: 250px;">
                       {{$lc->order_address}}
                    </td>
                    <td style="width: 200px;">
                       {{$lc->note}}
                    </td>
                    <td>
                       {{$lc->order_date}}
                    </td>
                    <td>
                       {{$lc->sent_date}}
                    </td>
                    <td>
                       {{$lc->total_price}} VNĐ
                    </td>
                    <td>
                       @isset($lc->shipper->name)
                        {{$lc->shipper->name}}
                       @endisset
                    </td>
                    <td>
                      @if($lc->status == 1)
                       <p class="btn btn-info">Đang giao hàng</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('cart.edit', ['id' => $lc->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="{{route('homecartdetail', ['id' => $lc->id])}}" class="btn btn-success">
                      <i class="fa fa-edit"></i> Chi tiết </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                @if($order1 != null)
                <tr>
                  <td colspan="13" class="text-center">{{$order1->links()}}</td>
                </tr>
                @endif
                </table>
              </div>
              </div>
              <div class="tab-pane" id="tab_3">
                <div class="portlet-body flip-scroll">
                <table class="table table-striped">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên khách hàng
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Địa chỉ nhận
                    </th>
                    <th>
                       Lời nhắn
                    </th>
                    <th>
                       Ngày nhận
                    </th>
                    <th>
                       Ngày gửi
                    </th>
                    <th>
                       Tổng tiền
                    </th>
                    <th>
                       Người giao hàng
                    </th>
                    <th>
                       Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($order2 as $lc)
                <tbody>
                <tr>
                    <td>
                       {{$lc->id}}
                    </td>
                    <td style="width: 150px;">
                       {{$lc->name}}
                    </td>
                    <td>
                       {{$lc->phone_number}}
                    </td>
                    <td style="width: 250px;">
                       {{$lc->order_address}}
                    </td>
                    <td style="width: 200px;">
                       {{$lc->note}}
                    </td>
                    <td>
                       {{$lc->order_date}}
                    </td>
                    <td>
                       {{$lc->sent_date}}
                    </td>
                    <td>
                       {{$lc->total_price}} VNĐ
                    </td>
                    <td>
                       @isset($lc->shipper->name)
                        {{$lc->shipper->name}}
                       @endisset
                    </td>
                    <td>
                      @if($lc->status == 2)
                       <p class="btn btn-success">Đã giao</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('cart.edit', ['id' => $lc->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="{{route('homecartdetail', ['id' => $lc->id])}}" class="btn btn-success">
                      <i class="fa fa-edit"></i> Chi tiết </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
               @if($order2 != null)
                <tr>
                  <td colspan="13" class="text-center">{{$order2->links()}}</td>
                </tr>
                @endif
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
          </div>
    </div>
  </div>

    </div>
</div>
@endsection();
