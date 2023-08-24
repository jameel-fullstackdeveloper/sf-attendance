@extends('app')
@section('content')
<style>
    .custom-span {
        background-color: white;
        padding: 10px 10px;
        color: #00ff00;
        font-size:16px;
        text-align: center;
    }
</style>




<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Welcome to Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row d-print-none">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body" style="padding-bottom:0px;">

                <div class="col-md-12" style="text-align:center;">
                        <div class="row">
                            <div class="col-md-12">
                                    <a href="#feed_debtor" id="feed_debtor_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Office <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_cash" id="feed_cash_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Labortary  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_khalidshaikh" id="feed_khalidshaikh_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Weighbridge <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_saqibmemon" id="feed_saqibmemon_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Store<i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_faisalmemon" id="feed_faisalmemon_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Boiler<i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_zaheer" id="feed_zaheer_link" class="btn btn-info waves-effect waves-light btn-sm  mr-1">Electric <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_israr" id="feed_israr_link" class="btn btn-info waves-effect waves-light btn-sm  mr-1">Machine  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_qurban" id="feed_qurban_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Office Boy <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1">Supervisor  <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>


                        <div class="row">

                            @foreach($data as $val)
                            <div class="col-lg-4">


                                    <div class="card">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-md-4">
                                            <a href="{{url('employee-attendace').'/'.$val->employee_id}}">
                                                @if($val->employee->emp_photo!=null)
                                                <img class="card-img" height="200"  src="data:image/png;base64,{{ base64_encode($val->employee->emp_photo) }}"  alt="No image">
                                                @else
                                                <img class="card-img" height="200"  src="{{asset('assets/images/users/avatar.png')}}"  alt="No image">
                                                @endif
                                            </a>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="card-body">
                                                <a href="{{url('employee-attendace').'/'.$val->employee_id}}">
                                                    <h5>{{$val->employee->emp_firstname}} {{$val->employee->emp_lastname}}</h5>
                                                </a>

                                                    <p class="card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span style="font-size:15px">Emp ID</span>
                                                                <br>
                                                                <span style="font-size:15px">Hired Date</span>
                                                                <br>
                                                                <span style="font-size:15px">Department</span>
                                                                <br>
                                                                <span style="font-size:15px">Cell #</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span style="font-size:15px">{{$val->employee_id}}</span>
                                                                <br>
                                                                <span style="font-size:15px">{{ date('d-M-Y', strtotime($val->employee->emp_hiredate)) }}</span>
                                                                <br>
                                                                <span style="font-size:15px">{{$val->employee->department->dept_name}}</span>
                                                                <br>
                                                                <span style="font-size:15px">{{$val->employee->emp_phone}}</span>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="custom-span waves-effect waves-light" @if($val->workstate==1) style="color:red" @endif>
                                            <i class="bx bx-time-five"></i>&nbsp @if($val->workstate==0) Check-In @else Check-Out @endif &nbsp {{ date('h:i:s A', strtotime($val->punch_time)) }}

                                        </span>
                                    </div>
                            </div>

                            @endforeach
                        </div>


                    </div>
                </div>
@endsection
