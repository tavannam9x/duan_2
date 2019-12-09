<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nền tảng quản lý & bán hàng tốt nhất cho bạn</title>


    <!-- Link cdn fontawesome -->
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Link Getbootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Slick -->
    <link rel="stylesheet" href="../../../shop/plugins/slick/slick.css">
    <link rel="stylesheet" href="../../../shop/plugins/slick/slick-theme.css">

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="../../../shop/plugins/style.css">

    <!-- Change number -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <!-- <script language="javascript">
        alert('Xin chào các bạn');
    </script> -->

</head>

<?php
use App\Http\Requests\UserRequest;
?>
<body>

    <div class="main-background">
        @include('shop.header')
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