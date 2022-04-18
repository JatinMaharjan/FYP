@extends('layouts.main')

@section('content')
<section class="mb-4 mt-5 pt-5 bg-dark">
    <div class="container text-center text-light mt-5 pt-5 mb-5">

        <div class="text-dark mt-5 ">
          <h3>Contact Us</h3>
        </div>
        
        <div class="mt-5 pt-5 ">
          <table class="table">
            <thead>
              <tr>
                    <th ><strong><h5> Id</h5></strong></th>
                    <th ><strong><h5> Name</h5></strong></th>
                    <th><strong><h5>Contact</h5></strong></th>
                    <th ><strong><h5>Email</h5></strong></th>
                    <th><strong><h5>Message</h5></strong></th>
              </tr>
            </thead>
            <tbody class="">
                @foreach ($users as $User)                
                    <tr>
                        <td>{{ $User->id }}</td>
                        <td>{{ $User->name }}</td>
                        <td>{{ $User->contact }}</td>
                        <td>{{ $User->Email }}</td>
                        <td>{{ $User->Message }}</td>
                        <td>
                            {{-- <a href="/editAllTeacher/{{ $allTeacher->Id }}" class="btn btn-primary">Edit</a>
                            <a href="/deleteAllTeacher/{{ $allTeacher->Id }}" class="btn btn-danger">Delete</a> --}}
                            </td>
                    </tr>          
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</section> 
@endsection