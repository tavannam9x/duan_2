<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chi tiết sản phẩm </title>

    @include('shop.script')
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    
</head>

<body>

    <div class="main-header">
    @include('shop.header')
    </div>
    <div class="main-background">
    </div>

    <div class="container">
        <div class="loginbox">
            <img src="../../../shop/image/produc-dautay-banchuan.jpg" class="avatar">
            <h1 style="margin-bottom: 20px;"> Đăng nhập </h1>
            <form action="{{route('dangnhap.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" style="font-size: 13px;" value="{{old('email')}}" name="email" placeholder="Email">
                <input type="password" style="font-size: 13px;" value="" name="password" placeholder="Mật khẩu">
                @if (session('errmsg'))
                  <p class="text-danger">{{session('errmsg')}}</p>
                @endif
                <button type="submit" name="">Đăng nhập</button>
                <p>
                <a href="{{ URL::previous() }}"> Trở về </a>

                </p>
            </form>
        </div>
    </div>
</body>

</html>