<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class AttendanceController extends Controller
{

    


    public function index() {
        $users = User::where ('role', 'Student')->get();
        return view('frontend.admin.attendance.addAttendance',compact('users'));
    }

    public function create(Request $request) {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'attendance' =>'required',
        ]); 

        $attendance = new Attendance();
        $attendance->id = $request->attendanceId;
        $attendance->userId = $request->userId;
        $attendance->date = $request->date;
        $attendance->attendance = $request->attendance;
        $attendance->save();
        return back()->with('message','Attendance added successfully.');
    }

    public function all() {
        $attendances= Attendance::all();
        return view('frontend.admin.attendance.allAttendance', compact('attendances'));
    }

    public function deleteAttendance($attendanceId) {
        Attendance::where('id',$attendanceId)->delete();
        return back()->with('message', 'Student deleted successfully.');
    }
    public function editAttendance($attendanceId){
        $attendance = Attendance::find($attendanceId);
        return view('frontend.admin.Attendance.editAttendance', compact('attendance'));
    }
    public function updateAttendance(Request $request){
        $attendance = Attendance::find($request->attendanceId);
        $attendance->userId = $request->userId;
        $attendance->date = $request->date;
        $attendance->attendance = $request->attendance;
        $attendance->save();
        return back()->with('message', 'Attendance Updated Successfully.');
    }
}
