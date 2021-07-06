@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                Blog Düzenleme
            </h3>
        </div>
        <div class="box-body">
            
       
            <form action="{{route('blog.update',$blogs->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @isset($blogs->blog_file)
                <div class="form-group">
                    <label for="">Yüklü Resim</label>
                    <div class="row">
                        <div class="col-xs-12">
                                <img width="100" src="/images/blogs/{{$blogs->blog_file}}" alt="">
                        </div>
                    </div>
                </div>
                @endisset

                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file"   class="form-control" name="blog_file">

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">Başlık</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="blog_title" class="form-control" value="{{$blogs->blog_title}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="blog_slug" class="form-control" value="{{$blogs->blog_slug}}">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="">İçerik</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="editor1" name="blog_content" rows="5"
                                required>{{$blogs->blog_content}}</textarea>

                            <script>
                            CKEDITOR.replace('editor1');
                            </script>
                        </div>
                    </div>
                    <!-- <input type="hidden" name="old_file" value=""> -->
                    <div class="form-group">
                        <label for="">Başlık</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="blog_status" class="form-control"  >
                                    <option {{$blogs->blog_status=="1" ? "selected=''":""}} value="1">Aktif</option>
                                    <option {{$blogs->blog_status=="0" ? "selected=''":""}} value="0">Pasif</option>

                                </select>
                                </div>
                        </div>
                    </div>

                    <input type="hidden" name="old_file" value="{{$blogs->blog_file}}">

                    <div align="right" class="box-footer">
                        <button class="btn btn-success" type="submit">Düzenle</button>
                    </div>
                </div>



            </form>

        </div>
    </div>
</section>


@endsection
@section('css')@endsection
@section('js')@endsection