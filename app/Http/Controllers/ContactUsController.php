<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // public function index() {
    //     return view('frontend.user.contactUs.addContactUs');
    // }

    public function create(Request $request) {
        $contactus = new ContactUs();
        $contactus->name = $request->name;
        $contactus->contact = $request->contact;
        $contactus->Email = $request->Email;
        $contactus->Message = $request->Message;
        $contactus->save();
    }
    public function all() {
        $users= ContactUs::all();
        return view('frontend.user.contactUs.allContactUs', compact('users'));
    }
}
