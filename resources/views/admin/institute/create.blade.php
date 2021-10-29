<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Create Institute</h4>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Institute Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Telephone</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" value="" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-2 col-form-label text-right">Town</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" id="example-password-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-2 col-form-label text-right">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" id="example-password-input">
                                    </div>
                                </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Grade</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Class Fee Anualy</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-right">Class Fee Qutation</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" value="" id="example-email-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Class Fee Monthly</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" value="" id="example-tel-input">
                                        </div>
                                    </div>
                                    <table class="table table-bordered mb-0 table-centered">
                                        <thead>
                                        <tr>
                                            <th>Grade</th>
                                            <th>Class Fee Anualy</th>
                                            <th>Class Fee Qutar</th>
                                            <th>Class Fee Monthly</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Grage 1</td>
                                            <td>Rs.40000.00</td>
                                            <td>Rs.10000.00</td>
                                            <td>Rs.3000.00</td>
                                            <td>
                                                <a href="" type="button" class="btn btn-danger btn-round">
                                                    <i class="mdi mdi-close" ></i></a>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div>
                            </div>


                            <div class="col-lg-6">

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <a type="button" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</a>
                                    <a type="button" href="{{url('admin/institutes')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    @stop
    <script src="{{asset('frogetor/assets/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('frogetor/assets/pages/jquery.form-upload.init.js')}}"></script>
