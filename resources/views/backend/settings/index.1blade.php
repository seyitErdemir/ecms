@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary p-4">
        <div class="box-header with-border">
            <h3 class="box-title">
                Ayarlar
            </h3>
        </div>
        <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-1">İd</th>

                        <th class="col-1">Açıklama </th>
                        <th class="col-8">İçerik </th>
                        <th class="col-1"> Anahtar Deger</th>
                        <th class="col-1"> Type</th>
                        <th></th>

                        <th></th>

                    </tr>

                </thead>
                <tbody id="sortable">
                    @php $count=0; @endphp
                    @foreach($data['adminSettings'] as $adminSettings)
                    @php $count++; @endphp
                    <tr id="item-{{$adminSettings['id']}}">
                        <td>{{$count}}</td>
                        <td class="sortable">{{$adminSettings->settings_description}}</td>
                        <td>
                            @if($adminSettings->settings_type=="file")
                            <img width="100px" src="/images/settings/{{$adminSettings->settings_value}}" alt="">

                            @else {{$adminSettings->settings_value}}
                            @endif

                        </td>
                        <td>{{$adminSettings->settings_key}}</td>

                        <td>{{$adminSettings->settings_type}}</td>
                        <td width="5"><a href="{{route('settings.Edit',['id'=>$adminSettings['id']])}}"><i
                                    class="fas fa-edit"></i></a></td>

                        <td width="5">
                            @if($adminSettings->settings_delete)

                            <a href="javascript:void(0)"><i id="@php echo $adminSettings->id @endphp"
                                    class="fas fa-trash"></i></a>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
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
            <form action="{{route('settings.Create')}}" method="" enctype="multipart/form-data">
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
                            <label for="">Grup</label>
                            <select name="settings_category" class="form-control">
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


         



            </form>
        </div>

    </div>
</section>
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