@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary p-4">
        <div class="box-header with-border">
            <h3 class="box-title">
                Pages
            </h3>
            <div align="right">
                <a href="{{route('page.create')}}" class="btn btn-success">Ekle</a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Resim</th>
                        <th>Başlık</th>


                        <th></th>
                        <th></th>

                    </tr>

                </thead>
                <tbody id="sortable">
                    @foreach($data['page'] as $page)

                    <tr id="item-{{$page['id']}}">
                        <td width="300" class="sortable">
                            <img width="100" src="/images/pages/{{$page->page_file}}" alt="">
                        </td>
                        <td>{{$page->page_title}}</td>
                        <td width="5"><a href="{{route('page.edit',$page->id)}}"><i class="fas fa-edit"></i></a></td>

                        <td width="5"><a href="javascript:void(0)"><i id="@php echo $page->id @endphp"
                                    class="fas fa-trash"></i></a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
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
                url: "{{route('page.Sortable')}}",
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
            $.ajax({
                type: "DELETE",
                url: "page/" + destroy_id,
                success: function(msg) {
                    if (msg) {
                        $("#item-" + destroy_id).remove();
                        alertify.success("Silme İşlemi Tamamlandı");

                    } else {
                        alertify.error("İşlem Tamamlanamadı");
                    }
                }
            });
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