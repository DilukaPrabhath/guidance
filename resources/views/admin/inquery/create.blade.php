<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Create Inquery</h4>


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group row">
                                    <label for="student_name" class="col-sm-3 col-form-label text-right">Student Full Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" name="student_name" id="student_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-sm-3 col-form-label text-right">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" value="" name="dob" id="dob">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Gender</label>
                                    <div class="col-md-9">
                                        <div class="form-check-inline my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="male" checked="" name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="form-check-inline my-1">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="female" name="gender" class="custom-control-input">
                                                <label class="custom-control-label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Institute</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="institute" id="institute">
                                            <option value="">Select Institute</option>
                                            @foreach($institute as $value)
                                            <option value="{{$value->id}}">{{$value->institute_name}}</option>
                                            @endForeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Request Grade</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="request_grade" id="request_grade">
                                            <option value="">Select Grade</option>
                                            <option value="0">Primary</option>
                                            <option value="1">Grade 1</option>
                                            <option value="2">Grade 2</option>
                                            <option value="3">Grade 3</option>
                                            <option value="4">Grade 4</option>
                                            <option value="5">Grade 5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-right">Inquery Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="inquery_type" id="inquery_type">
                                            <option value="">Select Type</option>
                                            <option value="1">Online</option>
                                            <option value="2">Over The Phone</option>
                                            <option value="3">Physicaly</option>
                                        </select>
                                    </div>
                                </div>



                            </div>


                            <div class="col-lg-6">

                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-3 col-form-label text-right">Parent NIC</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" id="example-password-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="parent_name" class="col-sm-3 col-form-label text-right">Parent Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" name="parent_name" id="parent_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="parent_email" class="col-sm-3 col-form-label text-right">Parent Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" value="" name="parent_email" id="parent_email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="parent_mobile" class="col-sm-3 col-form-label text-right">Parent Mobile</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" value="" name="parent_mobile" id="parent_mobile">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label text-right">Parent Address</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" name="address" id="address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="relationship" class="col-sm-3 col-form-label text-right">Relationship</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" name="relationship" id="relationship">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <a type="button" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</a>
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
