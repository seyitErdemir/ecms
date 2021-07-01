@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                Settings
            </h3>
        </div>
        <div class="box-body">

            <form action="{{route('settings.Update',['id'=>$settings['id']])}}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Açıklama</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" readonly class="form-control"
                                value="{{$settings->settings_description}}">
                        </div>
                    </div>
                </div>
                @if($settings->settings_type=="file")
                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file" class="form-control" name="settings_value">

                        </div>
                    </div>
                </div>
                @endif


                <div class="form-group">
                    <label for="">Açıklama</label>
                    <div class="row">
                        <div class="col-xs-12">
                            @if($settings->settings_type=="text")
                            <input type="text" class="form-control" name="settings_value" required
                                value="{{$settings->settings_value}}">
                            @endif
                            @if($settings->settings_type=="textarea")
                            <textarea class="form-control" name="settings_value" rows="5"
                                required>{{$settings->settings_value}}</textarea>
                            @endif

                            @if($settings->settings_type=="file")
                            <img width="100px" src="/images/settings/{{$settings->settings_value}}" alt="">
                            @endif

                            @if($settings->settings_type=="ckeditor")
                            <textarea class="form-control" id="editor1" name="settings_value" rows="5"
                                required>{{$settings->settings_value}}</textarea>
                            @endif
                            <script>
                            CKEDITOR.replace('editor1');
                            </script>
                        </div>
                    </div>
                    @if($settings->settings_type=="file")
                        <input type="hidden" name="old_file" value="{{$settings->settings_value}}">
                    @endif
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