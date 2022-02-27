@extends('backend.layout')

@section('content')


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Ayarlar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ayarlar</a></li>
                                <li class="breadcrumb-item active">Ayarlar</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <section class="content-header">
                <div class="box box-primary p-4">
                    <div class="box-header with-border">
                      
                        <ul class="nav nav-tabs">

                            @foreach($kategori as $kate)

                            <li class="nav-item">
                                <a class="nav-link @if((Request::segment(4)==null&&$loop->index==0)||Request::segment(4)== $kate['kategori_id'])  active    @endif  " aria-current="page" href="{{route('settings.Kategori',['id'=>$kate['kategori_id']])}}">{{$kate['kategori_title']}}</a>
                            </li>

                            @endforeach

                        </ul>
                    </div>
                    <div class="box-body">
                        <table class="table  ">
                            <form action="{{route('settings.Edit')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <tbody id="sortable">
                                    @foreach( $data['adminSettings'] as $adminSettings)

                                    <tr id="item-{{$adminSettings['id']}}">

                                        <td class="sortable border border-4 p-3">
                                            <div class="row">
                                                <div class="col-9">
                                                    <h6> {{$adminSettings->settings_description}} ({{$adminSettings->settings_key}})
                                                    </h6>

                                                    @if($adminSettings->settings_type=="file")
                                                    @if($adminSettings->settings_value)
                                                    <img width="80px" src="/images/settings/{{$adminSettings->settings_value}}" alt="">

                                                    <input type="file" name="{{$adminSettings->settings_key}}" value="">

                                                    <input type="hidden" name="{{$adminSettings->settings_key}}_old_file" value="{{$adminSettings->settings_value}}">

                                                    @else
                                                    <input type="file" name="{{$adminSettings->settings_key}}" value="">

                                                    @endif

                                                    @elseif($adminSettings->settings_type=="text") <input type="text" name="{{$adminSettings->settings_key}}" class="form-control" value="{{$adminSettings->settings_value}}">

                                                    @else

                                                    @if($adminSettings->settings_type=="ckeditor")
                                                    <textarea class="form-control" id="editor1" name="{{$adminSettings->settings_key}}" rows="5" required>{{$adminSettings->settings_value}}</textarea>
                                                    @endif
                                                    <script>
                                                        CKEDITOR.replace('editor1');
                                                    </script>
                                                    @endif
                                                </div>
                                                <div class="col-3">
                                                    <label for="">Grup</label>
                                                    <div class="row">
                                                        <div class="col-10">

                                                            <select class="form-control" name="{{$adminSettings->settings_key}}_category">
                                                                @foreach($kategori as $kate)
                                                                <option class="form-control" {{$kate['kategori_title']==$adminSettings->settings_category ? "selected=''":""}} value="{{$kate['kategori_title']}}">{{$kate['kategori_title']}}</option>
                                                                @endforeach
                                                            </select>


                                                        </div>
                                                        <div class="col-2">
                                                            @if($adminSettings->settings_delete)
                                                            <a href="javascript:void(0)"><i id="@php echo $adminSettings->id @endphp" class="fas fa-trash"></i></a>
                                                            @endif
                                                        </div>
                                                    </div>


                                                </div>



                                            </div>

                                        </td>





                                    </tr>

                                    @endforeach

                                </tbody>

                                <div align="right" class="box-footer my-3">
                                    <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

                                    <button class="btn btn-warning " type="submit">Güncelle</button>
                                </div>

                            </form>

                        </table>

                    </div>


                </div>
                <div class="box box-primary  my-5  border border-2 border-secondary  p-5"  >
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
                                        <select class="form-control  " name="settings_type">

                                            <option value="text">Text</option>
                                            <option value="file">Resim</option>
                                            <option value="ckeditor">Editor</option>


                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <div class="row">

                                            <label for="">Grup</label>
                                            <select class="form-control js-example-basic-single" name="settings_category">
                                                @foreach($kategori as $kate)
                                                <option class="form-control" value="{{$kate['kategori_title']}}">
                                                    {{$kate['kategori_title']}}
                                                </option>
                                                @endforeach
                                            </select>

                                        </div>




                                    </div>
                                </div>
                            </div>

                            <div align="right" class="box-footer mt-2">
                                <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

                                <button class="btn btn-success" type="submit">Ekle</button>
                            </div>






                        </form>
                    </div>

                </div>
            </section>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

 
</div>
<!-- end main content-->


<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {


        $(".js-example-basic-single").select2({
            tags: true
        });
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