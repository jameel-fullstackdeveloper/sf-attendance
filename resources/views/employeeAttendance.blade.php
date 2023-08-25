@extends('app')
@section('content')
<style>
    table tr, table th {
        text-align: center;
        font-size:14px;
    }
    .rounded-select {
            border-radius: 500px;
        }

    #infotable td {
        font-size:14px;
        white-space: normal;
    }
</style>
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-4">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">{{$pageTitle}}</h4>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="mb-0 font-size-18" style="color:red"></span>
                    </div>
                </div>

                <div class="row">

                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body" style="text-align:center;">

                        <h4 class="card-title mb-4 text-uppercase text-success"> Employee Info</h4>

                        @if($val->employee->emp_photo!=null)
                            <img class=" mb-3 rounded-circle header-profile-user" style="height:200px; width:200px;"
                                 src="data:image/png;base64,{{ base64_encode($empName->emp_photo) }}">
                        @else
                        <img class=" mb-3 rounded-circle header-profile-user" style="height:200px; width:200px;"
                                 src="{{asset('assets/images/users/avatar.png')}}">
                        @endif


                            <h5 class="text-truncate mb-2" style="font-size:18px;color:#495057;text-transform: uppercase;">{{$empName->emp_firstname}}  {{$empName->emp_lastname}}</h5>

                                    <table id="infotable" class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align:left">Department: </td>
                                                <td style="text-align:left">{{$empName->department->dept_name}}</td>
                                            </tr>

                                            <tr>
                                                <td style="text-align:left">Position: </td>
                                                <td style="text-align:left"> {{$empName->position->posi_name }}</td>
                                            </tr>

                                            <tr>
                                                <td style="text-align:left">Hire Date: </td>
                                                <td style="text-align:left">{{ date('d-M-Y', strtotime($empName->emp_hiredate)) }} </td>
                                            </tr>

                                            <tr>
                                                <td style="text-align:left">Address: </td>
                                                <td style="text-align:left"><i class="bx bx-map"></i> {{$empName->emp_address }}</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left">Mobile: </td>
                                                <td style="text-align:left">
                                                <i class="bx bx-phone"></i> {{$empName->emp_phone}}
                                                <br><i class="bx bx-phone"></i> {{$empName->emp_emergencyphone1}}
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>

                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">

                            <div class="col-md-2 float-right mb-3">
                                <select id="monthYearFilter" class="form-control rounded-select">
                                    <?php
                                        $currentYear = date('Y');
                                        for ($month = 1; $month <= 12; $month++) {
                                            $monthName = date('M', mktime(0, 0, 0, $month, 1));
                                            $yearMonth = $monthName . ' ' . $currentYear;

                                            // Check if the current iteration month matches the current month
                                            $selected = ($month === (int) date('n')) ? 'selected' : '';

                                            echo '<option value="' . $monthName . '" ' . $selected . '>' . $yearMonth . '</option>';
                                        }
                                    ?>

                                </select>
                            </div>


                                <table id="logtable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $uniqueDates = [];
                                            foreach ($data as $record) {
                                                if ($record->workstate == 0) {
                                                    $date = substr($record->punch_time, 0, 10); // Extract YYYY-MM-DD part

                                                    if (!isset($uniqueDates[$date]['checkIn']) || $record->punch_time < $uniqueDates[$date]['checkIn']['time']) {
                                                        $uniqueDates[$date]['checkIn'] = [
                                                            'time' => $record->punch_time,
                                                            'nextTime' => date('l h:i:s A', strtotime($record->punch_time)),
                                                        ];
                                                    }
                                                } elseif ($record->workstate == 1 || is_null($uniqueDates[$date]['checkOut']) ||
                                                    $record->punch_time > $uniqueDates[$date]['checkOut']) {
                                                    $date = substr($record->punch_time, 0, 10); // Extract YYYY-MM-DD part

                                                    if (!isset($uniqueDates[$date]['checkOut'])) {
                                                        $uniqueDates[$date]['checkOut'] = [
                                                            'time' => $record->punch_time,
                                                            'nextTime' => date('l h:i:s A', strtotime($record->punch_time)),
                                                        ];
                                                    }
                                                }
                                            }
                                        @endphp

                                        @foreach ($uniqueDates as $date => $record)
                                            @php
                                                $checkInTime = $record['checkIn']['time'] ?? null;
                                                $nextCheckIn = $record['checkIn']['nextTime'] ?? null;
                                                $checkOutTime = $record['checkOut']['time'] ?? null;
                                                $nextCheckOut = $record['checkOut']['nextTime'] ?? null;
                                                $formattedDate = date('M Y', strtotime($checkInTime));
                                            @endphp
                                            <tr data-date="{{ $formattedDate }}">
                                                <td>{!! ($checkInTime ? date('d-M-Y', strtotime($checkInTime)) . '<br>' . $nextCheckIn : '---') !!}</td>
                                                <td>{!! ($checkOutTime ? date('d-M-Y', strtotime($checkOutTime)) . '<br>' . $nextCheckOut : '<span class="btn btn-danger">Missing</span>') !!}</td>
                                                <td>
                                                    @if ($checkInTime && $checkOutTime)
                                                        @php
                                                            $duration = strtotime($checkOutTime) - strtotime($checkInTime);
                                                            $hours = floor($duration / 3600);
                                                            $minutes = floor(($duration % 3600) / 60);
                                                            echo $hours . ' Hours ' . $minutes . ' Minutes';
                                                        @endphp
                                                    @else
                                                        {!! '---' !!}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#monthYearFilter').on('change', function() {
            var selectedMonthYear = $(this).val();

            if (selectedMonthYear === '') {
                $('#logtable tbody tr').show(); // Show all rows if no filter selected
            } else {
                $('#logtable tbody tr').hide(); // Hide all rows

                var searchString = selectedMonthYear + ' ' + (new Date()).getFullYear();

                $('#logtable tbody tr[data-date="' + searchString + '"]').show();
            }
        });

        $('#monthYearFilter').trigger('change');
    });
</script>
@endpush


