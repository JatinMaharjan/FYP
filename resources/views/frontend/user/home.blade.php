@extends('layouts.main')

@section('content')
<div class="bg-black mt-5 pt-5">

    <div
    id="carouselExampleIndicators"
    class="carousel slide"
    data-bs-ride="carousel"
    >
    <div class="carousel-indicators">
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner text-left">
      <div class="carousel-item active">
        <img
          src="{{ url('frontend/image/kyorugi3.jpg') }}"
          alt="..."
          class="w-100"
          style=" height: 45rem; background-size: cover; object-fit: cover; background-repeat: no-repeat;"/>
        <div class="carousel-caption">
          <h1><strong class="text-warning ">(KYORUGI)</strong>Taekwondo</h1>
          <p class="lead">
            Kyorugi translated into Russian means sparring. In other words,
            this is a confrontation between two rivals, which in practice
            makes it possible to check the quality of skills acquired by them
            during training
          </p>
          <a class="btn btn-warning text-center mb-5 mt-2" href="/contactUs" role="button">Contact Us</a>
        </div>
      </div>
    
      <div class="carousel-item">
        <img
          src="{{ url('frontend/image/pum.jpg') }}"
          alt="..."
          class="w-100"
          style="
            height: 45rem;
            background-size: cover;
            object-fit: cover;
            background-repeat: no-repeat;
          "
        />
        <div class="carousel-caption">
          <h1><strong class="text-warning">(POOMSAE)</strong>Taekwondo</h1>
          <p class="lead text-right">
            Poomsae or Patterns are a set sequence of movements that consists of the various fundamental stances, blocks, punches and kicks logically arranged in a meaningful order in response to attacks from multiple imaginary assailants.
          </p>
          <a class="btn btn-warning text-center mb-5 mt-2" href="/contactUs" role="button">Contact Us</a>
        </div>
      </div>
    
      <div class="carousel-item">
        <img
          src="{{ url('frontend/image/promotion.jpg') }}"
          alt="..."
          class="w-100"
          style="height: 45rem; background-size: cover; object-fit: cover; background-repeat: no-repeat;"/>
        <div class="carousel-caption ">
          <h1>
            <strong class="text-warning">(PROMOTION TEST)</strong>Taekwondo
          </h1>
          <p class="lead">
            The promotion exam is a tool to assist participants in their progress as skilled martial artists. It is not a competition with other people; it is a learning opportunity in which each individual displays their skills and receives feedback towards continual improvement.
          </p>
          <a class="btn btn-warning text-center mb-5 mt-2" href="/contactUs" role="button">Contact Us</a>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
    
    <!-- rules and regulation -->
    {{-- <div class="">
      <div class="container text-light mt-5">
        <div class="section-title row text-center">
          <div class="">
            <h2>The Rules Of Taekwondo</h2>
          </div>
          <div class="mt-3 text-muted">
              <h6>The ancient martial art of taekwondo has its fair share of rules which may seem confusing to the white belt beginner. Here's our quick guide to the basic rules for those Kup graders just starting out.</h6>
            </div>
        </div>
    
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="">
              <h4 class="text-warning">General taekwondo points and rules</h4>
            </div>
            <div class="mt-4">
              <p>1. The aim of taekwondo is to land as many kicks and blows as you can on your opponent in the allowed target areas.</p>
              <p>2. A taekwondo contest comprises three rounds of two minutes each – with a one-minute break between each round.</p>
              <p>3. The whole taekwondo contest area is a 10m square mat.</p>
              <p>4. Victory in a taekwondo bout can be achieved by knockout, by scoring the most points, or by default if the opponent is disqualified.</p>
            </div>
          </div>
    
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-5">
            <div class="mt-5">
              <img src="{{ url('frontend/image/general.jpg') }}" alt="" class="img-fluid"/>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="mt-5">
              <img src="{{ url('frontend/image/scoring.webp') }}" alt="" class="img-fluid"/>
            </div>
          </div>
    
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="text-warning mt-5">
                  <h4 >Scoring in taekwondo</h4>
              </div>
              <div class="mt-4">
                  <p>1. In taekwondo one point is scored for each legitimate strike on the body, and two points are given for kicks to the face. Competitors get an additional point for a knockdown.
                  </p>
                  <p>2. One referee and three judges oversee the contest, and a point is awarded only when two or more judges register a hit at the same time.</p>
                  <p>3. Kicks to the head and body are only awarded points if they are landed with parts of the foot below the ankle.</p>
                  <p>4. Blows to the body must be with the front of the index and middle finger knuckles of a tightly clenched fist if they are to be awarded points. Fighters are not allowed to punch to the head.</p>
                </div>
          </div>
        </div>
    
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="col-6 mt-5 text-warning">
                  <h4>Penalties in taekwondo</h4>
                </div>
                <div class="mt-4">
                  <p>1. Penalties in taekwondo are awarded for offences such as grabbing, holding, feigning injury, pushing, and turning one's back on an opponent.
                  </p>
                  <p>2. The most serious taekwondo offence is ‘Gam-jeom’, which leads to one point being deducted. Examples of ‘Gam-jeom’ include throwing an opponent, deliberately stepping over the boundary line, pulling an opponent to the ground, and attacking the face with anything but the feet.</p>
                  <p>3. A knockdown becomes a knockout if a competitor cannot regain his or her feet by the count of ten seconds or if the referee decides he or she is unfit to continue at the end of an eight count.</p>
                  <p>4. If a contest ends with the competitors level on points, then the contestant with the most points before penalties were deducted is the winner. If the scores are still level after this, then the referee awards the contest to the fighter he believes to have been the most willing to attack. The only exception to these rules occurs in the final of a competition, when a tied contest will go to an extra ‘sudden death’ round where the first to score a point wins. If no result is achieved during this round then the final decision once again lies with the referee.</p>
                </div>
          </div>
    
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-5">
            <div class="">
              <img src="{{ url('frontend/image/penalty.jpg') }}" alt="" class="img-fluid"/>
            </div>
          </div>
        </div>
    
      </div>
    </div> --}}
    
    <hr class="bg-white col-md-8 offset-2">
    
    <!-- About us -->
    
    <div class="container text-center mt-5 mb-3">
    <div class="text-light">
    <h3>About Us</h3>
    </div>
    <div class="lead text-secondary">
    <p  style="text-align: justify; ">
    Nepal Taekwondo Association is an International Federation
            governing the sport of Taekwondo and is a member of Nepal Martial
            Arts Association with other two martial arts disciplines under the
            Nepal Sports Council. NTA leads the most inclusive and accessible
            combat sport, which combines the values of an ancient Asian
            heritage with the values of a global elite sport. Taekwondo
            evolves on a solid base, mixing the traditional and the modern.
            The values recognized by practitioners and partners are the
            strength of our sport. They are distilled from those found in our
            society: the search for pleasure, surpassing oneself,
            perseverance. moral and physical strength, and respect for others.
            TAEKWONDO was introduced in Nepal as a martial arts discipline in
            1983, with a group of Nepalese Taekwondo practitioners in
            initiation of Mr. Deep Raj Gurung. presently serving as a
            Secretary General of Nepal Taekwondo Association by performing
            first time Taekwondo Demonstration publicly. Any martial arts
            along with Taekwondo were banned in the country to practice or to
            train by or for any Nepalese citizen. After the successful
            performance of Taekwondo Demonstration. the Nepalese Government
            realized the beneficial aspect of introducing Taekwondo in
            discipline forces in Nepal Police & Nepalese Army & later it was
            accepted as a open sports discipline for every Nepalese citizen.
    </p>
    </div>
    <a class="btn btn-secondary text-center mb-5 mt-2" href="/aboutUs" role="button">Read More</a>
    
    
    </div>
    
    <hr class="bg-white col-md-8 offset-2">
    
    
    <!-- Training Time -->
    <div class="container mt-3 text-center">
    <div class="mb-5">
      <div class="text-light mb-3 mt-5">
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
    
    <div class="row text-secondary">
        <div class="col-4">
          <div class="week ">
              <h3 class="mb-4">Week</h3>
              <h6 class="mb-3">Sunday</h6>
              <h6 class="mb-3">Monday</h6>
              <h6 class="mb-3">Tuesday</h6>
              <h6 class="mb-3">Wednesday</h6>
              <h6 class="mb-3">Thursday</h6>
              <h6 class="mb-3">Friday</h6>
              <h6 class="mb-5">Saturday</h6>
            </div>
        </div>
        <div class="col-4">
          <div class="morning">
              <h3 class="mb-4">Morning Shift</h3>
              <h6 class="mb-3">06:00-07:30</h6>
              <h6 class="mb-3">06:00-07:30</h6>
              <h6 class="mb-3">06:00-07:30</h6>
              <h6 class="mb-3">06:00-07:30</h6>
              <h6 class="mb-3">06:00-07:30</h6>
              <h6 class="mb-3">06:00-07:30</h6>
              <h6 class="mb-5">Holiday</h6>
            </div>
        </div>
        <div class="col-4">
          <div class="evening">
              <h3 class="mb-4">Evening Shift</h3>
              <h6 class="mb-3">05:00-07:00</h6>
              <h6 class="mb-3">05:00-07:00</h6>
              <h6 class="mb-3">05:00-07:00</h6>
              <h6 class="mb-3">05:00-07:00</h6>
              <h6 class="mb-3">05:00-07:00</h6>
              <h6 class="mb-3">05:00-07:00</h6>
              <h6 class="mb-5">05:00-07:00</h6>
              
            </div>
        </div>
    </div>
    <div class="mt-3">
      <a class="btn btn-secondary text-center mb-5 mt-2" href="/trainingTime" role="button">For More</a>
    </div>
    

</div>
@endsection