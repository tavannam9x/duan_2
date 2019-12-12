@extends('admin_material_design.admin')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel='stylesheet' type='text/css'
          href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
    <link rel='stylesheet' type='text/css'
          href='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css'>
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
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
            <a href="{{route('admin.product')}}">Sản phẩm</a>
          </li>
        </ul>
      </div>
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
                      <a href="{{route('product.add')}}" class="btn btn-primary">
                              <i class="fa fa-plus "></i> Thêm</a>
                      <table class="table table-striped " id="listProducts">
                        <thead class="flip-content">
                        <tr>
                            <th>Id</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Lượt xem</th>
                            <th>Giá</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                  </div>
                  </div>
                  <!-- END CONDENSED TABLE PORTLET-->
                </div>
          </div>
      </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        $(function () {
            listProducts = $('#listProducts').DataTable(
                {
                    dom: 'lifrtBp',
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: route('product.getData'),
                    },
                    buttons: [
                        'excel',
                    ],
                    columns: [
                        {data:'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {
                            "name": "image",
                            "data": "image",
                            "searchable": false,
                            "render": function (data, type, full, meta) {
                                return "<img src=\"" + data + "\" height=\"70\"/>";
                            },

                            "title": "Image",

                        },
                        {data: 'views', name: 'views'},
                        {data: 'sell_price',
                        name: 'views',
                        render: function(data) {
                          return data+" VNĐ";
                          }
                        },
                        { "data": "action",
                          "name": "action",
                          "orderable": false,
                          "searchable": false,

                        },
                    ],
                    columnDefs: [
                        {
                            'targets': 0,
                            'checkboxes': {
                                'selectRow': true
                            }
                        }
                    ],
                    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
                    select: {
                        'style': 'multi'
                    },
                    order: [1, 'asc'],

                }
            );
        });
        $(function() {
            $.getScript("{{asset('js/bootstrap-confirm-delete.js')}}", function(){
                $('.delete').bootstrap_confirm_delete({
                    heading: 'Delete',
                    message: 'Bạn có chắc chắn muốn xóa không?'
                });
            });
        });
    </script>
@endsection
