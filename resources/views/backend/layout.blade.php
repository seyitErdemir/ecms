<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{$panel_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{$panel_description}}" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/settings/{{$panel_favicon}}">




    <script src="/backend/jquery/dist/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <!-- ckeditor -->

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />



    <!-- DataTables -->
    <link href="/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="/backend/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="/backend/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/backend/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/nedmin/dashboard" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/images/settings/{{$panel_logo}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/images/settings/{{$panel_logo}}" alt="" height="17">
                            </span>
                        </a>

                        <a href="/nedmin/dashboard" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/images/settings/{{$panel_logo}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/images/settings/{{$panel_logo}}" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>




                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="/backend/assets/images/flags/us.jpg" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                <img src="/backend/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                <img src="/backend/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="/backend/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="/backend/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="/backend/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small" key="t-view-all"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">


                                <a href="javascript: void(0);" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <img src="/backend/assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of
                                                    mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View
                                        More..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/images/users/{{Auth::user()->user_file}}" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{route('user.edit',Auth::user()->id)}}"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                                <span key="t-profile">Profile Düzenle</span></a>

                            <a class="dropdown-item d-block" href="{{route('settings.Index')}}"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Ayarlar</span></a>
                            <a class="dropdown-item" href="{{route('nedmin.Logout')}}"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Giriş Ekranı</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{route('nedmin.Logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Güvenli Çıkış</span></a>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="/nedmin/dashboard" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>

                        </li>


                        <li class="menu-title" key="t-apps">Modüller</li>


                        <li>
                            <a href="{{route('user.index')}}" class=" waves-effect">
                                <i class="bx bxs-user-detail"></i>
                                <span key="t-contacts">Kullanıcılar</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('blog.index')}}" class="waves-effect">
                                <i class="bx bx-detail"></i>
                                <span key="t-contacts">Blog</span>
                            </a>

                        </li>

                        <!-- 
                        <li>
                            <a href="{{route('blog.index')}}" class="waves-effect">
                                <i class="bx bx-detail"></i>
                                <span key="t-contacts">Blog</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                            </ul>
                        </li> -->

                        <li>
                            <a href="{{route('settings.Index')}}" class=" waves-effect">
                                <i class="dripicons-gear"></i>
                                <span key="t-blog">Ayarlar</span>
                            </a>
                        </li>


                        <li class="menu-title" key="t-components">Bileşenler</li>
                        <li>
                            <a href="/icons" class="waves-effect">
                                <i class="bx bx-aperture"></i>
                                <span key="t-icons">Icons</span>
                            </a>

                        </li>

                        <li>
                            <a href="/forms" class="waves-effect">
                                <i class="bx bxs-eraser"></i>
                                <span key="t-icons">Forms</span>
                            </a>

                        </li>


                        <li>
                            <a href="/iletisimForm" class="waves-effect">
                                <i class="bx bx-mail-send"></i>
                                <span key="t-icons">İletişim Form</span>
                            </a>

                        </li>
                        <li>
                            <a href="/tables" class="waves-effect">
                                <i class="bx bx-list-ul"></i>
                                <span key="t-icons">Tables</span>
                            </a>

                        </li>




                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->







        @yield('content')

        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->



        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © {{$panel_footer}}
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Seyit
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
    <!-- END layout-wrapper -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="/backend/jquery/dist/jquery.min.js"></script>

    <script src="/backend/assets/libs/jquery/jquery.min.js"></script>
    <script src="/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/backend/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/backend/assets/libs/node-waves/waves.min.js"></script>



    <!-- Required datatable js -->
    <script src="/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/backend/assets/libs/jszip/jszip.min.js"></script>
    <script src="/backend/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/backend/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/backend/assets/js/pages/datatables.init.js"></script>



    <!-- apexcharts -->
    <script src="/backend/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <script src="/backend/assets/js/pages/dashboard.init.js"></script>


    <!-- materialdesign icon js-->
    <script src="/backend/assets/js/pages/materialdesign.init.js"></script>

    <!-- Plugins js -->
    <script src="/backend/assets/libs/dropzone/min/dropzone.min.js"></script>
    <!-- App js -->



    <script src="/backend/jquery-ui/jquery-ui.min.js"></script>

    <script src="/backend/assets/js/app.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



    @if(session()->has('success'))
    <script>
        alertify.success("{{session('success')}}")
    </script>


    @endif
    @if(session()->has('error'))
    <script>
        alertify.error("{{session('error')}}")
    </script>


    @endif

    @foreach ($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
    @endforeach
</body>

</html>