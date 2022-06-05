@extends('layouts.main')
@section('content')

<div class="mt-5 pt-5">
        
    <div class="text-center mt-5">
        <h3>Edit Upcoming Tournaments</h3>
    </div>
    <div class="text-secondary text-center">
        <h5>Edit the details of the Upcoming Tournament</h5>
    </div>

    <form action="{{ route('updateEvent') }}" method="POST" class="mt-5 pt-5">
        @csrf
        @if (Session::has('message'))
            <script>
                swal("Added!!", "{!! Session::get('message') !!}", "success", {
                    button: "OK",
                })
            </script>
        @endif
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