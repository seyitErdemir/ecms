@extends('backend.layout')

@section('content')
<div class="col-8">
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Slider Ekleme
                </h3>
            </div>
            <div class="box-body">
                <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Resim Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="file" required class="form-control" name="slider_file">

                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">Başlık</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" name="slider_title" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Slug</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" name="slider_slug" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Slider Url</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" name="slider_url" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">İçerik</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="form-control" id="editor1" name="slider_content" rows="5"
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
                                    <select name="slider_status" class="form-control">
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
</div>



@endsection
@section('css')@endsection
@section('js')@endsection