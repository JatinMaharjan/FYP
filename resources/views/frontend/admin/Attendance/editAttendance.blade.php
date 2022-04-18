@extends('layouts.main')

@section('content')

<div class="mt-5 pt-5">
    <h3 class="mt-5 text-center">Edit Student Attendance Details</h3>

    <form action="{{ route('updateAttendance') }}" method="POST" class="mt-5 pt-5">
        @csrf
        <div class="container">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col" >Id</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Attendance</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="text" name="attendanceId" value="{{ $attendance->id }}"></td>
                    <td><input class="btn border-none" type="text" name="userId" value="{{ Auth::user()->id }}" readonly></td>
                    <td><input class="btn border-none" type="text" value="{{ Auth::user()->name }}" readonly></td>
                    <td><input class="btn border-none" type="date" name="date" value="{{ $attendance->date }}" ></td>
                    <td><input class="btn border-none" type="text" name="attendance" value="{{ $attendance->attendance }}"></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </form>
</div>
@endsection