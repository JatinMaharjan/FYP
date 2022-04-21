<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Attendance;
use App\Models\Payment;
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


    //payment
    public function payment() {
        return view('frontend.admin.payment.payment');
    }


    // public function verify(Request $request){ //payload
    //     $args = http_build_query(array(
    //         'token' => $request->token,
    //         'amount'  => 1000
    //     ));
        
    //     $url = "https://khalti.com/api/v2/payment/verify/";
        
    //     # Make the call using API.
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
    //     $headers = ['Authorization: Key test_secret_key_7e04f58738584be7bb0d0de9b7b50f71'];
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
    //     // Response
    //     $response = curl_exec($ch);
    //     $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     curl_close($ch);

    //     if($status_code == 200){
    //         return response()->json(['success' =>1, 'redirect' => route('payments')]);
    //     }else{
    //         return response()->json(['error' =>1, 'message' => 'Payment Failed']);
    //     }
        
    // }

    public function Khaltipayment(Request $request){
        $request->validate([
            
        ]);
        $payment = new Payment();
        $payment->user_id = $request->user()->id;
        $payment->name = $request->user()->name;
        $payment->contact = $request->user()->contact;
        $payment->email = $request->user()->email;
        // $payment->email = $request->payment_id;
        $payment->price = $request->price;
        $payment->save();

    }
    
    
}
