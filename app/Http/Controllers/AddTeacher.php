<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddTeacher extends Controller
{

    public function create(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'gender' => 'required',
            'bday' => 'required',
            'password' => 'required',

        ]); 
    

        $addTeacher = new User();
        $addTeacher->name = $request->name;
        $addTeacher->email = $request->email;
        $addTeacher->contact = $request->contact;
        $addTeacher->gender = $request->gender;
        $addTeacher->bday = $request->bday;
        $addTeacher->role = 'Teacher';
        $addTeacher->password = bcrypt($request->password);
        $addTeacher->save();
        return redirect()->route('home');
        
    }
}
    
