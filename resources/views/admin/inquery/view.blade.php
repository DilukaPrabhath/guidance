<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">

<style>
    .ui-autocomplete {
        max-height: 150px;
        overflow-y: auto;   /* prevent horizontal scrollbar */
        overflow-x: hidden; /* add padding to account for vertical scrollbar */
    }
</style>

@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">View registration Process</h4>



                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" id="tabbasic" data-toggle="tab" href="#home-1" role="tab">Inquery Step</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" id="tabprofile" href="#profile-1" role="tab">Application Step</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" id="tabsetting" href="#settings-1" role="tab">Registration Step</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <table class="table table-hover mb-0">
                                            <tr>
                                                <th>Inquery Number</th>
                                                <td>{{$data[0]->inq_number}}</td>
                                            </tr>
                                            <tr>
                                                <th>Student Full Name</th>
                                                <td>{{$data[0]->student_full_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td>{{$data[0]->dob}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>@if ($data[0]->gender == 1)
                                                    <span>Male</span>
                                                   @elseif ($data[0]->gender == 2)
                                                    <span>Female</span>
                                                   @endif</td>
                                            </tr>
                                            <tr>
                                                <th>Request Institute</th>
                                                <td>{{$data[0]->institute}}</td>
                                            </tr>
                                            <tr>
                                                <th>Request Grade</th>
                                                <td>{{$data[0]->grade}}</td>
                                            </tr>
                                            <tr>
                                                <th>Inquery Type</th>
                                                <td>@if ($data[0]->inq_type == 1)
                                                    <span>Online</span>
                                                   @elseif ($data[0]->inq_type == 2)
                                                    <span>Physical</span>
                                                    @elseif ($data[0]->inq_type == 3)
                                                    <span>Over the Phone</span>
                                                   @endif</td>
                                            </tr>
                                            <tr>
                                                <th>Inquery Status</th>
                                                <td>@if ($data[0]->inq_status == 1)
                                                    <span class="badge badge-danger" style="background-color: purple;">Investigating</span>
                                                   @elseif ($data[0]->inq_status == 2)
                                                    <span class="badge badge-danger" style="background-color: orange;">Confirm</span>
                                                    @elseif ($data[0]->inq_status == 3)
                                                    <span class="badge badge-danger" style="background-color: red;">Not Comming</span>
                                                    @elseif ($data[0]->inq_status ==4)
                                                    <span class="badge badge-danger" style="background-color: green;">Student</span>
                                                   @endif</td>
                                            </tr>
                                            <tr>
                                                <th>Student Status</th>
                                                <td>@if ($data[0]->stu_status == 1)
                                                    <span class="badge badge-danger" style="background-color: purple;">Investigating Step</span>
                                                   @elseif ($data[0]->stu_status == 2)
                                                    <span class="badge badge-danger" style="background-color: orange;">Application Step</span>
                                                    @elseif ($data[0]->stu_status == 3)
                                                    <span class="badge badge-danger" style="background-color: blue;">Interview Step</span>
                                                    @elseif ($data[0]->stu_status == 4)
                                                    <span class="badge badge-danger" style="background-color: green;">Registration Step</span>
                                                    @elseif ($data[0]->stu_status == 5)
                                                    <span class="badge badge-danger" style="background-color: green;">Student</span>
                                                    @elseif ($data[0]->stu_status == 6)
                                                    <span class="badge badge-danger" style="background-color: red;">Leved</span>
                                                   @endif</td>
                                            </tr>


                                        </table>
                                    </div>


                                    <div class="col-lg-6">
                                        <table class="table table-hover mb-0">
                                            <tr>
                                                <th>Parent NIC</th>
                                                <td>{{$data[0]->parent_nic}}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Name</th>
                                                <td>{{$data[0]->parent_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Email</th>
                                                <td>{{$data[0]->parent_email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Mobile</th>
                                                <td>{{$data[0]->parent_mobile}}</td>
                                            </tr>
                                            <tr>
                                                <th>Parent Address</th>
                                                <td>{{$data[0]->parent_address}}</td>
                                            </tr>
                                            <tr>
                                                <th>Relationship</th>
                                                <td>{{$data[0]->parent_relationship}}</td>
                                            </tr>

                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a type="button" data-toggle="tab" id="homebtnext"  href="#profile-1" class="btn btn-outline-info waves-effect waves-light" onClick="refresh1(this)" role="tab"><i class="fas fa-chevron-right" style="margin-right: 5px;"></i>Next</a>
                                            <a type="button" href="{{url('admin/inqueries')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>

                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                <form action="{{url('/admin/applications/update')}}/{{$data[0]->stid}}" method="POST" autocomplete="off" id="regForm2"  enctype="multipart/form-data" >
                                    @csrf
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Application Payment</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="app_pay_st">
                                                    <option value="2" {{$data[0]->application_status=='2'?'selected':''}}>No</option>
                                                    <option value="1" {{$data[0]->application_status=='1'?'selected':''}}>Yes</option>

                                                </select>
                                                @error('app_pay_st')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Interview Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="inter_ty">
                                                    <option value="">Not Partisipate</option>
                                                    <option value="1" {{$data[0]->interview_type=='1'?'selected':''}}>Online</option>
                                                    <option value="2" {{$data[0]->interview_type=='2'?'selected':''}}>Over the Phone</option>
                                                    <option value="3" {{$data[0]->interview_type=='3'?'selected':''}}>Physicaly</option>
                                                </select>
                                                @error('inter_ty')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Interview Status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="inter_st">
                                                    <option value="">Not Partisipate</option>
                                                    <option value="1" {{$data[0]->interview_status=='1'?'selected':''}}>Pass</option>
                                                    <option value="2" {{$data[0]->interview_status=='2'?'selected':''}}>Fail</option>
                                                </select>
                                                @error('inter_st')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Appeal Process</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="re_int">
                                                    <option value="2" {{$data[0]->re_interview_apply=='1'?'selected':''}}>No</option>
                                                    <option value="1" {{$data[0]->re_interview_apply=='1'?'selected':''}}>Yes</option>
                                                </select>
                                                @error('re_int')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-6">

                                    <div class="form-group row">
                                        <label for="recipt_no" class="col-sm-3 col-form-label text-right">Recipt Number</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{$data[0]->resipt_number}}" name="recipt_no" id="recipt_no">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-3 col-form-label text-right">Recipt Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="input-file-now" class="dropify" value="{{$data[0]->resipt_image}}" name="rec_img" id="rec_img" data-default-file="{{url('image/ricipt/'.$data[0]->resipt_image)}}"/>
                                        </div>
                                    </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a type="button" data-toggle="tab" id="proprebtn" href="#home-1" onClick="refresh2(this)" class="btn btn-outline-info waves-effect waves-light"  role="tab"><i class="fas fa-chevron-left" style="margin-right: 5px;"></i>Previous</a>
                                            <a type="button" data-toggle="tab" id="pronextbtn" href="#settings-1" onClick="refresh3(this)" class="btn btn-outline-info waves-effect waves-light"  role="tab"><i class="fas fa-chevron-right" style="margin-right: 5px;"></i>Next</a>
                                            <a type="button" href="{{url('admin/inqueries')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
                                            <button type="submit" id="x" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            </div>

                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                <form action="{{url('/admin/inqueries/registration/update')}}/{{$data[0]->stid}}" method="POST" autocomplete="off" id="regForm3"  enctype="multipart/form-data" >
                                    @csrf
                                <div class="row">

                                    <div class="col-lg-6">
                                        @if ($data[0]->inq_status == 4)
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Student ID</label>
                                            <label class="col-sm-9 col-form-label text-left">{{$data[0]->student_id}}</label>
                                        </div>
                                        @endif


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Institute</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="institute" id="institute">
                                                    <option value="">Select Institute</option>
                                                    @foreach($institute as $value)
                                                    <option value="{{$value->id}}" {{ $value->id == $data[0]->in_id ? 'selected' : '' }}>{{$value->institute_name}}</option>
                                                    @endForeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Grade</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="grade" id="grade">
                                                    <option value="">Select Grade</option>
                                                    <option value="0" {{$data[0]->grade_now=='0'?'selected':''}}>Primary</option>
                                                    <option value="1" {{$data[0]->grade_now=='1'?'selected':''}}>Grade 1</option>
                                                    <option value="2" {{$data[0]->grade_now=='2'?'selected':''}}>Grade 2</option>
                                                    <option value="3" {{$data[0]->grade_now=='3'?'selected':''}}>Grade 3</option>
                                                    <option value="4" {{$data[0]->grade_now=='4'?'selected':''}}>Grade 4</option>
                                                    <option value="5" {{$data[0]->grade_now=='5'?'selected':''}}>Grade 5</option>
                                                    <option value="6" {{$data[0]->grade_now=='6'?'selected':''}}>Grade 6</option>
                                                    <option value="7" {{$data[0]->grade_now=='7'?'selected':''}}>Grade 7</option>
                                                    <option value="8" {{$data[0]->grade_now=='8'?'selected':''}}>Grade 8</option>
                                                    <option value="9" {{$data[0]->grade_now=='9'?'selected':''}}>Grade 9</option>
                                                    <option value="10" {{$data[0]->grade_now=='10'?'selected':''}}>Grade 10</option>
                                                    <option value="11" {{$data[0]->grade_now=='11'?'selected':''}}>Grade 11</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="register_date" class="col-sm-3 col-form-label text-right">Registration Date</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="date" value="{{$data[0]->registration_date}}" id="register_date" name="register_date">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">GIS Pre School Attend</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="gis_pr_sc_at" id="gis_pr_sc_at">
                                                    <option value="">Select</option>
                                                    <option value="1" {{$data[0]->pre_sc_att=='1'?'selected':''}}>Yes</option>
                                                    <option value="2" {{$data[0]->pre_sc_att=='2'?'selected':''}}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gis_sid" class="col-sm-3 col-form-label text-right">GIS Pre School SID Number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->pre_school_id}}" name="gis_sid" id="gis_sid">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="recod" class="col-sm-3 col-form-label text-right">Records</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="2" id="recod" name="recod">{{$data[0]->recod}}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Is Student ID issue?</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="is_id_issue" id="is_id_issue">
                                                    <option value="">Select</option>
                                                    <option value="1" {{$data[0]->is_id_issue=='1'?'selected':''}}>Yes</option>
                                                    <option value="2" {{$data[0]->is_id_issue=='2'?'selected':''}}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Is ID Fee Paid ?</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="is_id_paid" id="is_id_paid">
                                                    <option value="">Select</option>
                                                    <option value="1" {{$data[0]->is_id_fee_paid=='1'?'selected':''}}>Yes</option>
                                                    <option value="2" {{$data[0]->is_id_fee_paid=='2'?'selected':''}}>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Syllubus Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="sy_type" id="sy_type">
                                                    <option value="" selected>Select Type</option>
                                                    <option value="1" {{$data[0]->syllubus_type=='1'?'selected':''}}>Local</option>
                                                    <option value="2" {{$data[0]->syllubus_type=='2'?'selected':''}}>Edexcel</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Payment Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="paymnt_type" id="paymnt_type">
                                                    <option value="">Select</option>
                                                    <option value="1" {{$data[0]->pamt_typ=='1'?'selected':''}}>Anualy</option>
                                                    <option value="2" {{$data[0]->pamt_typ=='2'?'selected':''}}>Qutar</option>
                                                    <option value="3" {{$data[0]->pamt_typ=='3'?'selected':''}}>Monthly</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="stu_img" class="col-sm-3 col-form-label text-right">Student Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="input-file-now" class="dropify" value="{{$data[0]->stu_img}}" name="stu_img" id="stu_img" data-default-file="{{url('image/student/'.$data[0]->stu_img)}}"/>
                                            </div>
                                        </div>

                                        @if ($data[0]->inq_status == 4)
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Student status</label>
                                            <div class="col-sm-9">
                                            @if ($data[0]->stu_status == 5)
                                                <span class="badge badge-danger" style="background-color: green; margin-top:10px;">Student</span>
                                                @elseif ($data[0]->stu_status == 6)
                                                <span class="badge badge-danger" style="background-color: red; margin-top:10px;">Leved</span>
                                            @endif
                                            </div>
                                        </div>
                                        @endif

                                        <hr>

                                        <div class="form-group row">
                                            <label for="gis_sid" class="col-form-label text-left">Emergency Contact Details</label>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nic" class="col-sm-3 col-form-label text-right">NIC</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->emergency_contact_nic}}" name="nic" id="nic">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->emergency_contact_name}}" name="name" id="name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile" class="col-sm-3 col-form-label text-right">Mobile</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->emergency_contact_mobile}}" name="mobile" id="mobile">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="relationship" class="col-sm-3 col-form-label text-right">Relationship</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->emergency_contact_relationship}}" name="relationship" id="relationship">
                                            </div>
                                        </div>

                                        <hr>
                                    </div>


                                    <div class="col-lg-6">

                                        <input class="form-control" type="hidden" value="{{$data[0]->id}}" name="prt_id" id="prt_id">


                                        <div class="form-group row">
                                            <label for="parent_nic" class="col-sm-3 col-form-label text-right">Parent 1 NIC</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->parent_nic}}" name="parent1_nic" id="parent1_nic">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="parent_name" class="col-sm-3 col-form-label text-right">Parent 1 Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->parent_name}}" name="parent1_name" id="parent1_name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="parent_email" class="col-sm-3 col-form-label text-right">Parent 1 Email</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="email" value="{{$data[0]->parent_email}}" name="parent1_email" id="parent1_email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="parent_mobile" class="col-sm-3 col-form-label text-right">Parent 1 Mobile</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" value="{{$data[0]->parent_mobile}}" name="parent1_mobile" id="parent1_mobile">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-sm-3 col-form-label text-right">Parent 1 Address</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->parent_address}}" name="address1" id="address1">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="relationship" class="col-sm-3 col-form-label text-right">Relationship</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$data[0]->parent_relationship}}" name="relationship1" id="relationship1">
                                            </div>
                                        </div>

                                        @if ($prt3 != 0)
                                        <input class="form-control" type="hidden" value="{{$prt2->id}}" name="prt2_id" id="prt2_id">
                                        @else
                                        <input class="form-control" type="hidden" value="0" name="prt2_id" id="prt2_id">
                                        @endif


                                        <div class="form-group row">
                                            <label for="parent_nic2" class="col-sm-3 col-form-label text-right">Parent 2 NIC</label>
                                            <div class="col-sm-9">
                                                @if ($prt3 != 0)
                                                <input class="form-control" type="text" value="{{$prt2->parent_nic}}" name="parent_nic2" id="parent_nic2">
                                                @else
                                                <input class="form-control" type="text" value="" name="parent_nic2" id="parent_nic2">
                                                @endif
                                                @error('parent_nic2')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="parent_name2" class="col-sm-3 col-form-label text-right">Parent 2 Name</label>
                                            <div class="col-sm-9">
                                                @if ($prt3 != 0)
                                                <input class="form-control" type="text" value="{{$prt2->parent_name}}" name="parent_name2" id="parent_name2">
                                                @else
                                                <input class="form-control" type="text" value="" name="parent_name2" id="parent_name2">
                                                @endif
                                                @error('parent_name2')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="parent_email2" class="col-sm-3 col-form-label text-right">Parent 2 Email</label>
                                            <div class="col-sm-9">
                                                @if ($prt3 != 0)
                                                <input class="form-control" type="text" value="{{$prt2->parent_email}}" name="parent_email2" id="parent_email2">
                                                @else
                                                <input class="form-control" type="email" value="" name="parent_email2" id="parent_email2">
                                                @endif
                                                @error('parent_email2')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="parent_mobile2" class="col-sm-3 col-form-label text-right">Parent 2 Mobile</label>
                                            <div class="col-sm-9">
                                                @if ($prt3 != 0)
                                                <input class="form-control" type="text" value="{{$prt2->parent_mobile}}" name="parent_mobile2" id="parent_email2">
                                                @else
                                                <input class="form-control" type="number" value="" name="parent_mobile2" id="parent_mobile2">
                                                @endif
                                                @error('parent_mobile2')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address2" class="col-sm-3 col-form-label text-right">Parent 2 Address</label>
                                            <div class="col-sm-9">
                                                @if ($prt3 != 0)
                                                <input class="form-control" type="text" value="{{$prt2->parent_address}}" name="address2" id="address2">
                                                @else
                                                <input class="form-control" type="text" value="" name="address2" id="address2">
                                                @endif
                                                @error('address2')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="relationship2" class="col-sm-3 col-form-label text-right">Relationship</label>
                                            <div class="col-sm-9">
                                                @if ($prt3 != 0)
                                                <input class="form-control" type="text" value="{{$prt2->parent_relationship}}" name="relationship2" id="relationship2">
                                                @else
                                                <input class="form-control" type="text" value="" name="relationship2" id="relationship2">
                                                @endif
                                                @error('relationship2')
                                                <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <a type="button" data-toggle="tab" id="setprebtn" href="#profile-1" class="btn btn-outline-info waves-effect waves-light" onClick="refresh4(this)"  role="tab"><i class="fas fa-chevron-left" style="margin-right: 5px;"></i>Previous</a>
                                            <button type="submit" id="x" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</button>
                                            <a type="button" href="{{url('admin/students')}}" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>



                            <div class="col-lg-6">

                            </div>

                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    @stop

    @section('scripts')


    <script src="{{asset('frogetor/assets/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('frogetor/assets/pages/jquery.form-upload.init.js')}}"></script>

    <script>
        // function refresh(){

        //     var element1 = document.getElementById("homebtnext");
        //     var element2 = document.getElementById("proprebtn");
        //     var element3 = document.getElementById("pronextbtn");
        //     var element4 = document.getElementById("setprebtn");
        //     element1.classList.remove("active");
        //     element2.classList.remove("active");
        //     element3.classList.remove("active");
        //     element4.classList.remove("active");
        //     }

        function refresh1(){

            var element1 = document.getElementById("homebtnext");
            var element2 = document.getElementById("tabbasic");
            var element3 = document.getElementById("tabprofile");
            var element4 = document.getElementById("setprebtn");
            var element5 = document.getElementById("pronextbtn");
            var element6 = document.getElementById("proprebtn");


            element1.classList.remove("active");
            element2.classList.remove("active");
            element3.classList.add("active");
            element4.classList.remove("active");
            element5.classList.remove("active");
            element6.classList.remove("active");
            }

            function refresh2(){

            var element1 = document.getElementById("proprebtn");
            var element2 = document.getElementById("tabbasic");
            var element3 = document.getElementById("tabprofile");
            var element4 = document.getElementById("homebtnext");
            var element5 = document.getElementById("setprebtn");
            var element6 = document.getElementById("pronextbtn");


            element1.classList.remove("active");
            element3.classList.remove("active");
            element2.classList.add("active");
            element4.classList.remove("active");
            element5.classList.remove("active");
            element6.classList.remove("active");
            }

            function refresh3(){

            var element1 = document.getElementById("pronextbtn");
            var element2 = document.getElementById("tabprofile");
            var element3 = document.getElementById("tabsetting");
            var element4 = document.getElementById("homebtnext");
            var element5 = document.getElementById("setprebtn");
            var element6 = document.getElementById("proprebtn");

            element1.classList.remove("active");
            element2.classList.remove("active");
            element3.classList.add("active");
            element4.classList.remove("active");
            element5.classList.remove("active");
            element6.classList.remove("active");
            }

            function refresh4(){

            var element1 = document.getElementById("setprebtn");
            var element2 = document.getElementById("tabprofile");
            var element3 = document.getElementById("tabsetting");
            var element4 = document.getElementById("homebtnext");
            var element5 = document.getElementById("pronextbtn");
            var element6 = document.getElementById("proprebtn");

            element1.classList.remove("active");
            element3.classList.remove("active");
            element2.classList.add("active");
            element4.classList.remove("active");
            element5.classList.remove("active");
            element6.classList.remove("active");
            }

            $(document).ready(function() {

$("#regForm3").validate({
    rules: {
        institute: {
            required: true,
        },
        grade: {
            required: true,
        },
        register_date: {
            required: true,
        },
        sy_type: {
            required: true,
        },
        paymnt_type: {
            required: true,
        },
        is_id_paid: {
            required: true,
        },
        is_id_issue: {
            required: true,
        },
        gis_pr_sc_at: {
            required: true,
        },
        nic: {
            required: true,
            maxlength: 12,
            minlength: 10,
        },
        name: {
            required: true,
            maxlength: 100
        },
        relationship: {
            required: true,
            maxlength: 100,
        },
        mobile: {
            required: true,
            maxlength: 10,
            minlength: 10,
            number: true,
        },
        parent_nic1: {
            required: true,
            maxlength: 12,
            minlength: 10,
        },
        parent_name1: {
            required: true,
            maxlength: 100
        },
        parent_email1: {
            required: true,
            maxlength: 100,
        },
        parent_mobile1: {
            required: true,
            maxlength: 150,
        },
        address1: {
            required: true,
            maxlength: 100,
        },
        relationship1: {
            required: true,
            maxlength: 50,
        },
        parent_nic2: {
            required: true,
            maxlength: 12,
            minlength: 10,
        },
        parent_name2: {
            required: true,
            maxlength: 100
        },
        parent_email2: {
            required: true,
            maxlength: 100,
        },
        parent_mobile2: {
            required: true,
            maxlength: 150,
        },
        address2: {
            required: true,
            maxlength: 100,
        },
        relationship2: {
            required: true,
            maxlength: 50,
        },


    },
    messages: {
        institute: {
            required: "Institute Name is required",
        },
        grade: {
            required: "Grade is required"
        },
        register_date: {
            required: "Date is required",
        },
        sy_type: {
            required: "Syllubus Type is required"
        },
        paymnt_type: {
            required: "Payment Type is required"
        },
        is_id_paid: {
            required: "Student ID Payment Status is required"
        },
        is_id_issue: {
            required: "Student ID Issue Status is required"
        },
        gis_pr_sc_at: {
            required: "GIS Pre School Attend? Status is required"
        },
        nic: {
            required: "Emargancy Contact NIC is required",
            maxlength: "Emargancy Contact NIC cannot be more than 12 characters",
            minlength: "Emargancy Contact NIC cannot be less than 10 characters"
        },
        name: {
            required: "Emargancy Contact Name is required",
            maxlength: "Emargancy Contact Name cannot be more than 100 characters"
        },
        mobile: {
            required: "Emargancy Contact Mobile Number is required",
            maxlength: "Emargancy Contact Mobile Number cannot be more than 10 characters",
            minlength: "Emargancy Contact Mobile cannot be less than 10 characters"
        },
        relationship: {
            required: "Emargancy Contact Relationship is required",
            maxlength: "Emargancy Contact Relationship cannot be more than 100 characters"
        },
        parent_nic1: {
            required: "Parent 1 NIC is required",
            maxlength: "Parent 1 Contact NIC cannot be more than 12 characters",
            minlength: "Parent 1 Contact NIC cannot be less than 10 characters"
        },
        parent_name1: {
            required: "Parent 1 Contact Name is required",
            maxlength: "Parent 1 Contact Name cannot be more than 100 characters"
        },
        parent_email1: {
            required: "Parent 1 email is required",
            maxlength: "Parent 1 Contact NIC cannot be more than 100 characters"
        },
        parent_mobile1: {
            required: "Parent 1 Number is required",
            maxlength: "Parent 1 Number cannot be more than 10 characters",
            minlength: "Parent 1 cannot be less than 10 characters"
        },
        address1: {
            required: "Parent 1 Address is required",
            maxlength: "Parent 1 Address cannot be more than 150 characters",
        },
        relationship1: {
            required: "Parent 1  Relationship is required",
            maxlength: "Parent 1 Contact Relationship cannot be more than 50 characters"
        },
        parent_nic2: {
            required: "Parent 2 NIC is required",
            maxlength: "Parent 2 Contact NIC cannot be more than 12 characters",
            minlength: "Parent 2 Contact NIC cannot be less than 10 characters"
        },
        parent_name2: {
            required: "Parent 2 Contact Name is required",
            maxlength: "Parent 2 Contact Name cannot be more than 100 characters"
        },
        parent_email2: {
            required: "Parent 2 email is required",
            maxlength: "Parent 2 Contact NIC cannot be more than 100 characters"
        },
        parent_mobile2: {
            required: "Parent 2 Number is required",
            maxlength: "Parent 2 Number cannot be more than 10 characters",
            minlength: "Parent 2 cannot be less than 10 characters"
        },
        address2: {
            required: "Parent 2 Address is required",
            maxlength: "Parent 2 Address cannot be more than 150 characters",
        },
        relationship2: {
            required: "Parent 2  Relationship is required",
            maxlength: "Parent 2 Contact Relationship cannot be more than 50 characters"
        },
    }
});


});






