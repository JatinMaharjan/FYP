@extends('layouts.main')

@section('content')
<div class="container text-center text-light mt-5 pt-5 mb-5">

    <div class="text-dark pt-5">
      <h3>ChuniDevi Taekwondo Association</h3>
    </div>
    <div class="text-secondary">
      <h4>Ranking of Our Students</h4>
    </div>
    <div class="text-secondary">
      <h5>See Your Positions</h5>
    </div>

    <form action="" class="p-4">
        <div class="row g-3">
            <div class="m-3 col-lg">
                <label for="belt" class="form-label text-dark">Belt</label>
                <input type="search" class="form-control p-2" id="belt"
                    placeholder="Search belt" name="search" />

            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary bus-btn p-2">
                    Search Belt &rarr;
                </button>
            </div>
        </div>
    </form>
    
    <div class="mt-5 pt-5 ">
      <table class="table">
        <thead>
          <tr>
                <th><strong><h5>Ranking Id</h5></strong></th>
                <th ><strong><h5>User Id</h5></strong></th>
                <th ><strong><h5>Belt</h5></strong></th>
          </tr>
        </thead>
        <tbody class="text-dark">

            @if ($rankings->count() > 0) 
                @if (Auth::user()->role == 'Teacher')  
                    @foreach ($rankings as $ranking)                
                        <tr>
                            <td>{{ $ranking->Rankingid }}</td>
                            <td>{{ $ranking->userId }}</td>
                            <td>{{ $ranking->belt }}</td>
                            <td>
                                <a href="/editRanking/{{ $ranking->Rankingid }}" class="btn btn-primary">Edit</a>
                                <a href="/deleteRanking/{{ $ranking->userId }}" class="btn btn-danger">Delete</a>
                                </td>
                        </tr>          
                    @endforeach
                    @else
                    @foreach ($rankings as $ranking)                
                        <tr>
                            <td>{{ $ranking->Rankingid }}</td>
                            <td>{{ $ranking->userId }}</td>
                            <td>{{ $ranking->belt }}</td>
                        </tr>          
                    @endforeach
                @endif

                @else
                    <div class="alert alert-danger text-center" role="alert">
                        !!! No Blet Found !!!
                    </div>
            
            @endif  
            
            
        </tbody>
      </table>
    </div>
  </div>
 
@endsection