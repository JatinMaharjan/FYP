@extends('layouts.main')

@section('content')

<div class="container text-center text-light mt-5 pt-5 mb-5">

    <div class="text-dark mt-5 ">
      <h3>Manage Teacher</h3>
    </div>
    <div class="text-secondary">
      <h4>Edit and Delete the detaile of Teacher</h4>
    </div>
    
    <div class="mt-5 pt-5 ">
      <table class="table">
        <thead>
          <tr>
                <th ><strong><h5> Id</h5></strong></th>
                <th ><strong><h5> Name</h5></strong></th>
                <th ><strong><h5>Email</h5></strong></th>
                <th><strong><h5>Contact</h5></strong></th>
                <th><strong><h5>Gender</h5></strong></th>
                <th><strong><h5>Date of Birth</h5></strong></th>
                <th><strong><h5>Action</h5></strong></th>
          </tr>
        </thead>
        <tbody class="">
            @foreach ($allTeachers as $allTeacher)                
                <tr>
                    <td>{{ $allTeacher->id }}</td>
                    <td>{{ $allTeacher->name }}</td>
                    <td>{{ $allTeacher->email }}</td>
                    <td>{{ $allTeacher->contact }}</td>
                    <td>{{ $allTeacher->gender }}</td>
                    <td>{{ $allTeacher->bday }}</td>
                    <td>
                        <a href="/editAllTeacher/{{ $allTeacher->Id }}" class="btn btn-primary">Edit</a>
                        <a href="/deleteAllTeacher/{{ $allTeacher->Id }}" class="btn btn-danger">Delete</a>
                        </td>
                </tr>          
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection