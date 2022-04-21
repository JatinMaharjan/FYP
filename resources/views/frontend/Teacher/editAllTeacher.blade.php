@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5">

    <div class="text-center mt-5">
        <h3>Edit Teacher Details</h3>
    </div>
    <form action="{{ route('updateAllTeacher') }}" method="POST" class="mt-5 pt-5">
        @csrf
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col" > Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" name="id" type="text" value="{{ $allTeacher->id }}"></td>
                    <td><input class="btn border-none" name="name" type="text" value="{{ $allTeacher->name }}" readonly></td>
                    <td><input class="btn border-none" name="email" type="email" value="{{$allTeacher->email }}" ></td>
                    <td><input class="btn border-none" name="contact" type="text" value="{{ $allTeacher->contact }}" ></td>
                    <td><input class="btn border-none" name="gender" type="text" value="{{ $allTeacher->gender }}" ></td>
                    <td><input class="btn border-none" name="bday" type="text" value="{{ $allTeacher->bday }}" ></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
            </table>
    </form>
</div>
@endsection