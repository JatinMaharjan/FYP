<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
 
    <title>ChuniDevi Taekwondo Association</title>

  </head>
  
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
        <div class="container-fluid">
          <div class="nav-header d-flex" style="line-height: 10px">
            <a class="navbar-brand" href="/">
              <img src="{{ url('frontend/image/1.png') }}" alt="" width="180" height="80" />
            </a>
            <p class="text-light mt-3  " style="line-height: 70px">
              ChuniDevi Taekwondo Association
            </p>
          </div>
  
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse mx-5 px-5" id="navmenu">
            <ul class="navbar-nav ms-auto">
              
                
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role ==  'a')
                            <li class="nav-item px-2">
                                <a href="/" class="nav-link fs-5">Home</a>
                            </li>
                
                            <li class="nav-item dropdown px-2">
                                <a
                                class="nav-link dropdown-toggle fs-5"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                >
                                Competation
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/allEvents"
                                    >Upcoming Competation</a
                                    >
                                </li>
                                </ul>
                            </li>
                
                            <li class="nav-item px-2">
                                <a href="/trainingTime" class="nav-link fs-5">Training Time</a>
                            </li>
                            <li class="nav-item px-2">
                                <a href="/aboutUs" class="nav-link fs-5">About Us</a>
                            </li>
                
                            <li class="nav-item dropdown px-2">
                                <a
                                    class="nav-link dropdown-toggle fs-5"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/addTeacher">Add Teacher</a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/allTeacher">Manage Teacher Details</a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/addEvents">Add Competation</a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/notification/{id}">Payment Notification</a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/allContactUs">Manage ContactUs</a>
                                    </li>
                                    <li>
                                    <a class="dropdown-item" href="/">Manage Home Slider</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Log Out</a>
                                    </li>
                                    <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                
                                {{-- <li>
                                    <a class="dropdown-item text-light" href="#">{{ Auth::user()->name }}</a>
                                </li> --}}
                                        @elseif (Auth::user()->role == 'Teacher')
                                            <li class="nav-item px-2">
                                                <a href="/" class="nav-link fs-5">Home</a>
                                            </li>
                                
                                            <li class="nav-item dropdown px-2">
                                                <a
                                                class="nav-link dropdown-toggle fs-5"
                                                href="#"
                                                id="navbarDropdown"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                >
                                                Competation
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a class="dropdown-item" href="/allEvents">Upcoming Competation</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('belt') }}">Ranking</a>
                                                </li>
                                                </ul>
                                            </li>
                                
                                            <li class="nav-item px-2">
                                                <a href="{{ route('allStudent') }}" class="nav-link fs-5">Student Details</a>
                                            </li>
                                            <li class="nav-item px-2">
                                                <a href="{{ route('date') }}" class="nav-link fs-5">Attendance</a>
                                            </li>
                                            <li class="nav-item px-2">
                                                <a href="/aboutUs" class="nav-link fs-5">About Us</a>
                                            </li>
                                            <li class="nav-item dropdown px-2">
                                                <a
                                                    class="nav-link dropdown-toggle fs-5"
                                                    href="#"
                                                    id="navbarDropdown"
                                                    role="button"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li>
                                                    <a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a>
                                                    </li>
                                                    <li>
                                                    <a class="dropdown-item" href="/addStudent">Add Student</a>
                                                    </li>
                                                    <li>
                                                    <a class="dropdown-item" href="/addRanking">Add Student Ranking</a>
                                                    </li>
                                                    <li>
                                                    <a class="dropdown-item" href="/addAttendance">Add Attendance</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Log Out</a>
                                                    </li>
                                                    <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="nav-item px-2">
                                                <a href="/" class="nav-link fs-5">Home</a>
                                            </li>
                                
                                            <li class="nav-item dropdown px-2">
                                                <a
                                                class="nav-link dropdown-toggle fs-5"
                                                href="#"
                                                id="navbarDropdown"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                >
                                                Competation
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a class="dropdown-item" href="/allEvents"
                                                    >Upcoming Competation</a
                                                    >
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('belt') }}">Ranking</a>
                                                </li>
                                                </ul>
                                            </li>
                                
                                            <li class="nav-item px-2">
                                                <a href="/trainingTime" class="nav-link fs-5">Training Time</a>
                                            </li>
                                            <li class="nav-item px-2">
                                                <a href="/aboutUs" class="nav-link fs-5">About Us</a>
                                            </li>
                                            <li class="nav-item px-2">
                                                <a href="/contactUs" class="nav-link fs-5">Contact Us</a>
                                            </li> 
                                            <li class="nav-item px-2">
                                                
                                            
                                            </li>
                                            <li class="nav-item dropdown px-2">
                                                <a
                                                class="nav-link dropdown-toggle fs-5"
                                                href="#"
                                                id="navbarDropdown"
                                                role="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                >
                                                {{ Auth::user()->name }}
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('profile.show') }}"
                                                    >My Profile</a
                                                    >
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('payment') }}">Payment</a
                                                    >
                                                </li>
                                                <li class="">
                                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Log Out</a>
                                                </li>
                                                <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                                </ul>
                                            </li>
                            @endif
                            @else
                            <div class="" style="margin-right: 20px">
                                <a type="button" href="/login" class="btn btn-outline-warning">Login</a>
                            </div>
                            <div>
                                <a type="button" href="/register" class="btn btn-outline-warning">Signup</a>
                            </div>

                            
                            

                                {{-- <li class="nav-item dropdown px-2">
                                    <a
                                    class="nav-link dropdown-toggle fs-5"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    >
                                    Action
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="/login"
                                        >Login</a
                                        >
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/register">Sign up</a>
                                    </li>
                                    </ul>
                                </li> --}}
                    @endauth
                @endif
            </ul>
          </div>
        </div>
      </nav>