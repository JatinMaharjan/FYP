@extends('layouts.main')

@section('content')

<div class="container text-center text-light mt-5 mb-5">

    <div class="text-dark mt-5 pt-5">
      <h3>ChuniDevi Taekwondo Association</h3>
    </div>
    <div class="text-secondary">
      <h4>Attendance of Our Students</h4>
    </div>
    <form action="" class="p-4">
        <div class="row g-3">
            <div class="m-3 col-lg">
                <label for="date" class="form-label text-dark">Attendance Date</label>
                <input type="date" class="form-control p-2" id="belt"
                    placeholder="Search date" name="search" />

            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary bus-btn p-2">
                    Search Attendance Date &rarr;
                </button>
            </div>
        </div>
    </form>
    
    <div class="mt-5 pt-5 ">
      <table class="table">

        <thead>
          <tr>
                <th ><strong><h5> Id</h5></strong></th>
                <th ><strong><h5> Name</h5></strong></th>
                <th ><strong><h5>User Id</h5></strong></th>
                <th><strong><h5>Date</h5></strong></th>
                <th><strong><h5>Attendance</h5></strong></th>
                <th><strong><h5>Action</h5></strong></th>
          </tr>
        </thead>
        <tbody class="">
            @if ($attendances->count() > 0)
            @foreach ($attendances as $attendance)                
                <tr>
                    <td>{{ $attendance->id }}</td>
                    <td>{{ $attendance->user->name }}</td>
                    <td>{{ $attendance->userId }}</td>
                    <td>{{ $attendance->date}}</td>
                    <td>{{ $attendance->attendance }}</td>
                    <td>
                        <a href="/editAttendance/{{ $attendance->id }}" class="btn btn-primary">Edit</a>
                        <a href="/deleteAttendance/{{ $attendance->id }}" class="btn btn-danger">Delete</a>
                        </td>
                </tr>          
            @endforeach
            @else
                <div class="alert alert-danger text-center" role="alert">
                    !!! No Attendance Date Found !!!
                </div>
            @endif
            
        </tbody>
      </table>
    </div>
  </div>
@endsection