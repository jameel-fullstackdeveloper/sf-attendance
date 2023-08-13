@extends('app')
@section('content')
<style>
    /* Center align content in <tr> and <th> elements */
    table tr, table th {
        text-align: center;
        font-size:20px;
    }
</style>
<div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">{{$pageTitle}}</h4>
                                </div>
                            </div>
                        </div>     

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

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
                                                    @endphp
                                                    <tr>
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