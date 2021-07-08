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


            <form action="{{route('page.update',$pages->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @isset($pages->page_file)
                <div class="form-group">
                    <label for="">Yüklü Resim</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <img width="100" src="/images/pages/{{$pages->page_file}}" alt="">
                        </div>
                    </div>
                </div>
                @endisset

                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file" class="form-control" name="page_file">

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">Başlık</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="page_title" class="form-control" value="{{$pages->page_title}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="page_slug" class="form-control" value="{{$pages->page_slug}}">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="">İçerik</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="editor1" name="page_content" rows="5"
                                required>{{$pages->page_content}}</textarea>

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
                                <select name="page_status" class="form-control">
                                    <option {{$pages->page_status=="1" ? "selected=''":""}} value="1">Aktif</option>
                                    <option {{$pages->page_status=="0" ? "selected=''":""}} value="0">Pasif</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="old_file" value="{{$pages->page_file}}">

                    <div align="right" class="box-footer">
                        <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

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