@extends('layouts.main')

@section('content')
<section class="mb-4 mt-5 pt-5 bg-dark">
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-light">
      Contact Us
    </h2>
    <p class="text-center w-responsive mx-auto mb-5 text-muted">
      Do you have any questions? Please do not hesitate to contact us
      directly. Our team will come back to you within a matter of hours to
      help you.
    </p>

    <div class="container">
      <form action="{{ route('createContactUs') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="md-form text-secondary mb-3">
                  <label for="name" class="">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                  />
                  @error('name') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="md-form text-secondary mb-3">
                  <label for="name" class="">Contact</label>
                  <input
                    type="text"
                    id=""
                    name="contact"
                    class="form-control"
                  />
                  @error('contact') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="md-form text-secondary mb-3">
                  <label for="name" class="">Email</label>
                  <input
                    type="text"
                    id=""
                    name="Email"
                    class="form-control"
                  />
                  @error('email') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="md-form text-secondary mb-3">
                  <label for="name" class="">Message</label>
                  <textarea name="Message" id="" cols="30" rows="10" 
                  class="form-control md-textarea"></textarea>
                </div>
                @error('Message') 
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                <div class="text-center">
                  <button class="btn btn-primary">Submit &rarr;</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 text-center text-light mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1957.5751372088887!2d85.30505338445504!3d27.646477765764466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1784d1335d41%3A0x2df143396510abc9!2sRadio%20Station%2C%20Ekantakuna-Tikabhairab%20Rd%2C%20Karyabinayak%2044700!5e0!3m2!1sen!2snp!4v1645857906417!5m2!1sen!2snp" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </form>
    </div>
    
    
</section> 
@endsection