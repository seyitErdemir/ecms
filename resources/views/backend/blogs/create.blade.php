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
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file" required class="form-control" name="blog_file">

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">Başlık</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="blog_title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="blog_slug" class="form-control">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="">İçerik</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="editor1" name="blog_content" rows="5"
                                required></textarea>

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
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>

                                </select>
                                </div>
                        </div>
                    </div>
                    <div align="right" class="box-footer">
                        <button class="btn btn-success" type="submit">Ekle</button>
                    </div>
                </div>



            </form>

        </div>
    </div>
</section>


@endsection
@section('css')@endsection
@section('js')@endsection