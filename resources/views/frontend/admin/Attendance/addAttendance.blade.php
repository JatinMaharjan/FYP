@extends('layouts.main')

@section('content')

<div class="mt-5 pt-5">


    <div class="mt-5 text-center">
        <h3>Attendance of Students.</h3>
    </div>
    <div class="text-secondary text-center">
        <h5>Do Attendance of the Students.</h5>
    </div>

    <form action="{{ route('createAttendance') }}" method="post" class="mt-5 pt-5">
        @csrf
        <div class="container">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Attendance</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <select name="userId">
                            @foreach ($users as $user)                                
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        </select>
                    </td>
                    <td><input class="btn border-none" type="date" name="date"></td>
                    <td><input class="btn border-none" type="text" name="attendance"></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </form> 
</div>
@endsection