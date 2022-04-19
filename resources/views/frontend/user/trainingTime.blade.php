@extends('layouts.main')

@section('content')

<div class="container text-center mb-5 mt-5">
    <div class="container mb-5 mt-5 text-center" id="trainingTime">
      <div class="mb-5 pt-5">
        <div class=" mb-3 mt-5">
          <h2>TRAINING TIME</h2>
        </div>

        <div class="text-secondary mb-2">
          <h4>Training multiple times per week does speed up progress</h4>
        </div>
        <div class="text-secondary mb-2">
          <h6>We provide the best Training Time for you.</h6>
        </div>
        <div class="text-secondary mb-2">
          <h7> ChuniDevi Taekwondo Association </h7>
        </div>
      </div>
  
      <div class="time">
        <div class="flex ">
          <div class="week ">
            <h3 class="mb-4">Week</h3>
            <h6 class="mb-3">Sunday</h6>
            <h6 class="mb-3">Monday</h6>
            <h6 class="mb-3">Tuesday</h6>
            <h6 class="mb-3">Wednesday</h6>
            <h6 class="mb-3">Thursday</h6>
            <h6 class="mb-3">Friday</h6>
            <h6 class="mb-5">Saturday</h6>
            <div
              class="d-inline-block col-4 m-2 bg-warning rounded border detailsBOX text-dark"
            >
              <h4>Rs.3000</h4>
              <h5>Admission</h5>
            </div>
          </div>
          <div class="morning">
            <h3 class="mb-4">Morning Shift</h3>
            <h6 class="mb-3">06:00-07:30</h6>
            <h6 class="mb-3">06:00-07:30</h6>
            <h6 class="mb-3">06:00-07:30</h6>
            <h6 class="mb-3">06:00-07:30</h6>
            <h6 class="mb-3">06:00-07:30</h6>
            <h6 class="mb-3">06:00-07:30</h6>
            <h6 class="mb-5">Holiday</h6>
            <div
              class="d-inline-block col-4 m-2 bg-warning rounded border detailsBOX text-dark"
            >
              <h4>Rs.500</h4>
              <h5>Per Month</h5>
            </div>
          </div>
          <div class="evening">
            <h3 class="mb-4">Evening Shift</h3>
            <h6 class="mb-3">05:00-07:00</h6>
            <h6 class="mb-3">05:00-07:00</h6>
            <h6 class="mb-3">05:00-07:00</h6>
            <h6 class="mb-3">05:00-07:00</h6>
            <h6 class="mb-3">05:00-07:00</h6>
            <h6 class="mb-3">05:00-07:00</h6>
            <h6 class="mb-5">05:00-07:00</h6>
            <div
              class="d-inline-block col-4 m-2 bg-warning rounded border detailsBOX text-dark"
            >
              <h4>Rs.2200</h4>
              <h5>Belt Promotion</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection