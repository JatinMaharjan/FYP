<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChuniDevi Taekwondo Association</title>

    <link href='{{ url('frontend/css/main.css') }}' rel='stylesheet' />
<script src='{{ url('frontend/js/main.js') }}'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialDate: '2020-09-12',
      navLinks: true, 
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, 
      events: [
        {
          
        },
        ]
    });
    calendar.render();
  });

</script>
<style>

    body {
      margin: 40px 10px;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }
    .calendar{
        text-decoration: none;
    }
  
    #calendar {
      max-width: 1100px;
      margin: 0 auto;
    }
    .upcomingcompetationBOX {
    margin-top: 20px;
    height: auto;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    text-align: center;
}
    /* background-image:{{ url('frontend/image/arena.jpg') }};
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; */
  
  </style>
</head>
<body>
    @extends('layouts.main')

@section('content')


    <div class="container upcomingcompetationBOX text-center  mt-5 pt-5">
        <div class="mt-5 ">
            <h3>Upcoming Tournament</h3>
          </div>
          <div class="text-secondary ">
            <h4>ChuniDevi Taekwondo Championship</h4>
          </div>
          <div class="text-secondary  mb-5">
            <h5>These are the Upcoming Tournaments which are going to take place
                soon
            </h5>
          </div>
    
        <div class="mt-5 pt-5 mb-5">
            <table class="table ">
                <thead class="thead-light">
                <tr>
                    <th scope="col"><h5>S.No</h5></th>
                    <th scope="col"><h5>Tournament Name</h5></th>
                    <th scope="col"><h5>Date</h5></th>
                    <th scope="col"><h5>Details</h5></th>
                </tr>
                </thead>
                <tbody>
                    @if (Auth::user()->role == 'a')                        
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->tournamentId }}</td>
                            <td>{{ $event->tournamentName }}</td>
                            <td>{{ $event->from }}-{{ $event->to }}</td>
                            <td>
                
                                <ul class="nav-item dropdown px-2">
                                <a class="nav-link text-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Details
                                </a>
                                <li class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                                    <div class="card card-body abc text-center">
                                        <h3>Event Venue</h3>
                                        <h5>{{ $event->venue }}</h5>
                                        <br>
                                        <h3>Weight Category</h3>
                                        <table>
                                        <thead>
                                            <tr>
                                            <th scope="col"><h5>Weight</h5></th>
                                            <th scope="col">
                                                <h5>Male Division</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Female Division</h5>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Fin</td>
                                            <td>Not Exceeding 54kg</td>
                                            <td>Not Excedding 46kg</td>
                                            </tr>
                                            <tr>
                                            <td>Fly</td>
                                            <td>Over 54kg & Exceeding 58kg</td>
                                            <td>Over 46kg & Excedding 53kg</td>
                                            </tr>
                                            <tr>
                                            <td>Bantam</td>
                                            <td>Over 58kg & Not Exceeding 63kg</td>
                                            <td>Over 49kg & Not Exceeding 53kg</td>
                                            </tr>
                                            <tr>
                                            <td>Feather</td>
                                            <td>Over 63kg & Not Exceeding 68kg</td>
                                            <td>Over 53kg & Not Exceeding 57kg</td>
                                            </tr>
                                            <tr>
                                            <td>Light</td>
                                            <td>Over 68kg & Not Exceeding 74kg</td>
                                            <td>Over 57kg & Not Exceeding 62kg</td>
                                            </tr>
                                            <tr>
                                            <td>Welter</td>
                                            <td>Over 74kg & Not Exceeding 80kg</td>
                                            <td>Over 62kg & Not Exceeding 67kg</td>
                                            </tr>
                                            <tr>
                                            <td>Middle</td>
                                            <td>Over 80kg & Not Exceeding 87kg</td>
                                            <td>Over 67kg & Not Exceeding 73kg</td>
                                            </tr>
                                            <tr>
                                            <td>Heavy</td>
                                            <td>Over 87Kg</td>
                                            <td>Over 73kg</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    
                                    </li>
                                </ul>
                            </td>
                            
                            <td>
                                <a href="/editEvents/{{ $event->tournamentId }}" class="btn btn-primary">Edit</a>
                                <a href="/deleteEvents/{{ $event->tournamentId }}" class="btn btn-danger">Delete</a>
                                
                            </td>
                        </tr> 
                        @endforeach
                    @else
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->tournamentId }}</td>
                            <td>{{ $event->tournamentName }}</td>
                            <td>{{ $event->from }}-{{ $event->to }}</td>
                            <td>
                
                                <ul class="nav-item dropdown px-2">
                                <a class="nav-link text-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Details
                                </a>
                                <li class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                                    <div class="card card-body abc text-center">
                                        <h3>Event Venue</h3>
                                        <h5>{{ $event->venue }}</h5>
                                        <br>
                                        <h3>Weight Category</h3>
                                        <table>
                                        <thead>
                                            <tr>
                                            <th scope="col"><h5>Weight</h5></th>
                                            <th scope="col">
                                                <h5>Male Division</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Female Division</h5>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Fin</td>
                                            <td>Not Exceeding 54kg</td>
                                            <td>Not Excedding 46kg</td>
                                            </tr>
                                            <tr>
                                            <td>Fly</td>
                                            <td>Over 54kg & Exceeding 58kg</td>
                                            <td>Over 46kg & Excedding 53kg</td>
                                            </tr>
                                            <tr>
                                            <td>Bantam</td>
                                            <td>Over 58kg & Not Exceeding 63kg</td>
                                            <td>Over 49kg & Not Exceeding 53kg</td>
                                            </tr>
                                            <tr>
                                            <td>Feather</td>
                                            <td>Over 63kg & Not Exceeding 68kg</td>
                                            <td>Over 53kg & Not Exceeding 57kg</td>
                                            </tr>
                                            <tr>
                                            <td>Light</td>
                                            <td>Over 68kg & Not Exceeding 74kg</td>
                                            <td>Over 57kg & Not Exceeding 62kg</td>
                                            </tr>
                                            <tr>
                                            <td>Welter</td>
                                            <td>Over 74kg & Not Exceeding 80kg</td>
                                            <td>Over 62kg & Not Exceeding 67kg</td>
                                            </tr>
                                            <tr>
                                            <td>Middle</td>
                                            <td>Over 80kg & Not Exceeding 87kg</td>
                                            <td>Over 67kg & Not Exceeding 73kg</td>
                                            </tr>
                                            <tr>
                                            <td>Heavy</td>
                                            <td>Over 87Kg</td>
                                            <td>Over 73kg</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    
                                    </li>
                                </ul>
                            </td>
                        </tr> 
                        @endforeach
                    @endif
                            
            </tbody>
            </table>
        </div>
    </div>


    <div class="mt-5 text-center">
        <h3 >Calendar</h3>
    </div>

    <div class="mt-5 mb-5">
        <div id='calendar'></div>   
    </div>
     
    
@endsection
</body>
</html>


