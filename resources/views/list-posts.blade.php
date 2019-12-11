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
                  <i class="fa fa-picture"></i>Danh sách bài viết
                </div>
              </div>
              <div class="portlet-body flip-scroll">
                <table class="table table-striped">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tiêu đề bài viết
                    </th>
                    <th>
                       Ảnh bài viết
                    </th>
                    <th>
                       Danh mục
                    </th>
                    <th>
                       Lượt xem
                    </th>
                    <th>
                      Ngày đăng bài
                    </th>
                    
                    <th>
                      Tác giả
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                     <a href="{{route('post.add')}}" class="btn btn-primary">
                      <i class="fa fa-plus"></i> Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($baiviet as $bv)
                <tbody>
                <tr>
                    <td>
                       {{$bv->id}}
                    </td>
                    <td style="width: 300px;">
                       {{$bv->title}}
                    </td>

                    <td>
                       <img src="{{$bv->image}}" style="width: 250px;">
                    </td>

                   <!--  <td style="width: 200px;">
>>>>>>> newest
                       {{Str::limit($bv->short_desc, $limit = 50, $end = '...')}}
                    </td>

                    <td style="width: 250px;">
                        <div class="portlet-body" style="width: 250px;">
                          <div class="scroller" style="height:250px;" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                            {!!Str::limit($bv->description, $limit = 300, $end = '...')!!}
                          </div>
                        </div>
<<<<<<< HEAD
                    </td>
=======
                    </td> -->
                    <td>
                       @isset($bv->post->name)
                        {{$bv->post->name}}
                       @endisset
                    </td>
                    <td>
                       {{$bv->views}}
                    </td>
                    <!-- <td style="width: 300px;">
                        {!!$bv->description!!}
                      
                    </td> -->
                    <!-- <td style="overflow: scroll; height: 100px;">
                    {!!$bv->description!!}
                    </td> -->
                    <td>
                       {{$bv->date}}
                    </td>
                    <td>
                       {{$bv->author}}
                    </td>
                    <td>
                      @if($bv->status == 1)
                       <p class="btn btn-warning">Đang chờ duyệt</p>
                       <a href="{{route('post.edits', ['id' => $bv->id])}}" class="btn btn-primary">
                       <i class="fa fa-edit"></i>Sửa</a>
                      @elseif($bv->status == 2)
                       <p class="btn btn-success">Đã duyệt</p>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('post.edit', ['id' => $bv->id])}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('post.remove', ['id' => $bv->id])}}" class="btn btn-danger xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr colbvan="11">
                  <td colspan="11" class="text-center" style="margin: auto;">{{$baiviet->links()}}</td>
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
<script type="text/javascript">
  $(selector).slimScroll({
    width: '300px',
    height: '500px',
    size: '10px',
    position: 'left',
    color: '#ffcc00',
    alwaysVisible: true,
    distance: '20px',
    start: $('#child_image_element'),
    railVisible: true,
    railColor: '#222',
    railOpacity: 0.3,
    wheelStep: 10,
    allowPageScroll: false,
    disableFadeOut: false
    });
</script>
@endsection();