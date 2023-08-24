@extends('app')
@section('content')
<style>
    table tr, table th {
        text-align: center;
        font-size:20px;
    }
    .rounded-select {
            border-radius: 500px;
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
                        <span class="mb-0 font-size-18" style="color:red">{{$empName->emp_firstname}}  {{$empName->emp_lastname}}</span>
                    </div>
                </div>     

                <div class="row">
                    <div class="col-12">
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


                                <table id="" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                $('tbody tr').show(); // Show all rows if no filter selected
            } else {
                $('tbody tr').hide(); // Hide all rows

                var searchString = selectedMonthYear + ' ' + (new Date()).getFullYear();

                $('tbody tr[data-date="' + searchString + '"]').show();
            }
        });

        $('#monthYearFilter').trigger('change');
    });
</script>
@endpush


