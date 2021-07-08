@extends('backend.layout')

@section('content')

<section class="content-header">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                User Düzenleme
            </h3>
        </div>
        <div class="box-body">

            <form action="{{route('user.update',$users->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @isset($users->user_file)
                <div class="form-group">
                    <label for="">Yüklü Resim</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <img width="100" src="/images/users/{{$users->user_file}}" alt="">
                        </div>
                    </div>
                </div>
                @endisset

                <div class="form-group">
                    <label for="">Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="file" class="form-control" name="user_file">

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">Ad Soyad</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="name" class="form-control" value="{{$users->name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Kullanıcı Adı (Email)</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="email" name="email" class="form-control" value="{{$users->email}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Şifre</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="password" class="form-control">
                            <small>Şifreyi degiştirmek istemiyorsanız boş bırakın.</small>
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <div class="form-group">
                        <label for="">Durum</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="user_status" class="form-control">
                                    <option {{$users->user_status=="1" ? "selected=''":""}} value="1">Aktif</option>
                                    <option {{$users->user_status=="0" ? "selected=''":""}} value="0">Pasif</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="old_file" value="{{$users->user_file}}">

                    <div align="right" class="box-footer">
                        <a href="{{route('nedmin.Index')}}" class="btn btn-primary">Dashboard</a>

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