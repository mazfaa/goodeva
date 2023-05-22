<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::select([
            'attendances.id',
            'attendances.employee_id',
            'users.name',
            'attendances.date',
            'shifts.shift',
            'attendance_statuses.attendance_status',
            'attendances.clock_in',
            'attendances.clock_out',
            'reasons.reason',
            'attendances.clock_in_image_url',
            'attendances.clock_in_location',
            'attendances.clock_out_image_url',
            'attendances.clock_out_location',
          ])
          ->join('employees', 'employees.id', '=', 'attendances.employee_id')
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->join('shifts', 'shifts.id', '=', 'attendances.shift_id')
          ->join('attendance_statuses', 'attendance_statuses.id', '=', 'attendances.attendance_status_id')
          ->join('reasons', 'reasons.id', '=', 'attendances.reason_id')
          ->get();

        return response()
        ->view('attendance.index', compact('attendances'))
        ->header('Cache-control', 'no cache, no store, must-revalidate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $name = User::where('id', Auth::user()->id)->first()->name;
        return view('attendance.create', compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($_POST['image'])) {
            $encoded_data = $_POST['image'];
            $binary_data = base64_decode($encoded_data);
            $photoname = uniqid().'.jpeg';
            $result = Storage::disk('public')->put($photoname, $binary_data);

            $hour = (int) date('H');
            $attendance_status = 3;
            $reason = '-';

            if ($hour >= 6 && $hour <= 8) {
                $attendance_status = 1;
            }

            if ($hour > 8 && $hour <= 9) $attendance_status = 2;

            if ($attendance_status == 3) $reason = rand(1, 3);

            Attendance::create([
                'employee_id' => Employee::where('user_id', Auth::user()->id)->first()->id,
                'date' => date('Y-m-d'),
                'shift_id' => rand(1, 4),
                'attendance_status_id' => $attendance_status,
                'clock_in' => date('H:i:s'),
                'reason_id' => $reason ?? '-',
                'clock_in_location' => $request->coords,
                'clock_in_image_url' => $photoname
            ]);

            $attendances = Attendance::select([
                'attendances.employee_id',
                'users.name',
                'attendances.date',
                'shifts.shift',
                'attendance_statuses.attendance_status',
                'attendances.clock_in',
                'reasons.reason',
                'attendances.clock_in_location',
                'attendances.clock_in_image_url',
              ])
              ->join('employees', 'employees.id', '=', 'attendances.employee_id')
              ->join('users', 'users.id', '=', 'employees.user_id')
              ->join('shifts', 'shifts.id', '=', 'attendances.shift_id')
              ->join('attendance_statuses', 'attendance_statuses.id', '=', 'attendances.attendance_status_id')
              ->join('reasons', 'reasons.id', '=', 'attendances.reason_id')
              ->get();
        
            if($result) {
                Alert::success('Success!', 'Your Attendance was Successful!');
                return response()
                    ->view('attendance.index', compact('attendances'))
                    ->header('Cache-control', 'no cache, no store, must-revalidate');
            } else {
                echo die('Could not save image! check file permission.');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        $employee = Employee::where('user_id', Auth::user()->id)->first()->id;
        $today_attendance_id = Attendance::where('employee_id', $employee)->where('date', date('Y-m-d'))->first()->id ?? '';
        $name = User::where('id', Auth::user()->id)->first()->name;
        return view('attendance._updated', ['id' => $today_attendance_id, 'name' => $name]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        $encoded_data = $request->image;
        $binary_data = base64_decode($encoded_data);
        $photoname = uniqid().'.jpeg';
        $result = Storage::disk('public')->put($photoname, $binary_data);

        $attendance->update([
            'clock_out' => date('H:i:s'),
            'clock_out_image_url' => $photoname,
            'clock_out_location' => $request->coords,
        ]);

        $attendances = Attendance::select([
            'attendances.employee_id',
            'users.name',
            'attendances.date',
            'shifts.shift',
            'attendance_statuses.attendance_status',
            'attendances.clock_in',
            'reasons.reason',
            'attendances.clock_in_location',
            'attendances.clock_in_image_url',
          ])
          ->join('employees', 'employees.id', '=', 'attendances.employee_id')
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->join('shifts', 'shifts.id', '=', 'attendances.shift_id')
          ->join('attendance_statuses', 'attendance_statuses.id', '=', 'attendances.attendance_status_id')
          ->join('reasons', 'reasons.id', '=', 'attendances.reason_id')
          ->get();
    
        if($result) {
            Alert::success('Success!', 'Your Attendance was Successful!');
            return response()
                ->view('attendance.index', compact('attendances'))
                ->header('Cache-control', 'no cache, no store, must-revalidate');
        } else {
            echo die('Could not save image! check file permission.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
