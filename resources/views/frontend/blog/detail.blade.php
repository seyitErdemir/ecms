@extends('frontend.layout')
@section('title',"anasayfa cart curt")
@section('content')





<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{$blog['blog_title']}}</h1>


    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="/images/blogs/{{$blog->blog_file}}" alt="">

            <hr>

            <!-- Date/Time -->
            <p>Yayınlanma Tarihi {{$blog->created_at}}</p>

            <hr>

            <!-- Post Content -->
            <p class="lead">{!!$blog->blog_content!!}</p>



            <hr>







        </div>
        <div class="col-md-4">


            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Populer Yazılar</h5>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach( $blogList as $list)
                     <a href="{{route('blog.Detail',$list->blog_slug)}}"><li class="list-group-item">{{$list->blog_title}}</li></a>   
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the
                    new Bootstrap 4 card containers!
                </div>
            </div>

        </div>


    </div>
    <!-- /.row -->


</div>
<!-- /.container -->







@endsection
@section('css') @endsection
@section('js') @endsection