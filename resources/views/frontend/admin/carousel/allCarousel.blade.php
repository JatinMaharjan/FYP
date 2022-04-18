
@extends('layouts.main')

@section('content')

<div class="container text-center text-light mt-5 mb-5">

    <div class="text-dark mt-5 pt-5">
      <h3>ChuniDevi Taekwondo Association</h3>
    </div>
    
    <div class="mt-5 pt-5 ">
      <table class="table">
        <thead>
          <tr>
                <th ><strong><h5> Id</h5></strong></th>
                <th ><strong><h5> Image</h5></strong></th>
          </tr>
        </thead>
        <tbody class="">
            @foreach ($carousel as $carousel)                
                <tr>
                    <td>{{ $carousel->carouselId }}</td>
                    <td>{{ $carousel->user->img }}</td>
                    <td>
                        <a href="/editCarousel/{{ $carousel->CarouselId }}" class="btn btn-primary">Edit</a>
                        <a href="/deleteCarousel/{{ $carousel->CarouselId }}" class="btn btn-danger">Delete</a>
                        </td>
                </tr>          
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection