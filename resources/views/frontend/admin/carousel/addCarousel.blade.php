{{-- @extends('layouts.main')

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
                    
                    <th scope="col">Heading</th>
                    <th scope="col">Sub-Heading</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="btn border-none" type="text" name="id" value="{{()->id }}"></td>
                    <td><input class="btn border-none" type="text" name="Heading" ></td>
                    <td><input class="btn border-none" type="text" name="sub-Heading"></td>
                    <input type="file" name="file" id="">
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </form> 
</div>
@endsection --}}

@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5">
    <div class="text-center mt-4">
        <h3>Insert Upcoming Tournaments</h3>
    </div>
    <div class="text-center text-secondary">
        <h5>These are the Upcoming Tournaments Which are going to take place soon!</h5>
    </div>

    <form action="{{ route('createCarousel') }}" method="post" class="mt-5 pt-5" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Heading Name</label>
                        <input class="form-control" type="text" name="heading" placeholder="" id="">
                        @error('heading') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- @error('tournamentName') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Sub-Heading</label>
                        <input class="form-control" type="text" name="subHeading" placeholder="" id="">
                    </div>
                    {{-- @error('from') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Image</label>
                        <input type="file" name="img" id="">
                    </div>
                    {{-- @error('from') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
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