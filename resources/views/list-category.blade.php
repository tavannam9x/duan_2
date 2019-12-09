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
    <div class="col-md-8" style="margin-left:265px;" >
          <div class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-picture"></i>Danh sách liên hệ
                </div>
              </div>
              <div class="portlet-body flip-scroll">
                <table class="table table-condensed">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên danh mục
                    </th>
                    <th>
                       Mô tả
                    </th>
                    <th>
                       Loại danh mục
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                     <a href="{{route('category.add')}}" class="btn btn-success">
                      <i class="fa fa-plus"></i> Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($danhmuc as $lh)
                <tbody>
                <tr>
                    <td>
                       {{$lh->id}}
                    </td>
                    <td>
                       {{$lh->name}}
                    </td>
                    <td style="width: 200px;">
                       {{Str::limit($lh->description, $limit = 30, $end = '...')}}
                    </td>
                    <td>
                       @if($lh->category_type == 0)
                       Sản Phẩm
                       @elseif($lh->category_type==1)
                       Bài viết
                       @endif
                    </td>
                    <td>
                      @if($lh->status == 0)
                       <p class="btn btn-warning">Ẩn danh mục</p>
                      @elseif($lh->status == 1)
                       <p class="btn btn-success">Hiển thị</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('category.edit', ['id' => $lh->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('category.remove', ['id' => $lh->id])}}" class="btn default btn-danger red xoa"><i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$danhmuc->links()}}</td>
                </tr>
                </table>
            </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
          </div>
    </div>
  </div>
</div>
@endsection();

