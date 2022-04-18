<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    
}
