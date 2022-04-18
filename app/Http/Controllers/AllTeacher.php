<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;

class AllTeacher extends Controller
{
    public function create(Request $request) {
        $allTeacher = new User();
        $allTeacher->id = $request->id;
        $allTeacher->name = $request->name;
        $allTeacher->email = $request->email;
        $allTeacher->gender = $request->gender;
        $allTeacher->bday = $request->bday;
        $allTeacher->save();
        return redirect()->route('home');
    }

    public function deleteAllTeacher($id) {
        User::where('id',$id)->delete();
        return back()->with('message', 'Student deleted successfully.');
    }
    public function editAllTeacher($id){
        $allStudent = User::find($id);
        return view('frontend.Teacher.allTeacher', compact('allStudent'));
    }

    public function allTeacher(){
        $allTeachers= AllTeacher::allTeacher();
        return view('frontend.Teacher.allTeacher', compact('allTeacher'));
    }

}
