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
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Job View</p>
                                                <h4 class="mb-0">14,487</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center" style="position: relative;">
                                                <div data-colors="[&quot;--bs-success&quot;, &quot;--bs-transparent&quot;]" dir="ltr" id="eathereum_sparkline_charts" style="min-height: 46px;"><div id="apexchartsccvflyb8" class="apexcharts-canvas apexchartsccvflyb8 apexcharts-theme-light" style="width: 130px; height: 46px;"><svg id="SvgjsSvg1001" width="130" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMaskccvflyb8"><rect id="SvgjsRect1008" width="135.5" height="47.5" x="-2.75" y="-0.75" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskccvflyb8"><rect id="SvgjsRect1009" width="134" height="50" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1014" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1015" stop-opacity="0.45" stop-color="rgba(52,195,143,0.45)" offset="0.5"></stop><stop id="SvgjsStop1016" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1017" stop-opacity="0.05" stop-color="rgba(255,255,255,0.05)" offset="1"></stop><stop id="SvgjsStop1018" stop-opacity="0.45" stop-color="rgba(52,195,143,0.45)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1007" x1="0" y1="0" x2="0" y2="46" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="46" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1021" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1022" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1024" class="apexcharts-grid"><g id="SvgjsG1025" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1027" x1="0" y1="0" x2="130" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1028" x1="0" y1="7.666666666666667" x2="130" y2="7.666666666666667" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1029" x1="0" y1="15.333333333333334" x2="130" y2="15.333333333333334" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1030" x1="0" y1="23" x2="130" y2="23" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1031" x1="0" y1="30.666666666666668" x2="130" y2="30.666666666666668" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1032" x1="0" y1="38.333333333333336" x2="130" y2="38.333333333333336" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1033" x1="0" y1="46" x2="130" y2="46" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1026" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1035" x1="0" y1="46" x2="130" y2="46" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1034" x1="0" y1="1" x2="0" y2="46" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1010" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1011" class="apexcharts-series" seriesName="JobxView" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1019" d="M0 46L0 32.2C6.499999999999999 32.2 12.07142857142857 37.95 18.57142857142857 37.95C25.07142857142857 37.95 30.64285714285714 21.083333333333332 37.14285714285714 21.083333333333332C43.64285714285714 21.083333333333332 49.21428571428571 37.56666666666666 55.71428571428571 37.56666666666666C62.21428571428571 37.56666666666666 67.78571428571428 32.583333333333336 74.28571428571428 32.583333333333336C80.78571428571428 32.583333333333336 86.35714285714285 26.833333333333332 92.85714285714285 26.833333333333332C99.35714285714285 26.833333333333332 104.92857142857142 12.649999999999999 111.42857142857142 12.649999999999999C117.92857142857142 12.649999999999999 123.5 8.433333333333337 130 8.433333333333337C130 8.433333333333337 130 8.433333333333337 130 46M130 8.433333333333337C130 8.433333333333337 130 8.433333333333337 130 8.433333333333337 " fill="url(#SvgjsLinearGradient1014)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskccvflyb8)" pathTo="M 0 46L 0 32.2C 6.499999999999999 32.2 12.07142857142857 37.95 18.57142857142857 37.95C 25.07142857142857 37.95 30.64285714285714 21.083333333333332 37.14285714285714 21.083333333333332C 43.64285714285714 21.083333333333332 49.21428571428571 37.56666666666666 55.71428571428571 37.56666666666666C 62.21428571428571 37.56666666666666 67.78571428571428 32.583333333333336 74.28571428571428 32.583333333333336C 80.78571428571428 32.583333333333336 86.35714285714285 26.833333333333332 92.85714285714285 26.833333333333332C 99.35714285714285 26.833333333333332 104.92857142857142 12.649999999999999 111.42857142857142 12.649999999999999C 117.92857142857142 12.649999999999999 123.5 8.433333333333337 130 8.433333333333337C 130 8.433333333333337 130 8.433333333333337 130 46M 130 8.433333333333337z" pathFrom="M -1 46L -1 46L 18.57142857142857 46L 37.14285714285714 46L 55.71428571428571 46L 74.28571428571428 46L 92.85714285714285 46L 111.42857142857142 46L 130 46"></path><path id="SvgjsPath1020" d="M0 32.2C6.499999999999999 32.2 12.07142857142857 37.95 18.57142857142857 37.95C25.07142857142857 37.95 30.64285714285714 21.083333333333332 37.14285714285714 21.083333333333332C43.64285714285714 21.083333333333332 49.21428571428571 37.56666666666666 55.71428571428571 37.56666666666666C62.21428571428571 37.56666666666666 67.78571428571428 32.583333333333336 74.28571428571428 32.583333333333336C80.78571428571428 32.583333333333336 86.35714285714285 26.833333333333332 92.85714285714285 26.833333333333332C99.35714285714285 26.833333333333332 104.92857142857142 12.649999999999999 111.42857142857142 12.649999999999999C117.92857142857142 12.649999999999999 123.5 8.433333333333337 130 8.433333333333337C130 8.433333333333337 130 8.433333333333337 130 8.433333333333337 " fill="none" fill-opacity="1" stroke="#34c38f" stroke-opacity="1" stroke-linecap="butt" stroke-width="1.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskccvflyb8)" pathTo="M 0 32.2C 6.499999999999999 32.2 12.07142857142857 37.95 18.57142857142857 37.95C 25.07142857142857 37.95 30.64285714285714 21.083333333333332 37.14285714285714 21.083333333333332C 43.64285714285714 21.083333333333332 49.21428571428571 37.56666666666666 55.71428571428571 37.56666666666666C 62.21428571428571 37.56666666666666 67.78571428571428 32.583333333333336 74.28571428571428 32.583333333333336C 80.78571428571428 32.583333333333336 86.35714285714285 26.833333333333332 92.85714285714285 26.833333333333332C 99.35714285714285 26.833333333333332 104.92857142857142 12.649999999999999 111.42857142857142 12.649999999999999C 117.92857142857142 12.649999999999999 123.5 8.433333333333337 130 8.433333333333337" pathFrom="M -1 46L -1 46L 18.57142857142857 46L 37.14285714285714 46L 55.71428571428571 46L 74.28571428571428 46L 92.85714285714285 46L 111.42857142857142 46L 130 46"></path><g id="SvgjsG1012" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1041" r="0" cx="0" cy="0" class="apexcharts-marker wiypzu841i no-pointer-events" stroke="#ffffff" fill="#34c38f" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1013" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1036" x1="0" y1="0" x2="130" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1037" x1="0" y1="0" x2="130" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1038" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1039" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1040" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1006" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1023" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 23px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 195, 143);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 131px; height: 47px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top py-3">
                                        <p class="mb-0"> <span class="badge badge-soft-success me-1"><i class="bx bx-trending-up align-bottom me-1"></i> 18.89%</span> Increase last month</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">

                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                            <h5 class="text-truncate mb-2" style="font-size:15px;color:#495057;text-transform: uppercase;">{{$val->employee->emp_firstname}} {{$val->employee->emp_lastname}}</h5>

                                            <!--<h5 class="text-truncate mb-2" style="font-size:15px;color:#495057;text-transform: uppercase;">Employees</h5>-->


                                                <span class="mb-2 text-success" @if($val->workstate==1) style="color:red" @endif>
                                                    <i class="bx bx-time-five"></i>&nbsp @if($val->workstate==0) CheckIn @else CheckOut @endif &nbsp {{ date('h:i:s A', strtotime($val->punch_time)) }}

                                                </span>
                                                <p><a href="http://erp.sonafeeds.live/allemployees" style="color:#495057"> View Log <i class="fa fa-arrow-circle-right"></i></a></p>

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
                                        <div class="card-body border-top py-3">
                                        <p class="mb-0"> <span class="badge badge-soft-success me-1"><i class="bx bx-trending-up align-bottom me-1"></i> 18.89%</span> Increase last month</p>
                                    </div>
                            </div>
                        </div>




                            </div>

                            @endforeach
                        </div>


                    </div>
                </div>
@endsection
