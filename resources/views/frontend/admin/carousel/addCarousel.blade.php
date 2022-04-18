@extends('layouts.main')

@section('content')

<div class="mt-5 pt-5">


    <div class="mt-5 text-center">
        <h3>Add Image for the Carousel in the Home page.</h3>
    </div>

    <form action="{{ route('createAttendance') }}" method="post" class="mt-5 pt-5">
        @csrf
        <div class="container">
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col" >Id</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="text" name="id" value="{{ Auth::user()->id }}"></td>
                    <td><img src="../img {{ $carousel->img }}" alt="carousel" srcset="" width="100px" height="45rem"></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </form> 
</div>
@endsection