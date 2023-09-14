<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HrEmployee;
use App\Models\HrDepartment;
use App\Models\AttendancePunches;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;


class HomeController extends Controller
{
   

    public function dashboard(Request $request)
    {
        $pageTitle = 'Home';
        $data = AttendancePunches::with('employee')->orderBy('id','desc')->limit('12')->get();
    
        $dep = HrDepartment::all();
        return view('dashboard')->with([
            'pageTitle'=>$pageTitle,
            'data'=>$data,
            'department'=>$dep,
        ]);
    }

    public function employees(Request $request)
    {
        $slug = $request->slug; 

        $att = DB::table('att_punches')
        ->join('hr_employee', 'att_punches.employee_id', '=', 'hr_employee.id')
        ->join('hr_department', 'hr_employee.department_id', '=', 'hr_department.id') 
        ->select('hr_employee.id', 'att_punches.id as puunchId', 'hr_employee.emp_firstname', 'hr_employee.emp_lastname', 
        'hr_employee.emp_phone', 'att_punches.workstate', 'att_punches.punch_time', 'hr_department.dept_name', 'hr_employee.emp_photo') 
        ->where('hr_employee.department_id', $slug)
        ->whereIn('att_punches.id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('att_punches')
                ->groupBy('employee_id');
        })
        ->get();

        foreach ($att as $key => $val) {
           
            $data[] = [
                'id' => $val->id,
                'puunchId' => $val->puunchId,
                'emp_firstname' => $val->emp_firstname,
                'emp_lastname' => $val->emp_lastname,
                'emp_phone' => $val->emp_phone,
                'workstate' => $val->workstate,
                'punch_time' => $val->punch_time,
                'dept_name' => $val->dept_name,
                'emp_photo_url' => $val->emp_photo ? 'data:image/png;base64,' . base64_encode($val->emp_photo) : null
            ];
        }
        

        return response()->json([
            'status' => 200,
            'data' => $data,
            'message' => 'Saved Successfully',
        ])->header('Content-Type', 'application/json; charset=utf-8');

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
