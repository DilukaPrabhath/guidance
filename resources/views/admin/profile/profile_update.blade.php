<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="fro_profile">
                            <div class="row">
                                <div class="col-lg-4 mb-3 mb-lg-0">
                                    <div class="fro_profile-main">
                                        <div class="fro_profile-main-pic">
                                            <img src="{{asset('frogetor/assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle">
                                            <span class="fro-profile_main-pic-change">
                                                <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <div class="fro_profile_user-detail">
                                            <h5 class="fro_user-name">Dhanushka</h5>
                                            <p class="mb-0 fro_user-name-post">Admin</p>
                                        </div>
                                    </div>
                                </div><!--end col-->

                            </div><!--end row-->
                        </div><!--end f_profile-->
                    </div><!--end card-body-->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Full Name</label>
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
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-right">Mobile</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" value="" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-2 col-form-label text-right">NIC</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" id="example-password-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right">User Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option value="">Select</option>
                                            <option value="1" selected>Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right">Institute</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option value="">Select</option>
                                            <option value="1" selected>Institute 1</option>
                                            <option value="2">Institute 2</option>
                                            <option value="3">Institute 3</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <a type="button" href="{{url('admin/profile/password')}}" class="btn btn-danger waves-effect waves-light">Update Password</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <a type="button" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Update</a>
                                    <a type="button" href="{{url('admin/profile')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div>
    @stop
    <script src="{{asset('frogetor/assets/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('frogetor/assets/pages/jquery.form-upload.init.js')}}"></script>
