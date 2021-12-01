@extends('admin.layout.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Applications Table</h4>


                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Inq Num</th>
                                <th>Appli Num</th>
                                <th>Student Name</th>
                                <th>Grade</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>INQ/0000010</td>
                                <td>APL/0000001</td>
                                <td>Amila Dilshan</td>
                                <td>Grade 10</td>
                                <td>0110668363</td>
                                <td>amila@gmail.com</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="{{url('/admin/applications/view')}}" type="button" class="btn btn-dropbox">
                                        <i class="fab far fa-eye" style="color: white; font-size:8px;"></i>
                                    </a>
                                    <a href="{{url('admin/applications/edit')}}" type="button" class="btn btn-danger">
                                        <i class="fab fas fa-pencil-alt" style="color: white; font-size:8px;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>INQ/0000011</td>
                                <td>APL/0000002</td>
                                <td>Bharatha Shashiruwan</td>
                                <td>Grade 10</td>
                                <td>0110668399</td>
                                <td>shashiruwan@gmail.com</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="{{url('/admin/applications/view')}}" type="button" class="btn btn-dropbox">
                                        <i class="fab far fa-eye" style="color: white; font-size:8px;"></i>
                                    </a>
                                    <a href="{{url('admin/applications/edit')}}" type="button" class="btn btn-danger">
                                        <i class="fab fas fa-pencil-alt" style="color: white; font-size:8px;"></i>
                                    </a>
                                </td>
                            </tr>



                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    @stop

    @section('button')
    <div class="float-right align-item-center mt-2">
        <a href="{{url('admin/applications/create')}}" class="btn btn-info px-4 align-self-center report-btn">Add</a>
    </div>
    @stop
