@extends('app')
@section('content')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">{{$pageTitle}}</h4>

                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Employee Pin</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $val)
                                                <tr>
                                                    <td><center>{{$val->emp_pin}}</center></td>
                                                    <td>
                                                    <center><img class="rounded-circle" height="100px" width="100px"  src="data:image/png;base64,{{ base64_encode($val->emp_photo) }}"  alt="No image"></center>
                                                    </td>
                                                    <td>{{$val->emp_firstname}} {{$val->emp_lastname}}</td>
                                                    <td>{{$val->position->posi_name}}</td>
                                                    <td> <i class="bx bx-map"></i> {{$val->emp_address}}</td>
                                                    <td><i class="bx bxs-phone"></i> {{$val->emp_phone}} <br><i class="bx bxs-phone"></i>  {{$val->emp_emergencyphone1}} </td>
                                                    <td><a href="{{url('employee-attendace').'/'.$val->id}}"><button class="btn btn-success">Attendace</button></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
@endsection