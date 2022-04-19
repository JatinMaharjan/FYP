<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Attendance;
use App\Models\Ranking;
use App\Models\User;
// use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\message;
use Illuminate\Notifications\Notification as NotificationsNotification;

// use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home() {
        return view('frontend.user.home');
    }

    public function addTeacher() {
        return view('frontend.Teacher.addTeacher');
    }

    public function addStudent() {
        return view('frontend.Student.addStudent');
    }

    public function trainingTime(){
        return view('frontend.user.trainingTime');
    }
    public function aboutUs(){
        return view('frontend.user.aboutUs');
    }
    public function contactUs(){
        return view('frontend.user.contactUs');
    }




    public function belt(Request $request) {
        $search = $request['search'] ?? "";
        if($search != "") {
            $rankings = Ranking::where('belt', 'LIKE', "%$search%")->get();
        }else {
            $rankings = Ranking::orderBy('Rankingid', 'Asc')->get();
        }
        return view('frontend.admin.ranking.allRanking', compact('rankings'));
    }


    public function date(Request $request) {
        $search = $request['search'] ?? "";
        if($search != "") {
            $attendances = Attendance::where('date', 'LIKE', "%$search%")->get();
        }else {
            $attendances = Attendance::orderBy('id', 'Asc')->get();
        }
        return view('frontend.admin.Attendance.allAttendance', compact('attendances'));
    }


    // mailing ko lagi!!

    // public function message($user)
    // {
    //     $user = User::all();
    //     Mail::send($user, new WelcomeMail);
    // }

    // Send Notification

    public function notification($user){
        $user = User::all();
        Notification::send($user, new message);
        // Notification::send($user, new InvoicePaid);
        return redirect()->route('home');
    }

    
    
}
