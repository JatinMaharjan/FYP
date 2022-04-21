<?php

use App\Http\Controllers\AddStudent;
use App\Http\Controllers\AddTeacher;
use App\Http\Controllers\AllStudent;
use App\Http\Controllers\AllTeacher;
use App\Http\Controllers\AllTeacherController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\RankingController;
use App\Mail\WelcomeMail;
use App\Models\Carousel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home routes
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/trainingTime',[HomeController::class,'trainingTime'])->name('trainingTime');
Route::get('/aboutUs',[HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/contactUs',[HomeController::class,'contactUs'])->name('contactUs');
Route::get('/addEvent',[HomeController::class,'addEvent'])->name('AddEvent');

Route::get('/manageStudent',[AllStudent::class,'allStudent'])->name('allStudent');



//upcoming events routes
Route::get('/addEvents',[EventController::class,'index'])->name('add');
Route::post('/createEvent',[EventController::class,'create'])->name('createEvent');
Route::get('/allEvents',[EventController::class,'all'])->name('all');
Route::get('/editEvents/{tournamentId}',[EventController::class,'editEvent'])->name('editEvent');
Route::post('/updateEvent',[EventController::class,'updateEvent'])->name('updateEvent');
Route::get('/deleteEvents/{tournamentId}',[EventController::class,'deleteEvent'])->name('delete');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




//ranking routes

Route::get('/get_users/{id}',[RankingController::class,'get_users'])->name('get_users'); 
Route::get('/addRanking',[RankingController::class,'index'])->name('add');

Route::post('/createRanking',[RankingController::class,'create'])->name('createRanking');
Route::post('/updateRanking',[RankingController::class,'updateRanking'])->name('updateRanking');
// Route::get('/allRanking',[RankingController::class,'all'])->name('allRanking');
Route::get('/editRanking/{rankingId}',[RankingController::class,'editRanking'])->name('editRanking');
Route::get('/deleteRanking/{rankingId}',[RankingController::class,'deleteRanking'])->name('delete');

Route::get('/searchRanking', [HomeController::class, 'belt'])->name('belt');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Attedance routs
Route::get('/addAttendance',[AttendanceController::class,'index'])->name('add');
Route::post('/createAttendance',[AttendanceController::class,'create'])->name('createAttendance');
Route::get('/allAttendance',[AttendanceController::class,'all'])->name('allAttendance');
Route::get('/editAttendance/{id}',[AttendanceController::class,'editAttendance'])->name('editAttendance');
Route::post('/updateAttendance',[AttendanceController::class,'updateAttendance'])->name('updateAttendance');
Route::get('/deleteAttendance/{id}',[AttendanceController::class,'deleteAttendance'])->name('delete');

Route::get('/searchAttendance', [HomeController::class, 'date'])->name('date');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//add Teacher
Route::get('/addTeacher',[HomeController::class,'addTeacher'])->name('addTeacher');
Route::post('/createTeacher',[AddTeacher::class,'create'])->name('createTeacher');

//all Teacher(To see teacher Details)
Route::get('/allTeacher', [AllTeacherController::class,'all'])->name('allTeacher');
Route::post('/createTeacher',[AddTeacher::class,'create'])->name('createTeacher');

Route::post('/updateAllTeacher',[AllTeacherController::class,'updateAllTeacher'])->name('updateAllTeacher');
Route::get('/editAllTeacher/{Id}',[AllTeacherController::class,'editAllTeacher'])->name('editAllTeacher');
Route::get('/deleteAllTeacher/{Id}',[AllTeacherController::class,'deleteAllTeacher'])->name('delete');


//add Student
Route::get('/addStudent',[HomeController::class,'addStudent'])->name('addStudent');
Route::post('/createStudent',[AddStudent::class,'create'])->name('createStudent');
Route::post('/update',[AllStudent::class,'updateAllStudent'])->name('updateAllStudent');
Route::get('/editAllStudent/{Id}',[AllStudent::class,'editAllStudent'])->name('editAllStudent');
Route::get('/deleteAllStudent/{Id}',[AllStudent::class,'deleteAllStudent'])->name('delete');


//contact us
Route::get('/contactUs',[HomeController::class,'contactUs'])->name('addContactUs');
Route::post('/addContactUs',[ContactUsController::class,'create'])->name('createContactUs');

Route::get('/allContactUs',[ContactUsController::class,'all'])->name('allContactUs');
// Route::post('/createContactUs',[ContactUsController::class,'create'])->name('createContactUs');


//carousel
// Route::get('/carousel',[CarouselController::class,'Carousel'])->name('addCarousel');
Route::get('/addCarousel',[CarouselController::class,'index'])->name('addCarousel');
Route::post('/createCarousel',[CarouselController::class,'create'])->name('createCarousel');


//Mailing

Route::get('/email{id}', function(){
   
});

// Notification

Route::get('/notification/{id}', [HomeController::class, 'notification'])->name('notification');

// Payment khalti

// Route::post('khalt/verify',[HomeController::class, 'verify'])->name('ajax.khalti.verify_order');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::post('/khaltipayment', [HomeController::class, 'khaltiPayment'])->name('khaltiPayment');

// Route::get('payments', [HomeController::class, 'payments'])->name('payments');
// Route::get('/payment', [HomeController::class, 'payment'])->name('payment');