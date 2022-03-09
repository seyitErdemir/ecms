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
                        <h4 class="mb-sm-0 font-size-18">Data Tables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Tables</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Buttons example</h4>
                            <a href="{{route('admin.Index')}}" class="btn btn-warning my-2">Yeni Ekle</a>

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>


                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Yeni Ekle</h4>

                            <form action="/admin/ceviriPost" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Group</label>
                                    <input id="formrow-firstname-input" type="text" name="group" class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Key</label>
                                    <input id="formrow-firstname-input" type="text" name="key" class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Value</label>
                                    <input id="formrow-firstname-input" type="text" name="value" class="form-control">

                                </div>



                                <div class="form-group">
                                    <label for="">İçerik</label>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <textarea class="form-control" id="editor1" name="blog_content" rows="5" required></textarea>

                                            <script>
                                                CKEDITOR.replace('editor1');
                                            </script>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Locale</label>
                                    <select id="formrow-inputState" name="locale" class="form-control">
                                        <option value="en">Aktif</option>
                                        <option value="tr">Pasif</option>
                                    </select>
                                </div>


                                <!-- <input type="hidden" name="old_file" value=""> -->

                        </div>



                        <div class="mb-3">


                        </div>
                        <div class="mb-3 p-2">
                            <button type="submit" class="btn btn-success w-md float-end mx-3 ">Ekle</button>
                            <a href="{{route('admin.Index')}}" class="btn btn-primary w-md float-end ms-2">Dashboard</a>

                        </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
<!-- end main content-->

@endsection
@section('css')@endsection
@section('js')@endsection