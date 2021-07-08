@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                Page Ekleme
            </h3>
        </div>
        <div class="box-body">
            <form action="{{route('page.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file" required class="form-control" name="page_file">

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">Başlık</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="page_title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="page_slug" class="form-control">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label for="">İçerik</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="editor1" name="page_content" rows="5"
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
                                <select name="page_status" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div align="right" class="box-footer">
                        <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

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