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
                                <table class="table table-hover mb-0">
                                    <tr>
                                        <th>Full Name</th>
                                        <td>Garrett Winters</td>
                                    </tr>
                                    <tr>
                                        <th>NIC</th>
                                        <td>942722742V</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td>0770668362</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>garrett@g.com</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>Pellawaththa,Colombo</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th>User Type</th>
                                        <td>User</td>
                                    </tr>
                                    <tr>
                                        <th>Inatitute</th>
                                        <td>Inatitute 01</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">

                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <a type="button" href="{{url('/home')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
                                    <a type="button" href="{{url('/admin/profile/update')}}" class="btn btn-danger waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-pencil-outline" style="margin-right: 5px;"></i>Update</a>
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
