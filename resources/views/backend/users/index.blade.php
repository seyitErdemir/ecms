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
                        <h4 class="mb-sm-0 font-size-18">Kullanıcılar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Kullanıcı</a></li>
                                <li class="breadcrumb-item active">Kullanıcılar</li>
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


                            <h4 class="card-title">Kullanıcılar</h4>

                            <p class="card-title-desc">Altta bulunan tabloda kullanıcı kayıtlarını indirme ( resim hariç ) , silme ve güncelleme işlemleri gerçekleşmektedir.</p>
                            <a href="{{route('user.create')}}" class="btn btn-success float-end ">Kullanıcı Ekle</a>




                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>

                                        <th>Kullanıcı Resmi</th>
                                        <th>Ad Soyad</th>
                                        <th width="10px">Düzenle</th>
                                        <th width="10px">Sil</th>
                                    </tr>
                                </thead>

                                <tbody  >
                                    @foreach($data['user'] as $user)

                                    <tr >


                                        <td width="300" class="sortable" maxheight="50" maxwidth="50">
                                            <img width="50" src="/images/users/{{$user->user_file}}" alt="">
                                        </td>
                                        <td>{{$user->name}}</td>


                                        <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning" href=""><i class="fas fa-edit"></i> Düzenle</a></td>
                                        <td><a href="javascript:void(0)" class="btn btn-danger" href=""><i id="@php echo $user->id @endphp" class="fas fa-trash"> Sil</i></a></td>
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
    

    $(".fa-trash").click(function() {
        destroy_id = $(this).attr('id');
        alertify.confirm('Silme işlemini onaylayın', 'Bu işlem geri alınamaz',
            function() {
                $.ajax({
                    type: "DELETE",
                    url: "user/" + destroy_id,
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