@extends('layouts.main')

@section('content')
<div class="mt-5 pt-5"> 

    <h3 class="text-center mt-5">Insert Belt of the Student</h3>

    {{-- <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Student Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

<div class="container">
    <form action="{{ route('createRanking') }}" method="post" class="mt-3 pt-3 mb-5">
        @csrf
        @if (Session::has('message'))
            <script>
                swal("Added!!", "{!! Session::get('message') !!}", "success", {
                    button: "OK",
                })
            </script>
        @endif
        
            <table class="table text-center">
                <thead>
                  <tr>
                    {{-- <th scope="col" >Ranking Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Gender</th> --}}
                    <th scope="col">User Name</th>
                    <th scope="col">Belt</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      {{-- <select name="userId" id="">
                          <option value="{{ $ranking->user->id }}">{{ $ranking->user->id }}</option>
                        </select>--}}
                        {{-- <select id="" name="userId">
                            <option value="{{$ranking->user->id}}">{{$ranking->user->name}}</option>
                        </select> --}}
                    {{-- <td><input class="btn border-none" type="text" name="userId"></td>
                    <td><input class="btn border-none" type="text" ></td>
                    <td><input class="btn border-none" type="email" ></td>
                    <td><input class="btn border-none" type="text" ></td>
                    <td><input class="btn border-none" type="text" ></td> --}}
                    <td>
                        <select name="userId">
                            @foreach ($users as $user)                                
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input class="btn border-none" type="t
                        ext" name="userId" placeholder="UserId" > --}}
                    </td>
                    <td><input class="btn border-none" type="text" name="belt" placeholder="Belt" ></td>
                    @error('belt') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    <td><button class="btn btn-primary" type="submit">Submit</button></td>
                    


                    {{-- <td><input class="btn border-none" type="text" name="userId" id="userId" value="{{ Auth::user()->id }}" ></td>
                    <td><input class="btn border-none" type="text" name="name" readonly></td>
                    <td><input class="btn border-none" type="email"  readonly></td>
                    <td><input class="btn border-none" type="text" name="contact" readonly></td>
                    <td><input class="btn border-none" type="text" name="gender" readonly></td>
                    <td><input class="btn border-none" type="text" name="belt" placeholder="Belt" ></td>
                    <td><button class="btn btn-primary" type="submit">Submit</button></td> --}}
                  </tr>
                </tbody>
            </table>  
    </form> 
</div>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $( "#user_id" ).change(function () {
    var id = $(this).val();
    
    $.ajax({
    url:'{{url('get_users') }}/'+id,
    type: 'get',
    dataType:'json',
    success: function($response){
    var name =JSON.parse(JSON.stringify($response.name));
    var email =JSON.parse(JSON.stringify($response.email));
    var contact =JSON.parse(JSON.stringify($response.contact));
    var gender =JSON.parse(JSON.stringify($response.gender));
    $("#name").val(name);
    $("#email").val(email);
    $("#gender").val(gender);
    $("#contact").val(contact);
    }
    })
    });


    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                      })
                      
    </script>
@endsection