@extends('layouts.main')
@section('content')

<div class="mt-5 pt-5">
    @if (Session::has('message'))
    <h1 class="text-danger mt-5 pt-5">{{ Session::get('message') }}</h1>
       
    @endif
    
    <div class="text-center mt-4">
        <h3>Edit Upcoming Tournaments</h3>
    </div>

    <form action="{{ route('updateEvent') }}" method="POST" class="mt-5 pt-5">
        @csrf

        <div class="container">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th type="hidden" scope="col" ></th>
                    <th scope="col" >Tournament Name</th>
                    <th scope="col" >From</th>
                    <th scope="col">To</th>
                    <th scope="col">Venu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="hidden" name="tournamentId" value="{{ $event->tournamentId }}" readonly></td>
                    <td><input class="btn border-none" type="text" name="tournamentName" value="{{ $event->tournamentName }}" id=""></td>
                    <td><input class="btn border-none" type="date" name="from" value="{{ $event->from }}" id=""></td>
                    <td><input class="btn border-none" type="date" name="to" value="{{ $event->to }}" id=""></td>
                    <td><input class="btn border-none" type="text" name="venue" value="{{ $event->venue }}" id=""></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
@endsection