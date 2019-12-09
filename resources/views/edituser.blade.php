<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nền tảng quản lý & bán hàng tốt nhất cho bạn</title>
    @include('shop.script')
</head>

<body>
    <!-- Main-Header -->
    <div class="main-header">
         @include('shop.header')
    </div>

    <!-- Breadcrumb background  -->
    <div class="bread-crumb-background">
        <div class="container-fluid">
            <div class="directional">
                <div class="container">
                    <h3> Cập nhật thông tin cá nhân </h3>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Updatett -->
    <div class="main-update" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-partner">
                        <form  action="{{route('info.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="password" value="{{old('password', $model->password)}}">
                            <input type="hidden" name="role" value="{{old('role', $model->role)}}">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Ảnh đại diện</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" style="border: none; font-size: 13px;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Họ và tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{old('name', $model->name)}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Ngày sinh</label>
                                <div class="col-sm-9">
                                    <input type="date" name="date_of_birth" value="{{old('date_of_birth', $model->date_of_birth)}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone_number" value="{{old('phone_number', $model->phone_number)}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" value="{{old('address', $model->address)}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Giới tính</label>
                                <div class="col-sm-9">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="gender" value="0">Nữ
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="gender" value="1">Nam
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="gender" value="2">Giới tính khác
                                        </label>
                                </div>
                            </div>
                            <button type="submit" style="margin-top: 30px; margin-bottom: 30px;" class="btn btn-info">
                                Cập nhật
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>