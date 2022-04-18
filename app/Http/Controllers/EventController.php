<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('frontend.admin.upcomingEvents.addEvent');
    }

    public function create(Request $request) {
        $event = new Event();
        $event->tournamentName = $request->tournamentName;
        $event->from = $request->from;
        $event->to = $request->to;
        $event->venue = $request->venue;
        $event->save();
        return back()->with('message','Event added successfully.');
    }

    public function all() {
        $events= Event::all();
        return view('frontend.admin.upcomingEvents.allEvent', compact('events'));
    }

    public function deleteEvent($tournamentId) {
        Event::where('tournamentId',$tournamentId)->delete();
        return back()->with('message', 'Tournament deleted successfully.');
    }

    public function editEvent($tournamentId) {
        $event = Event::find($tournamentId);
        return view('frontend.admin.upcomingEvents.editEvent', compact('event'));
    }

    public function updateEvent(Request $request) {
        $event = Event::find($request->tournamentId);
        $event->tournamentName = $request->tournamentName;
        $event->from = $request->from;
        $event->to = $request->to;
        $event->venue = $request->venue;
        $event->save();
        return back()->with('message','Event Updated successfully.');
    }

}
