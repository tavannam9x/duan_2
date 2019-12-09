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
                        <i class="fa fa-picture"></i>Danh sách sản phẩm
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
                             Tên sản phẩm
                          </th>
                          <th>
                             Ảnh sản phẩm
                          </th>
                          <th>
                             Giá niêm yết
                          </th>
                          <th>
                             Giá khuyến mãi
                          </th>
                          <th>
                            Danh Mục
                          </th>
                          <th>
                            Lượt xem
                          </th>
                          <th>
                            Hạn sử dụng
                          </th>
                          <th>
                            Trang thái
                          </th>
                          
                          <th>
                             <a href="{{route('product.add')}}" class="btn btn-primary">
                              <i class="fa fa-plus"></i> Thêm</a>
                          </th>
                        </tr>
                      </thead>
                      @foreach($sanpham as $sp)
                      <tbody>
                      <tr>
                          <td>
                             {{$sp->id}}
                          </td>
                          <td style="width: 150px;">
                             {{$sp->name}}
                          </td>
                          <td style="width: 150px;">
                             <img src="{{$sp->image}}" style="width: 230px;">
                          </td>
                          <td style="width: 150px;">
                             {{$sp->list_price}}
                          </td>
                          <td style="width: 150px;">
                             {{$sp->sell_price}}
                          </td>
                          </td>
                          <td style="width: 170px;">
                             @isset($sp->product->name)
                                {{$sp->product->name}}
                             @endisset
                          </td>
                          <td style="width: 100px;">
                             {{$sp->views}}
                          </td>
                          <td style="width: 150px;">
                             {{$sp->expiry_date}}
                          </td>
                          <td>
                             @if($sp->status == 0)
                             <p class="btn btn-warning">Đang chờ duyệt</p>
                             <a href="{{route('product.edits', ['id' => $sp->id])}}" class="btn btn-primary" >
                             <i class="fa fa-edit"></i> Sửa </a>
                              @elseif($sp->status == 1)
                               <p class="btn btn-primary primary">Đã duyệt</p>
                              @endif
                          </td>
                          
                          <td>
                            <a href="{{route('product.edit', ['id' => $sp->id])}}" class="btn btn-success">
                            <i class="fa fa-edit"></i> Sửa </a>
                            <a href="javascript:;" linkurl="{{route('product.remove', ['id' => $sp->id])}}" class="btn default btn-danger red xoa">
                            <i class="fa fa-trash-o"></i> Xóa </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                      <tr>
                        <td colspan="13" class="text-center">{{$sanpham->links()}}</td>
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

