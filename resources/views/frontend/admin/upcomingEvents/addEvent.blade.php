@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5">
    <div class="text-center mt-4">
        <h3>Insert Upcoming Tournaments</h3>
    </div>
    <div class="text-center text-secondary">
        <h5>These are the Upcoming Tournaments Which are going to take place soon!</h5>
    </div>

    <form action="{{ route('createEvent') }}" method="post" class="mt-5 pt-5">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Tournament Name</label>
                        <input class="form-control" type="text" name="tournamentName" placeholder="Insert Tournament Name" id="">
                    </div>
                    @error('tournamentName') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Tournament Start Date</label>
                        <input class="form-control" type="date" name="from" placeholder="from" id="">
                    </div>
                    @error('from') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Tournament End Date</label>
                        <input class="form-control" type="date" name="to" placeholder="to" id="">
                    </div>
                    @error('to') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Venu</label>
                        <input class="form-control" type="text" name="venue" placeholder="venue" id="">
                    </div>
                    @error('venue') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>

        {{-- <div class="container">
            <table class="table text-center">
                
                <tbody>
                  <tr>
                    <td><input class="btn borner-none" type="text" name="tournamentName" placeholder="Insert Tournament Name" id=""></td>
                    <td><input class="btn borner-none" type="date" name="from" placeholder="from" id=""></td>
                    <td><input class="btn borner-none" type="date" name="to" placeholder="to" id=""></td>
                    <td><input class="btn borner-none" type="text" name="venue" placeholder="venue" id=""></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
            </table>
        </div> --}}
    </form>    
</div>
@endsection