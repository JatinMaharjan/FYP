@extends('layouts.main')

@section('content')
<div class="container text-center text-light mt-5 pt-5 mb-5">

    <div class="text-dark mt-5 pt-5">
      <h3>ChuniDevi Taekwondo Association</h3>
    </div>
    <div class="text-secondary">
      <h4>Ranking of Our Students</h4>
    </div>
    <div class="text-secondary">
      <h5>See Your Positions</h5>
    </div>
    
    <div class="mt-5 pt-5 ">
      <table class="table">
        <thead>
          <tr>
                <th><strong><h5>Ranking Id</h5></strong></th>
                <th ><strong><h5>User Id</h5></strong></th>
                <th><strong><h5>Name</h5></strong></th>
                <th><strong><h5>Email</h5></strong></th>
                <th ><strong><h5>Gender</h5></strong></th>
                <th ><strong><h5>Belt</h5></strong></th>
                <th><strong><h5>Action</h5></strong></th>
          </tr>
        </thead>
        <tbody class="text-dark">
            @foreach ($rankings as $ranking)                
                <tr>
                    <td>{{ $ranking->Rankingid }}</td>
                    <td>{{ $ranking->user->id }}</td>
                    <td>{{ $ranking->user->name }}</td>
                    <td>{{ $ranking->user->email }}</td>
                    <td>{{ $ranking->user->gender }}</td>
                    <td>{{ $ranking->belt }}</td>
                    <td>
                        <a href="/editRanking/{{ $ranking->userId }}" class="btn btn-primary">Edit</a>
                        <a href="/deleteRanking/{{ $ranking->userId }}" class="btn btn-danger">Delete</a>
                        </td>
                </tr>          
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
 
@endsection