<link href="{{asset('frogetor/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@extends('admin.layout.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Update Ticket Category</h4>
                        <form action="{{url('/admin/event_tickets/update')}}/{{$ticedit->id}}" method="POST" autocomplete="off" id="regForm" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="hidden" value="{{$t_id}}" name="t_id" id="t_id">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group row">
                                    <label for="ticket_category" class="col-sm-2 col-form-label text-right">Ticket Category Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$ticedit->ticket_category}}" name="ticket_category" id="ticket_category">
                                        @error('ticket_category')
                                        <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-sm-2 col-form-label text-right">Ticket Price</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="{{$ticedit->price}}" name="price" id="price">
                                        @error('price')
                                        <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">


                                <div class="form-group row">
                                    <label for="max_count" class="col-sm-2 col-form-label text-right">Max Count</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="{{$ticedit->max_count}}" name="max_count" id="max_count">
                                        @error('max_count')
                                        <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status" id="status">
                                            <option value="">Select</option>
                                            <option value="1" {{$ticedit->status=='1'?'selected':''}}>Active</option>
                                            <option value="2" {{$ticedit->status=='2'?'selected':''}}>Inactive</option>
                                            <option value="3" {{$ticedit->status=='3'?'selected':''}}>Sold Out</option>
                                        </select>
                                        @error('status')
                                        <div class="alert" style="color: #f93b7a;padding-left: 0px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group row">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-success waves-effect waves-light" style="color: white;"><i class="mdi mdi-check-all mr-2"></i>Submit</button>
                                            <a type="button" href="{{url('admin/event_tickets')}}" class="btn btn-primary waves-effect waves-light" style="margin-left: 5px;"><i class="mdi mdi-close" style="margin-right: 5px;"></i>Close</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="form-group row">

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Max Count</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    @foreach ($tic as $value)
                                    <tr>
                                        <td>{{$value->event}}</td>
                                        <td>{{$value->ticket_category}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{$value->max_count}}</td>
                                        <td>@if ($value->status == 1)
                                            <span class="badge badge-success">Active</span>
                                           @elseif ($value->status == 2)
                                            <span class="badge badge-danger">Inactive</span>
                                            @elseif ($value->status == 3)
                                            <span class="badge badge-warning">Sold Out</span>
                                           @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/event_tickets/edit')}}/{{$value->evt_id}}/{{$value->id}}" type="button" class="btn btn-danger">
                                                <i class="fab fas fa-pencil-alt" style="color: white; font-size:8px;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    @stop

    @section('scripts')

    <script>
        $(document).ready(function() {
            var id  = $("#t_id").val();
            var cat = $("#ticket_category").val();
            $("#regForm").validate({
                rules: {
                    ticket_category: {
                        required: true,
                        maxlength: 70,
                    },
                    price: {
                        required: true,
                    },
                    issue_till: {
                        required: true,
                    },
                    max_count: {
                        required: true,
                    },
                    status: {
                        required: true,
                    }

                },
                messages: {
                    ticket_category: {
                        required: "Ticket Category Name is required",
                        maxlength: "Ticket Category  Name cannot be more than 70 characters",

                    },
                    max_count: {
                        required: "Count is required"
                    },
                    price: {
                        required: "Price is required"
                    },
                    issue_till: {
                        required: "Final issue Date is required"
                    },
                    status: {
                        required: "Status is required"
                    }
                }
            });

        });


    </script>


    @stop
