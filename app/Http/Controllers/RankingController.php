<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class RankingController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Student')->get();
        return view('frontend.admin.ranking.addRanking', compact('users'));
    }

    public function create(Request $request)
    {
        $rankings = new Ranking();
        $rankings->userId = $request->userId;
        $rankings->belt = $request->belt;
        $rankings->save();
        return back()->with('message', 'Event added successfully.');
    }

    public function all()
    {
        $users = User::all();
        $rankings = Ranking::all();
        return view('frontend.admin.ranking.allRanking', compact('rankings', 'users'));
    }

    public function deleteRanking($rankingId)
    {
        Ranking::where('UserId', $rankingId)->delete();
        return back()->with('message', 'Student deleted successfully.');
    }
    public function editRanking($rankingId)
    {
        $rankings = Ranking::find($rankingId);
        return view('frontend.admin.ranking.editRanking', compact('rankings'));
    }
    public function updateRanking(Request $request)
    {
        $ranking = Ranking::find($request->rankingId);
        $ranking->userId = $request->userId;
        $ranking->belt = $request->belt;
        $ranking->save();
        return back()->with('message', 'Ranking Updated Successfully.');
    }
    public function get_users($id)
    {

        $user = User::where('id', $id)->first();
        $name = $user->name;
        $contact = $user->contact;
        $email = $user->email;
        $gender = $user->gender;
        $show = ['status' => 'Success', 'name' => $name, 'gender' => $gender, 'email' => $email, 'contact' => $contact];
        echo (json_encode($show));
    }

}
