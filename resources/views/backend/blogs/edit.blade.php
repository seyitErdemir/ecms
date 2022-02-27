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
                        <h4 class="mb-sm-0 font-size-18">Blog Düzenle</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                <li class="breadcrumb-item active">Blog Düzenle</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Blog Düzenle</h4>

                            <form action="{{route('blog.update',$blogs->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @isset($blogs->blog_file)
                                <div class="form-group">
                                    <label for="">Yüklü Resim</label>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <img width="100" src="/images/blogs/{{$blogs->blog_file}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                @endisset
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Blog Resmi</label>
                                    <input id="formrow-firstname-input" type="file"   class="form-control" name="blog_file">
                                </div>



                                @isset($blogs->blog_galeri)
                                <div class="form-group">
                                    <label for="">Yüklü Galeri Resimleri</label>
                                    <div class="row">
                                        <ul>
                                            @if(!empty($blogs->blog_galeri))
                                            @foreach(json_decode($blogs->blog_galeri) as $galeri)
                                            <li style="display: inline-block;"><img width="50" src="/images/blogs/{{$galeri}}" alt="" />
                                            </li>
                                            @endforeach
                                            @else Galeri Bulunmamakta
                                            @endif
                                        </ul>


                                    </div>
                                </div>
                                @endisset
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Blog Galerisi Resmi</label>
                                    <input id="formrow-firstname-input" class="form-control" type="file" name="images[]" multiple>
                                </div>

                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Başlık</label>
                                    <input id="formrow-firstname-input" type="text" name="blog_title" class="form-control" value="{{$blogs->blog_title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Slug</label>
                                    <input id="formrow-firstname-input" type="text" name="blog_slug" class="form-control" value="{{$blogs->blog_slug}}">
                                </div>


                                <div class="form-group">
                                    <label for="">İçerik</label>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <textarea class="form-control" id="editor1" name="blog_content" rows="5" required>{{$blogs->blog_content}}</textarea>

                                            <script>
                                                CKEDITOR.replace('editor1');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Başlık</label>
                                    <select id="formrow-inputState" name="blog_status" class="form-control">
                                        <option {{$blogs->blog_status=="1" ? "selected=''":""}} value="1">Aktif</option>
                                        <option {{$blogs->blog_status=="0" ? "selected=''":""}} value="0">Pasif</option>
                                    </select>
                                </div>
                                <input type="hidden" name="old_file" value="{{$blogs->blog_file}}">
                                <input type="hidden" name="old_galeri" value="{{$blogs->blog_galeri}}">
                                <!-- <input type="hidden" name="old_file" value=""> -->

                        </div>

                        <div class="mb-3">


                        </div>
                        <div class="mb-3 p-2">
                            <button type="submit" class="btn btn-warning  w-md float-end  mx-3 ">Güncelle</button>
                            <a href="{{route('nedmin.Index')}}" class="btn btn-primary w-md float-end ms-2">Dashboard</a>

                        </div>
                        </form>





 


                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
 
</div>
<!-- end main content-->



@endsection
@section('css')@endsection
@section('js')@endsection