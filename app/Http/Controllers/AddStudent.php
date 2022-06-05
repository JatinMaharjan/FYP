<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddStudent extends Controller
{
    public function create(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'bday' => 'required',
            'password' => 'required',

        ]); 

        $addTeacher = new User();
        $addTeacher->name = $request->name;
        $addTeacher->email = $request->email;
        $addTeacher->contact = $request->contact;
        $addTeacher->gender = $request->gender;
        $addTeacher->bday = $request->bday;
        $addTeacher->role = 'Student';
        $addTeacher->password = bcrypt($request->password);
        $addTeacher->save();
        return back()->with('message', 'Student added successfully.');
    }
}
