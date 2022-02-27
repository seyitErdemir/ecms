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
                        <h4 class="mb-sm-0 font-size-18">Bloglar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                <li class="breadcrumb-item active">Bloglar</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">


                            <h4 class="card-title">Bloglar</h4>

                            <p class="card-title-desc">Altta bulunan tabloda kullanıcı kayıtlarını indirme ( resim hariç ) , silme ve güncelleme işlemleri gerçekleşmektedir.</p>
                            <a href="{{route('blog.create')}}" class="btn btn-success float-end ">Blog Ekle</a>




                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>

                                        <th width="5px">Sıralama</th>
                                        <th>Başlık</th>
                                        <th>Resim</th>
                                        <th>Galeri</th>
                                        <th width="10px">Düzenle</th>
                                        <th width="10px">Sil</th>
                                    </tr>
                                </thead>

                                <tbody id="sortable">
                                    @foreach($data['blog'] as $blog)

                                    <tr id="item-{{$blog['id']}}">
                                        <td width="5px">{{$blog->blog_must}}</td>

                                        <td class="sortable">{{$blog->blog_title}}</td>

                                        <td maxheight="50" maxwidth="50">
                                            <img width="50" src="/images/blogs/{{$blog->blog_file}}" alt="">
                                        </td>

                                        <td>
                                            @if(!empty($blog->blog_galeri))
                                            @foreach(json_decode($blog->blog_galeri) as $galeri)
                                            <li style="display: inline-block;"><img width="50" src="/images/blogs/{{$galeri}}" alt="" /></li>
                                            @endforeach
                                            @else Galeri Bulunmamakta
                                            @endif
                                        </td>

                                        <td><a href="{{route('blog.edit',$blog->id)}}" class="btn btn-warning" href=""><i class="fas fa-edit"></i> Düzenle</a></td>
                                        <td><a href="javascript:void(0)" class="btn btn-danger" href=""><i id="@php echo $blog->id @endphp" class="fas fa-trash"> Sil</i></a></td>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

 
</div>
<!-- end main content-->
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
                    url: "{{route('blog.Sortable')}}",
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
                    url: "blog/" + destroy_id,
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