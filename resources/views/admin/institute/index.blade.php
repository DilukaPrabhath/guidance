@extends('admin.layout.master_ins_tbl')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Institute Table</h4>


                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Institute Name</th>
                                <th>Town</th>
                                <th>Contact</th>
                                <th>email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Institute 01</td>
                                <td>Gampaha</td>
                                <td>0110668362</td>
                                <td>institute1@g.com</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="{{url('/admin/institutes/view')}}" type="button" class="btn btn-dropbox">
                                        <i class="fab far fa-eye" style="color: white; font-size:8px;"></i>
                                    </a>
                                    <a href="{{url('admin/institutes/edit')}}" type="button" class="btn btn-danger">
                                        <i class="fab fas fa-pencil-alt" style="color: white; font-size:8px;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Institute 02</td>
                                <td>Negambo</td>
                                <td>0110668363</td>
                                <td>institute2@g.com</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="{{url('/admin/institutes/view')}}" type="button" class="btn btn-dropbox">
                                        <i class="fab far fa-eye" style="color: white; font-size:8px;"></i>
                                    </a>
                                    <a href="{{url('admin/institutes/edit')}}" type="button" class="btn btn-danger">
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
