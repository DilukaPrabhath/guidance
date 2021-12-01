<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">View Inatitute</h4>


                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-hover mb-0">
                                    <tr>
                                        <th>Inatitute Name</th>
                                        <td>{{$value->institute_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$value->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Telephone</th>
                                        <td>{{$value->contact_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address Line 1</th>
                                        <td>{{$value->address_line_1}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address Line 2</th>
                                        <td>{{$value->address_line_2}}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{$value->city}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>@if ($value->status == 1)
                                            <span class="badge badge-success">Active</span>
                                           @elseif ($value->status == 2)
                                            <span class="badge badge-danger">Inactive</span>
                                           @endif</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table table-bordered mb-0 table-centered">
                                    <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Syllabus</th>
                                        <th>Class Fee</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                    </tr>
                                    </tbody>
                                </table><!--end /table-->
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
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
