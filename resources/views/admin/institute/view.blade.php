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
                                        <td>Inatitute 01</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>email@g.com</td>
                                    </tr>
                                    <tr>
                                        <th>Telephone</th>
                                        <td>0110668362</td>
                                    </tr>
                                    <tr>
                                        <th>Town</th>
                                        <td>942722742V</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>Pellawaththa,Colombo</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><span class="badge badge-success">Active</span></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table table-bordered mb-0 table-centered">
                                    <thead>
                                    <tr>
                                        <th>Grade</th>
                                        <th>Class Fee Anualy</th>
                                        <th>Class Fee Qutar</th>
                                        <th>Class Fee Monthly</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Grage 1</td>
                                        <td>Rs.40000.00</td>
                                        <td>Rs.10000.00</td>
                                        <td>Rs.3000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Grage 2</td>
                                        <td>Rs.40000.00</td>
                                        <td>Rs.10000.00</td>
                                        <td>Rs.3000.00</td>
                                    <tr>
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
