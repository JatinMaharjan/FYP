<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{

    public function createCarousel(Request $request) {

        // dd($request);
        $request->validate([
            'heading' => 'required',
        ]); 

       

        $Carousel= new Carousel();
        $Carousel = $request->heading;
        $Carousel = $request->subHeading;
        if($request->hasfile('image'))
        {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/img/', $filename);
        $Carousel->img = $filename;
        }
        $Carousel->save();
        // $img = $request->file;
        // $imageName=time().'.'.$img->getClientoriginalExtension();
        // $request->file->move('img',$imageName);
        // $Carousel->img=$imageName;
    }

    public function index(){
        $carousels= Carousel::all();
        return view('frontend.admin.carousel.addCarousel', compact('carousels'));
    }

    public function all() {
        $carousels= Carousel::all();
        return view('frontend.admin.carousel.allCarousel', compact('carousels'));
    }

    public function deleteCarousel($id) {
        Carousel::where('id',$id)->delete();
        // return back()->with('message', 'Student deleted successfully.');
    }
    public function editCarousel($id){
        $carousels = Carousel::find($id);
        return view('frontend.admin.carousel.editCarousel', compact('carousels'));
    }


    // public function updateAttendance(Request $request){
    //     $attendance = Attendance::find($request->attendanceId);
    //     $attendance->userId = $request->userId;
    //     $attendance->date = $request->date;
    //     $attendance->attendance = $request->attendance;
    //     $attendance->save();
    //     return back()->with('message', 'Attendance Updated Successfully.');
    // }
    public function updateCarousel(Request $request){
        $Carousels = Carousel::find($request->carouselid);
        $Carousels->carouselid = $request->carouselid;
        $Carousels->img=$request->img;
        // $Carousels->heading = $request->$heading;
        // $Carousels->subHeading = $request->$subHeading;
        $Carousels->save();
        return back()->with('message','Attendance added successfully.');
    }

    // public function updateCarousel(Request $request){
    //     $img = $request->file;
    //     $imageName=time().'.'.$img->getClientoriginalExtension();
    //     $request->file->move('img',$imageName);
    //     $Carousel->img=$imageName;
    //     $Carousel->save();
    //     return back()->with('message', 'Attendance Updated Successfully.');
    // }
}
