@extends('app')
@section('content')
<style>
    .custom-span {
        background-color: #9d9d9d;
        padding: 10px 10px;
        color: #00ff00;
        font-size:20px;
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
                        <div class="row">

                            @foreach($data as $val)

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-4">
                                            <img class="card-img" height="200"  src="data:image/png;base64,{{ base64_encode($val->employee->emp_photo) }}"  alt="Card image">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3>{{$val->employee->emp_firstname}} {{$val->employee->emp_lastname}}</h3>
                                                <p class="card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span style="font-size:15px">Emp ID</span>
                                                            <br>
                                                            <span style="font-size:15px">Hired Date</span>
                                                            <br>
                                                            <span style="font-size:15px">Department</span>
                                                            <br>
                                                            <span style="font-size:15px">Card Number</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span style="font-size:15px">{{$val->employee_id}}</span>
                                                            <br>
                                                            <span style="font-size:15px">{{ date('d-M-Y', strtotime($val->employee->emp_hiredate)) }}</span>
                                                            <br>
                                                            <span style="font-size:15px">{{$val->employee->department->dept_name}}</span>
                                                            <br>
                                                            <span style="font-size:15px">{{$val->employee->emp_cardNumber}}</span>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="custom-span waves-effect waves-light">
                                        <i class="bx bx-time-five"></i>&nbsp @if($val->workstate==0) Check-In @else Check-Out @endif &nbsp {{ date('H:i:s', strtotime($val->punch_time)) }}

                                    </span>
                                </div>
                            </div>

                            @endforeach
                        </div>

                     
                    </div>
                </div>
@endsection