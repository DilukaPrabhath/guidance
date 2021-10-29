<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">View Inquery</h4>


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
                                        <td><span class="badge badge-success">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>Institute</th>
                                        <td>Gampaha</td>
                                    </tr>
                                    <tr>
                                        <th>Inatitute</th>
                                        <td>Inatitute 01</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                {{-- <table class="table table-hover mb-0">
                                    <tr>
                                        <th>Image</th>
                                        <td><img src="{{url('frogetor/assets/images/users/user1.jpg')}}" alt=""></td>
                                    </tr>
                                </table> --}}
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <a type="button" href="{{url('admin/inqueries')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
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
