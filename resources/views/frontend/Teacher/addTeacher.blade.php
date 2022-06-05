@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5">
    <div class="text-center mt-5">
        <h3>Add Teacher</h3>
    </div>
    <div class="text-secondary text-center">
        <h5>Insert New Teacher Details</h5>
    </div>

    <form action="{{ route('createTeacher') }}" method="post" class="mt-4 pt-5">
        @csrf

        @if (Session::has('message'))
            <script>
                swal("Added!!", "{!! Session::get('message') !!}", "success", {
                    button: "OK",
                })
            </script>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    @error('name') 
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Email</label>
                        <input type="text" name="email"  class="form-control">
                    </div>
                    @error('email') 
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Contact</label>
                        <input type="text" name="contact"  class="form-control">
                        @error('contact') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Gender</label>
                        <input type="text" name="gender"  class="form-control">
                    </div>
                    @error('gender') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Birth Day</label>
                        <input type="date" name="bday"  class="form-control">
                    </div> 
                    @error('bday') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="md-form mb-3">
                        <label for="name" class="">Password</label>
                        <input type="password" name="password"  class="form-control">
                    </div> 
                    @error('password') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
                
            </div>
        </div>
    </form>  

</div>
@endsection