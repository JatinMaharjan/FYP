<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{

    public function create(Request $request) {

        $Carousel= new Carousel();

        $img = $request->file;
        $imageName=time().'.'.$img->getClientoriginalExtension();
        $request->file->move('img',$imageName);
        $Carousel->img=$imageName;
    }

    public function index(){
        $Carousels= Carousel::all();
        return view('frontend.admin.carousel.addCarousel', compact('carousels'));
    }

    public function all() {
        $Carousels= Carousel::all();
        return view('frontend.admin.carousel.allCarousel', compact('carousels'));
    }

    public function deleteCarousel($id) {
        Carousel::where('id',$id)->delete();
        // return back()->with('message', 'Student deleted successfully.');
    }
    public function editCarousel($id){
        $Carousel = Carousel::find($id);
        return view('frontend.admin.Attendance.editAttendance', compact('carousels'));
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
