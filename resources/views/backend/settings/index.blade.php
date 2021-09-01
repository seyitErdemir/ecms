@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary p-4">
        <div class="box-header with-border">
            <h3 class="box-title">
                Ayarlar
            </h3>
            <ul class="nav nav-tabs">
                @foreach($kategori as $kate)

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">{{$kate['kategori_title']}}</a>
                </li>

                @endforeach

            </ul>
        </div>
        <div class="box-body">
            <table class="table  ">
                <form action=" " method="post" enctype="multipart/form-data">

                    @csrf
                    <tbody id="sortable">
                        @foreach($kategori as $kate)
                        @php
                         $data=App\Models\Settings::Where('category_id',$kate['kategori_id'] )->get()
                        @endphp
                                @foreach( $data as $adminSettings)

                        <tr id="item-{{$adminSettings['id']}}">

                            <td class="sortable p-3">
                                <div class="row">
                                    <div class="col-9">
                                        <h6> {{$adminSettings->settings_description}} ({{$adminSettings->settings_key}})
                                        </h6>

                                        @if($adminSettings->settings_type=="file")
                                        <img width="100px" src="/images/settings/{{$adminSettings->settings_value}}"
                                            alt="">
                                        <input type="file" value="">
                                        @else <input type="text" class="form-control"
                                            value="{{$adminSettings->settings_value}}">
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <label for="">Grup</label>

                                        <select class="form-control js-example-basic-single" name="settings_category">
                                            <option value="AL">Alabama</option>

                                            <option value="WY">Wyoming</option>
                                        </select>
                                        @if($adminSettings->settings_delete)
                                        <a href="javascript:void(0)"><i id="@php echo $adminSettings->id @endphp"
                                                class="fas fa-trash"></i></a>
                                        @endif
                                    </div>



                                </div>

                            </td>





                        </tr>
 
                              @endforeach
                             <hr>
                        @endforeach
                    </tbody>


                </form>

            </table>
        </div>


    </div>
    <div class="box box-primary  my-5 border p-3">
        <div class="box-header with-border">
            <h3 class="box-title">
                Yeni Ayar Kaydet
            </h3>
        </div>
        <div class="box-body">
            <form action="{{route('settings.Create')}}" method="POST" enctype="multipart/form-data">
                @csrf



                <div class="form-group">

                    <div class="row">
                        <div class="col-3">
                            <label for="">Başlık</label>
                            <input type="text" name="settings_description" class="form-control">
                        </div>
                        <div class="col-3">
                            <label for="">Anahtar</label>
                            <input type="text" name="settings_key" class="form-control">
                        </div>
                        <div class="col-3">
                            <label for="">Tip</label>
                            <input type="text" name="settings_type" class="form-control">
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Grup</label>
                                    <select class="form-control js-example-basic-single" name="settings_category">

                                        <option value="">Boş</option>

                                        @foreach($kategori as $kate)

                                        <option value="{{$kate['kategori_title']}}">{{$kate['kategori_title']}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="">Grup Ekleme</label>

                                    <input type="text" name="settings_category_2" class="form-control">
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

                <div align="right" class="box-footer">
                    <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

                    <button class="btn btn-success" type="submit">Ekle</button>
                </div>






            </form>
        </div>

    </div>
</section>
<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script type="text/javascript">
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#sortable').sortable({
        revert: true,
        handle: ".sortable",
        stop: function(event, ui) {
            var data = $(this).sortable('serialize');
            $.ajax({
                type: "POST",
                data: data,
                url: "{{route('settings.Sortable')}}",
                success: function(msg) {
                    // console.log(msg);
                    if (msg) {
                        alertify.success("İşlem Başarılı");
                    } else {
                        alertify.error("İşlem Başarısız");
                    }
                }
            });

        }
    });
    $('#sortable').disableSelection();

});

$(".fa-trash").click(function() {
    destroy_id = $(this).attr('id');
    alertify.confirm('Silme işlemini onaylayın', 'Bu işlem geri alınamaz',
        function() {
            location.href = "/nedmin/settings/delete/" + destroy_id;
        },
        function() {
            alertify.error('Silme İşlemi İptal Edildi');
        }
    )

});
</script>

@endsection
@section('css')@endsection
@section('js')@endsection