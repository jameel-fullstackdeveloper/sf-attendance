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
            <div class="card-body">
                <div class="col-md-12" style="text-align:center;">
                        <div class="row">
                            <div class="col-md-12">
                                    <a href="#feed_debtor" id="feed_debtor_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Office <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_cash" id="feed_cash_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Labortary  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_khalidshaikh" id="feed_khalidshaikh_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Weighbridge <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_saqibmemon" id="feed_saqibmemon_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Store<i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_faisalmemon" id="feed_faisalmemon_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Boiler<i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_zaheer" id="feed_zaheer_link" class="btn btn-info waves-effect waves-light btn-sm  mr-1 mt-1">Electric <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_israr" id="feed_israr_link" class="btn btn-info waves-effect waves-light btn-sm  mr-1 mt-1">Machine  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_qurban" id="feed_qurban_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Office Boy <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Supervisor  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Medicine  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Maintenance  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Cleaner  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">Godown  <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    <a href="#feed_masood" id="feed_masood_link" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">General  <i class="mdi mdi-arrow-right ms-1"></i></a>
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
                            <div class="col-lg-3">

                            <div class=" card card-body">
                            <div class="media">
                                <div class="media-body">
                                 <h5 class="text-truncate" style="font-size:15px;color:#495057;text-transform: uppercase;margin-bottom:1px;">{{$val->employee->emp_firstname}} {{$val->employee->emp_lastname}}</h5>
                                    <span class="text-warning">{{$val->employee->department->dept_name}}</span><br>
                                    <span class="text-default">{{$val->employee->emp_phone}}</span>
                                    <!--<p><a href="http://erp.sonafeeds.live/allemployees" style="color:#495057"> View Log <i class="fa fa-arrow-circle-right"></i></a></p>-->
                                </div>

                                <div class="mini-stat-icon align-self-center">

                                            <a href="{{url('employee-attendace').'/'.$val->employee_id}}">
                                                @if($val->employee->emp_photo!=null)
                                                <img class="rounded-circle header-profile-user" style="height:80px; width:80px;"  src="data:image/png;base64,{{ base64_encode($val->employee->emp_photo) }}"  alt="No image">
                                                @else
                                                <img class="rounded-circle header-profile-user" style="height:80px; width:80px;" src="{{asset('assets/images/users/avatar.png')}}"  alt="No image">
                                                @endif
                                            </a>


                                           <!--<img class="rounded-circle header-profile-user" style="height:80px; width:80px;" src="http://erp.sonafeeds.live/assets/images/nouser.jpg">-->
                                </div>
                            </div>
                            <hr/>

                                <span class="font-size-14" <?php if($val->workstate==1) { echo 'style="color:red"'; } else { echo  'style="color:green"';} ?> >
                                         <i class="bx bx-time-five"></i>&nbsp @if($val->workstate==0) CheckIn @else CheckOut @endif &nbsp {{ date('h:i:s A', strtotime($val->punch_time)) }}
                                </span>
                        </div>




                            </div>

                            @endforeach
                        </div>


                    </div>
                </div>
@endsection
