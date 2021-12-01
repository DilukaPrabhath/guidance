@extends('admin.layout.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Student Table</h4>


                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Student ID</th>
                                <th>Institute</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Start date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Student Name 1</td>
                                <td>GIS/211004/0001</td>
                                <td>School one</td>
                                <td>0770668362</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>2011/04/25</td>
                                <td>
                                    <a href="{{url('admin/students/view')}}" type="button" class="btn btn-dropbox">
                                        <i class="fab far fa-eye" style="color: white; font-size:8px;"></i>
                                    </a>
                                    <a href="{{url('admin/students/edit')}}" type="button" class="btn btn-danger">
                                        <i class="fab fas fa-pencil-alt" style="color: white; font-size:8px;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Student Name 2</td>
                                <td>GIS/211004/0002</td>
                                <td>School Two</td>
                                <td>0770668363</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>2011/07/25</td>
                                <td>
                                    <a href="{{url('admin/students/view')}}" type="button" class="btn btn-dropbox">
                                        <i class="fab far fa-eye" style="color: white; font-size:8px;"></i>
                                    </a>
                                    <a href="{{url('admin/students/edit')}}" type="button" class="btn btn-danger">
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
        <a href="{{url('admin/students/create')}}" class="btn btn-info px-4 align-self-center report-btn">Add</a>
    </div>
    @stop
