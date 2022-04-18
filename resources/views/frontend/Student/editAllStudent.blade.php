@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5">

    <div class="text-center mt-5">
        <h3>Edit All Student Details</h3>
    </div>
    <form action="{{ route('updateAllStudent') }}" method="POST" class="mt-5 pt-5">
        @csrf
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col" >Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Belt</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="text" value="{{ $allStudents->id }}"></td>
                    <td><input class="btn border-none" type="text" value="{{ Auth::User()->name }}" readonly></td>
                    <td><input class="btn border-none" type="email" value="{{ Auth::User()->email }}" readonly></td>
                    <td><input class="btn border-none" type="text" value="{{ Auth::User()->contact }}" readonly></td>
                    <td><input class="btn border-none" type="text" value="{{ Auth::User()->gender }}" readonly></td>
                    <td><input class="btn border-none" type="text" value="{{ Auth::User()->bday }}" readonly></td>
                    <td><input class="btn border-none" type="text" value="{{ Auth::User()->belt }}" readonly></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
            </table>
    </form>
</div>
@endsection