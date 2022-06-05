@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5">

    <div class="text-center mt-5">
        <h3>Edit Ranking Student Details</h3>
    </div>
    <form action="{{ route('updateRanking') }}" method="POST" class="mt-5 pt-5">
        @csrf
        <div class="container">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col" >Ranking Id</th>
                    <th scope="col" >Name</th>
                    <th scope="col">Belt</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="text" name="rankingId" value="{{ $rankings->Rankingid }}"></td>
                    <td><input class="btn border-none" type="text" name="name" value="{{ $rankings->name }}"></td>

                    {{-- <td><input class="btn border-none" type="text" name="userId" value="{{ $rankings->userId }}" readonly></td> --}}
                    <td><input class="btn border-none" type="text" name="belt" value="{{ $rankings->belt }}" ></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
            </table>
        </div>      
            
    </form>
</div>
@endsection