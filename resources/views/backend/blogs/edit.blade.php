@extends('backend.layout')

@section('content')
<div class="col-8">
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
                                <input type="file" class="form-control" name="blog_file">

                            </div>
                        </div>
                    </div>

                    @isset($blogs->blog_galeri)
                    <div class="form-group">
                        <label for="">Yüklü Galeri Resimleri</label>
                        <div class="row">
                            <ul>
                                @if(!empty($blogs->blog_galeri))
                                @foreach(json_decode($blogs->blog_galeri) as $galeri)
                                <li style="display: inline-block;"><img width="50" src="/images/blogs/{{$galeri}}"
                                        alt="" />
                                </li>
                                @endforeach
                                @else Galeri Bulunmamakta
                                @endif
                            </ul>


                        </div>
                    </div>
                    @endisset
                    <div class="form-group">
                        <label for="">Galeri Resimleri Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="file" name="images[]" multiple>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Başlık</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" name="blog_title" class="form-control"
                                    value="{{$blogs->blog_title}}">
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
                                    <select name="blog_status" class="form-control">
                                        <option {{$blogs->blog_status=="1" ? "selected=''":""}} value="1">Aktif</option>
                                        <option {{$blogs->blog_status=="0" ? "selected=''":""}} value="0">Pasif</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="old_file" value="{{$blogs->blog_file}}">
                        <input type="hidden" name="old_galeri" value="{{$blogs->blog_galeri}}">

                        <div align="right" class="box-footer">
                            <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

                            <button class="btn btn-success" type="submit">Düzenle</button>
                        </div>
                    </div>



                </form>

            </div>
        </div>
    </section>

</div>


@endsection
@section('css')@endsection
@section('js')@endsection