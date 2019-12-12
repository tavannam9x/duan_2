<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nền tảng quản lý & bán hàng tốt nhất cho bạn</title>


    <!-- Link cdn fontawesome -->
    @include('shop.script')

</head>

<?php
use App\Http\Requests\UserRequest;
?>
<body>

    <div class="main-header">
        @include('shop.header')
    </div>

    <div class="main-background">
    </div>

    <div class="container">
        <div class="loginbox">
            <img src="../../../shop/image/produc-dautay-banchuan.jpg" class="avatar">
            <h1 style="margin-bottom: 20px;"> Tạo tài khoản </h1>
            <form action="{{route('dangki.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" style="font-size: 13px;" value="{{old('name')}}" name="name" placeholder="Tên">
                @if(count($errors) > 0)
                    <small><span style="color: black">{{$errors->first('name')}}</span></small>
                @endif
                <input type="text" style="font-size: 13px;" value="{{old('email')}}" name="email" placeholder="Email">
                @if(count($errors) > 0)
                    <small><span style="color: black">{{$errors->first('email')}}</span></small>
                @endif
                <input type="password" style="font-size: 13px;" value="" name="password" placeholder="Mật khẩu">
                @if(count($errors) > 0)
                    <small><span style="color: black">{{$errors->first('password')}}</span></small>
                @endif
                <input type="password" name="repassword" style="font-size: 13px;" value="" placeholder="Nhập lại mật khẩu">
                @if(count($errors) > 0)
                    <small><span style="color: black">{{$errors->first('repassword')}}</span></small>
                @endif
                <input type="hidden" name="role" value="Member">
                <button type="submit" name="">Đăng kí</button>
                <p>
                    <a href="{{ URL::previous() }}"> Trở về </a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>