@extends('layout2.main')
@section('content')
<div class="all" >
<!-- <form method="get" action="" class="form-inline my-2 my-lg-5" style="padding-left: 520px;">
    <input name="keyword" class="nav-item form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" style="width: 500px">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
</form> -->
  <div class="col-md-12" style=" margin-bottom: 20px;">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <form method="get" action="" class="form-inline my-2 my-lg-5">
    <div class="input-group">
      <input type="search" name="keyword" class="form-control" placeholder="Tìm kiếm" style="width: 700px">
      <slan class="input-group-btn">
      <button type="submit" class="btn btn-success" style="height: 33px;"><i class="fa fa-search"></i></button>
      </slan>
    </div>
  </form>
  </div>
  <div class="col-md-3"></div>
  </div>




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
  <div class="col-md-8" style="margin-left:265px;">
        <div class="col-md-12">
          <!-- BEGIN CONDENSED TABLE PORTLET-->
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-picture"></i>Danh sách ảnh slide
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
                     Ảnh slideshow
                  </th>
                  <th>
                     Tên sự kiện
                  </th>

                  <th>
                     Trạng thái
                  </th>
                  <th>
                     <a href="{{route('slideshowimg.add')}}" class="btn btn-primary">
                      <i class="fa fa-plus"></i> Thêm</a>
                  </th>
                </tr>
              </thead>
              @foreach($slideshows as $sl)
              <tbody>
              <tr>
                  <td>
                     {{$sl->id}}
                  </td>
                  <td>
                     <img src="{{$sl->image}}" width="300">
                  </td>
                  <td>
                        {{$model->name}}
                  </td>
                  <td>
                     @if($sl->status == 0)
                       <p class="btn btn-warning">Ẩn slideshow</p>
                      @elseif($sl->status == 1)
                       <p class="btn btn-primary">Hiển thị</p>
                      @endif
                  </td>
                  <td>
                    <a href="{{route('slideshowimg.edit', ['id' => $sl->id])}}" class="btn btn-success">
                    <i class="fa fa-edit"></i> Sửa </a>
                    <a href="javascript:;" linkurl="{{route('slideshowimg.remove', ['id' => $sl->id])}}" class="btn btn-danger xoa">
                    <i class="fa fa-trash-o"></i> Xóa </a>
                  </td>
                </tr>
              </tbody>
              @endforeach
              
            </table>
          </div>
          </div>
          <!-- END CONDENSED TABLE PORTLET-->
        </div>
  </div>
</div>
</div>
@endsection();