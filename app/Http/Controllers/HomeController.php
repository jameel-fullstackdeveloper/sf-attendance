<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HrEmployee;
use App\Models\AttendancePunches;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    // public function dashboard(Request $request)
    // {
    //     $pageTitle = 'Home';
    //     $employees = HrEmployee::count();
    //     $staff = HrEmployee::where('position_id','2')->count();
    //     $account_manager = HrEmployee::where('position_id','5')->count();
    //     $supervisor = HrEmployee::where('position_id','6')->count();
    //     $WeighbridgeOperator = HrEmployee::where('position_id','7')->count();
    //     $MedecineIncharge = HrEmployee::where('position_id','8')->count();
    //     $OfficeBoy = HrEmployee::where('position_id','10')->count();
    //     $GeneralManager = HrEmployee::where('position_id','11')->count();
    //     $SrAccountant = HrEmployee::where('position_id','12')->count();
    //     $JrAccountant = HrEmployee::where('position_id','13')->count();
    //     $DispatchManager = HrEmployee::where('position_id','14')->count();
    //     $Purchaser = HrEmployee::where('position_id','15')->count();
    //     $Recovery = HrEmployee::where('position_id','16')->count();
    //     $LabIncharge = HrEmployee::where('position_id','17')->count();
    //     $LabAssistant = HrEmployee::where('position_id','18')->count();
    //     $DispatchAsistant = HrEmployee::where('position_id','19')->count();
    //     $Watchman = HrEmployee::where('position_id','22')->count();
    //     return view('dashboard')->with([
    //         'pageTitle'=>$pageTitle,
    //         'employees'=>$employees,
    //         'staff'=>$staff,
    //         'account_manager'=>$account_manager,
    //         'supervisor'=>$supervisor,
    //         'WeighbridgeOperator'=>$WeighbridgeOperator,
    //         'MedecineIncharge'=>$MedecineIncharge,
    //         'OfficeBoy'=>$OfficeBoy,
    //         'GeneralManager'=>$GeneralManager,
    //         'SrAccountant'=>$SrAccountant,
    //         'JrAccountant'=>$JrAccountant,
    //         'DispatchManager'=>$DispatchManager,
    //         'Purchaser'=>$Purchaser,
    //         'Recovery'=>$Recovery,
    //         'LabIncharge'=>$LabIncharge,
    //         'LabAssistant'=>$LabAssistant,
    //         'DispatchAsistant'=>$DispatchAsistant,
    //         'Watchman'=>$Watchman,
    //     ]);
    // }


    public function dashboard(Request $request)
    {
        $pageTitle = 'Home';
        $data = AttendancePunches::with('employee')->orderBy('id','desc')->limit('9')->get();
        return view('dashboard')->with([
            'pageTitle'=>$pageTitle,
            'data'=>$data
        ]);
    }

    public function employeeList(Request $request)
    {
        $pageTitle = 'Employee List';
        $data = HrEmployee::with('position')->get();
        return view('employeeList')->with([
            'pageTitle'=>$pageTitle,
            'data'=>$data,
        ]);
    }


    public function employeeAttendance($slug)
    {
        $pageTitle = 'Employee Attendance';
        $empName=HrEmployee::where('id',$slug)->first();
        $data = DB::table('att_punches')
           ->where('employee_id', $slug)
           ->orderByDesc('id')
           ->get();

        return view('employeeAttendance')->with([
            'pageTitle'=>$pageTitle,
            'data'=>$data,
            'empName'=>$empName,
        ]);
    }


}