// //autocomplete
// $(document).ready(function(){
// $('#nic').autocomplete({

// source: function(request, response) {
//     console.log('"Hi"');
// var bankname = $('#nic').val().length;
// if (bankname>2) {


//   $.getJSON("{{ url('/student/parent2_nic') }}",
//    {nic:$("#nic").val()},
//       response);
//     }
// },
// minLength: 1,
// width: "100%",
// open: function(event,ui){
//     var autocomplete=$(".ui-autocomplete:visible");
//     var oldTop=autocomplete.offset().top;
//     var newTop = oldTop-$("#nic").height()+25;
//     autocomplete.css("top", newTop);
// },

//     select:function(event,ui){
//     },
// });
// });
// select:function(event,ui){
//     var items = ui.item;
//     var baid = ui.item.cdn;
//     var bni = ui.item.cdi;
//     if(items != ''){

//     document.getElementById('bidn').value = bni;
//     document.getElementById('bcd').value = baid;
//     document.getElementById("bcd").readOnly = true;

//     }
// },
// response: function(event, ui) {
//   $("#cdi").removeClass('data_loading');
//     if (!ui.content.length) {
//       console.log('PIC NEW');
//       $("input[name='bcd']").removeAttr("readonly");
//       document.getElementById('bidn').value = '';
//       document.getElementById('bcd').value = '';
//       $("#bcd").selectpicker('refresh');
//       $("#cdi").val('0');
//     }
// }
// });

      </script>

      <script>
       //   autocomplete
 $(document).ready(function(){
    console.log("HI");
$('#parent_nic2').autocomplete({

    source: function(request, response) {
      $.getJSON("{{ url('/student/parent2_nic') }}",
       {parent_nic2:$("#parent_nic2").val()},
          response);
    },
    minLength: 1,
    width: "100%",
    open: function(event,ui){
        var autocomplete=$(".ui-autocomplete:visible");
        var oldTop=autocomplete.offset().top;
        var newTop = oldTop-$("#parent_nic2").height()+25;
        autocomplete.css("top", newTop);
    },
    select:function(event,ui){
        //console.log(ui);
        var parent_name2 = ui.item.parent_name2;
        var parent_address2 = ui.item.parent_address2;
        var parent_mobile2 = ui.item.parent_mobile2;
        var parent_email2 = ui.item.parent_email2;
        var parent_relationship2 = ui.item.parent_relationship2;

        document.getElementById('parent_name2').value = parent_name2;
        document.getElementById('parent_email2').value = parent_email2;
        document.getElementById('parent_mobile2').value = parent_mobile2;
        document.getElementById('address2').value = parent_address2;
        document.getElementById('relationship2').value = parent_relationship2;
    },
});
 });
      </script>

<script>
    //   autocomplete
$(document).ready(function(){
 console.log("HI2");
$('#nic').autocomplete({

 source: function(request, response) {
   $.getJSON("{{ url('/student/parent2_nic') }}",
    {parent_nic2:$("#nic").val()},
       response);
 },
 minLength: 1,
 width: "100%",
 open: function(event,ui){
     var autocomplete=$(".ui-autocomplete:visible");
     var oldTop=autocomplete.offset().top;
     var newTop = oldTop-$("#nic").height()+25;
     autocomplete.css("top", newTop);
 },
 select:function(event,ui){
     //console.log(ui);
     var name = ui.item.parent_name2;
     var mobile = ui.item.parent_mobile2;

     document.getElementById('name').value = name;
     document.getElementById('mobile').value = mobile;

 },
});
});
   </script>

@stop
