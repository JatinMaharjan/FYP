<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AllTeacherController extends Controller
{
    public function create(Request $request) {
        $allTeacher = new User();
        $allTeacher->id = $request->id;
        $allTeacher->name = $request->name;
        $allTeacher->email = $request->email;
        $allTeacher->contact = $request->contact;
        $allTeacher->gender = $request->gender;
        $allTeacher->bday = $request->bday;
        $allTeacher->save();
        return redirect()->route('home');
    }

    public function deleteAllTeacher($id) {
        User::where('id',$id)->delete();
        return back()->with('message', 'Teacher deleted successfully.');
    }
    public function editAllTeacher($id){
        $allTeacher = User::find($id);
        return view('frontend.Teacher.editAllTeacher', compact('allTeacher'));
    }

    public function all() {
        $allTeacher = User::where ('role', 'Teacher')->get();
        return view('frontend.Teacher.allTeacher', compact('allTeacher'));
    }

    public function updateAllTeacher(Request $request) {
        $allTeacher = User::find($request->id);
        $allTeacher->name = $request->name;
        $allTeacher->email = $request->email;
        $allTeacher->contact = $request->contact;
        $allTeacher->gender = $request->gender;
        $allTeacher->bday = $request->bday;
        $allTeacher->save();
        return back()->with('message', 'Teacher Edited successfully.');
    }
}
