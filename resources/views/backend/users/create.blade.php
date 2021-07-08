@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                User Ekleme
            </h3>
        </div>
        <div class="box-body">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file" required class="form-control" name="user_file">

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for=""> Kullanıcı Adı </label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Kullanıcı Adı (Email)</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Şifre</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="form-group">

                    <!-- <input type="hidden" name="old_file" value=""> -->
                    <div class="form-group">
                        <label for="">Durum</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="user_status" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>

                                </select>
                            </div>
                        </div>
                    </div>
 
                    

                    
                    
                    <div align="right" class=" box-footer">
                    
                        <a   href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>
                        <button  class="btn btn-success" type="submit">Ekle</button>
                    </div>
                </div>



            </form>

        </div>
    </div>
</section>


@endsection
@section('css')@endsection
@section('js')@endsection