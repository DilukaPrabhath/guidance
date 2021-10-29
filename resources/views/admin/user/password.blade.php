<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Update User Password</h4>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" value="" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-right">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" value="" id="example-email-input">
                                    </div>
                                </div>

                            </div>


                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <a type="button" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</a>
                                    <a type="button" href="{{url('admin/users/edit')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="fas fa-chevron-left" style="margin-right: 5px;"></i>Back</a>
                                </div>
                            </div> --}}
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <a type="button" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</a>
                                <a type="button" href="{{url('admin/users/edit')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Closephp</a>
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
