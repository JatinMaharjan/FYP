<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;

class AllStudent extends Controller
{
    public function create(Request $request) {
        $allStudent = new User();
        $allStudent->id = $request->id;
        $allStudent->name = $request->name;
        $allStudent->email = $request->email;
        $allStudent->gender = $request->gender;
        $allStudent->bday = $request->bday;
        $allStudent->belt = $request->belt;
        $allStudent->save();
        return redirect()->route('home');
    }

    public function deleteAllStudent($id) {
        User::where('id',$id)->delete();
        return back()->with('message', 'Student deleted successfully.');
    }
    public function editAllStudent($id){
        $allStudent = User::find($id);
        return view('frontend.Student.allStudent', compact('allStudent'));
    }
    public function allStudent(){
        $users = User::where ('role', 'Student')->get();
        $ranking = Ranking::all();
        return view('frontend.Student.allStudent', compact('users', 'ranking'));
    }
}