@extends('app')
@section('content')
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
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="card card border border-primary">
                                            <div class="card-body ">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Total Employees</p>
                                                        <h4 class="mb-0 text-center">{{$employees}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-danger">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center ">Staff</p>
                                                        <h4 class="mb-0 text-center">{{$staff}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-success">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Account Manager</p>
                                                        <h4 class="mb-0 text-center">{{$account_manager}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-warning">
                                            <div class="card-body ">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Supervisor</p>
                                                        <h4 class="mb-0 text-center">{{$supervisor}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-info">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center ">Weighbridge Operator</p>
                                                        <h4 class="mb-0 text-center">{{$WeighbridgeOperator}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-dark">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Medecine Incharge</p>
                                                        <h4 class="mb-0 text-center">{{$MedecineIncharge}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="card card border border-primary">
                                            <div class="card-body ">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Office Boy</p>
                                                        <h4 class="mb-0 text-center">{{$OfficeBoy}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-danger">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center ">General Manager</p>
                                                        <h4 class="mb-0 text-center">{{$GeneralManager}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-success">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Sr Accountant</p>
                                                        <h4 class="mb-0 text-center">{{$SrAccountant}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-warning">
                                            <div class="card-body ">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Jr Accountant</p>
                                                        <h4 class="mb-0 text-center">{{$JrAccountant}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-info">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center ">Dispatch Manager</p>
                                                        <h4 class="mb-0 text-center">{{$DispatchManager}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-dark">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Purchaser</p>
                                                        <h4 class="mb-0 text-center">{{$Purchaser}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="card card border border-primary">
                                            <div class="card-body ">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Recovery</p>
                                                        <h4 class="mb-0 text-center">{{$Recovery}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-danger">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center ">Lab Incharge</p>
                                                        <h4 class="mb-0 text-center">{{$LabIncharge}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-success">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Lab Assistant</p>
                                                        <h4 class="mb-0 text-center">{{$LabAssistant}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-warning">
                                            <div class="card-body ">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center">Dispatch Asistant</p>
                                                        <h4 class="mb-0 text-center">{{$DispatchAsistant}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card border border-info">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="card-title text-center ">Watchman</p>
                                                        <h4 class="mb-0 text-center">{{$Watchman}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
@endsection