@extends('layouts.main')

@section('content')

<div class="mt-5 pt-5">


    <div class="mt-5 text-center">
        <h3>Payment</h3>
    </div>

    <form action="{{ route('') }}" method="post" class="mt-5 pt-5">
        @csrf
        <div class="container">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col" >User Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="text"></td>
                    <td><input class="btn border-none" type="text"></td>
                    <td><input class="btn border-none" type="text"></td>
                    <td><input class="btn border-none" type="date"></td>
                    <td><button class="btn btn-primary" type="submit">Paypal</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </form> 
</div>
@endsection