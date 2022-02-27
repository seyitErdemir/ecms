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
                        <h4 class="mb-sm-0 font-size-18">İletişim Formda Olması Gerekenler</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">İletişim Form</a></li>
                                <li class="breadcrumb-item active">İletişim Form</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12  mt-4 ">
                    <h1>Route </h1>
                    <pre> Routepost('ajax-request', [GeneralControllerclass, 'iletisimForm']); </pre>
                </div>
                <div class="col-12 mt-4 ">
                    <h1>Controller Method </h1>
                    <pre>
   public function iletisimForm(Request $request){
        $mesaj = new Contactforme;

        $mesaj->name = $request->name;
        $mesaj->email = $request->email;
        $mesaj->phone= $request->phone;
        $mesaj->subject= $request->subject;
        $mesaj->comment= $request->comment;


        $mesaj->save();
        $data = $request->all();
        #create or update your data here

        return response()->json(['success'=>'Ajax request submitted successfully','request'=>$request->all()]); }
</pre>
                </div>

                <div class="col-12  mt-4 ">
                    <h1>Form id ve Button id </h1>
                    <pre>
         form action="#" id="ajaxform" >
        button class="save-dataa" type="submit"><span>Gönder</span></button>
</pre>
                </div>

                <div class="col-12  mt-4 ">
                    <h1>Head içinde yer alması gerekenler </h1>
                    <pre>
        meta name="csrf-token" content="{{ csrf_token() }}" />
        link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> /script>
        script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"  >/script>
                    </pre>
                </div>



                <div class="col-12  mt-4 ">
                    <h1>Formdan aldığı verileri yönlendiren JS kodları</h1>
                    <pre>
        script>

        $(".save-dataa").click(function(event){
            event.preventDefault();

            let name = $("input[name=name]").val();
            let email = $("input[name=email]").val();
            let phone = $("input[name=phone]").val();
            let subject = $("input[name=subject]").val();
            let comment = $("textarea[name='comment']").val();

            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "/ajax-request",
                type:"POST",
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    subject:subject,
                    comment:comment,
                    _token: _token
                },
                success:function(response){
                    console.log(response);
                    if(response) {
                        $('.success').text( toastr.success('Size en yakın zamanda dönüş sağlayacagız.', 'E-postanız başarıyla iletilmiştir.', {timeOut: 5000}));
                        $("#ajaxform")[0].reset();
                    }
                },
            });
        });
        </,script>
                    </pre>
                </div>



            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@endsection
@section('css')@endsection
@section('js')@endsection