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
                                                    @foreach($department as $dep)
                                                        <button onclick="fetchEmployees({{$dep->id}})" class="btn btn-info waves-effect waves-light btn-sm mr-1 mt-1">{{$dep->dept_name}} <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                    @endforeach
                                                        </div>
                                                </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row"  id="empCard">
                            @foreach($data as $val)
                            <div class="col-lg-3">
                                <div class=" card card-body">
                                    <div class="media">
                                        <div class="media-body">
                                        <h5 class="text-truncate" style="font-size:15px;color:#495057;text-transform: uppercase;margin-bottom:1px;">{{$val->employee->emp_firstname}} {{$val->employee->emp_lastname}}</h5>
                                            <span class="text-warning">{{$val->employee->department->dept_name}}</span><br>
                                            <span class="text-default">{{$val->employee->emp_phone}}</span>
                                        </div>
                                        <div class="mini-stat-icon align-self-center">
                                            <a href="{{url('employee-attendace').'/'.$val->employee_id}}">
                                                @if($val->employee->emp_photo!=null)
                                                <img class="rounded-circle header-profile-user" style="height:80px; width:80px;"  src="data:image/png;base64,{{ base64_encode($val->employee->emp_photo) }}"  alt="No image">
                                                @else
                                                <img class="rounded-circle header-profile-user" style="height:80px; width:80px;" src="{{asset('assets/images/users/avatar.png')}}"  alt="No image">
                                                @endif
                                            </a>
                                        </div>
                                    </div>

                                    {{ $val->workstate }}
                                    <hr/>
                                        <span class="font-size-14" <?php if($val->workstate==1) { echo 'style="color:green"'; } else { echo  'style="color:red"';} ?> >
                                                <i class="bx bx-time-five"></i>&nbsp @if($val->workstate==1) CheckIn @else CheckOut @endif &nbsp {{ date('h:i:s A', strtotime($val->punch_time)) }}
                                        </span>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
@endsection


@push('scripts')
<script>
    function fetchEmployees(slug) {
    var postData = {
        slug: slug
    };

    var url = "{{ route('employees.show', ':slug') }}";
    url = url.replace(':slug', slug);

    $.get(url, postData, function (response) {
            var data = response.data; // Extract the nested data object
            $('#empCard').empty();

            $.each(data, function(index, val) {

                var url ='employee-attendace/'+val.id;
                var workstateColor = val.workstate === 1 ? 'color: red;' : 'color: green;';
                var workstateText = val.workstate === 0 ? 'CheckIn' : 'CheckOut';
                var punchTime = new Date(val.punch_time);

                var newCard = $('<div class="col-lg-3">' +
                                '   <div class="card card-body">' +
                                '       <div class="media">'+
                                '           <div class="media-body">'+
                                '               <h5 class="text-truncate">' + val.emp_firstname + ' ' + val.emp_lastname + '</h5>' +
                                '               <span class="text-warning">'+val.dept_name+'</span><br>'+
                                '               <span class="text-default">' + val.emp_phone + '</span>' +
                                '           </div>'+
                                '       <div class="mini-stat-icon align-self-center">' +
                                '           <a href="' + url + '">' +
                                '               ' + (val.emp_photo_url ? '<img class="rounded-circle header-profile-user" style="height:80px; width:80px;" src="' + val.emp_photo_url + '" alt="No image">' : '<img class="rounded-circle header-profile-user" style="height:80px; width:80px;" src="{{asset('assets/images/users/avatar.png')}}" alt="No image">') +
                                '           </a>' +
                                '       </div>' +
                                '       </div>' +
                                '       <hr />' +
                                '       <span class="font-size-14" style="' + workstateColor + '">' +
                                '           <i class="bx bx-time-five"></i>&nbsp ' + workstateText + ' &nbsp ' + punchTime.toLocaleTimeString('en-US') +
                                '       </span>' +
                                '       <!-- ... Rest of the card content ... -->' +
                                '   </div>' +
                                '</div>');

                $('#empCard').append(newCard);
            });

    });
}

</script>
@endpush
