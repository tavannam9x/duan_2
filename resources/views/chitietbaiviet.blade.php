<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chi tiết sản phẩm </title>

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
                    <h3> Tin tức </h3>
                    <div class="back-directional">
                        <a href="home.html">
                            <a href="home.html"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="blog.html"> Tin tức </a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="blog.html"> {{$cate->title}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main article detail -->
    <div class="main-article-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2> {{$cate->title}} </h2>
                    <div class="detail-content">
                        <div class="postby">
                            <span style="font-size: 12px;">
                                Đăng bởi
                                <b> {{$cate->author}} </b>
                                vào lúc
                                <b> {{$cate->date}}</b>
                            </span>
                        </div>
                        <p>{!!$cate->description!!}</p>
                    </div>
                    <h2> Viết bình luận của bạn </h2>


                    @if(Illuminate\Support\Facades\Auth::check())
                    <div class="detail-form">
                        <form action="{{route('chitietbv', ['id' => $cate->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ Illuminate\Support\Facades\Auth::user()->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" readonly="true">
                            </div>
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="post_id" value="{{$cate->id}}">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3" placeholder="Nội dung"></textarea>
                                @if($errors->first('comment'))
                                <span class="text-danger">{{$errors->first('comment')}}</span>
                                @endif
                            </div>

                            <button type="submit" style="margin-bottom: 30px;" class="btn btn-info btn-add">
                                Gửi bình luận </button>
                        </form>
                    </div>
                    @endif



                    <h2> Bài viết liên quan </h2>
                    <div class="related-post">
                        <div class="row">
                            @foreach($model as $bv)
                            <div class="col-md-4">
                                <div class="related-post-img">
                                    <a href="chitietbaiviet.html">
                                        <img src="{{$bv->image}}" width="100%">
                                    </a>
                                </div>
                                <div class="related-post-title" style="font-size: 20px;">
                                    <a href="#"> {{$bv->title}}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-right">
                        <h4> Danh mục tin </h4>
                        <div class="menu">
                            <ul>
                                <li>
                                    <a href="chitietbaiviet.html">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Tin mới hằng ngày </a>
                                </li>
                                <li>
                                    <a href="chitietbaiviet.html">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Tin giá cả </a>
                                </li>
                                <li>
                                    <a href="chitietbaiviet.html">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Mẹo vặt </a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Main footer -->
    @include('shop.brand')

</html>