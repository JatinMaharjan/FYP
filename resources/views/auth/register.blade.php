{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="contact" value="{{ __('Contact') }}" />
                <x-jet-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <x-jet-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="bday" value="{{ __('BirthDay') }}" />
                <x-jet-input id="bday" class="block mt-1 w-full" type="date" name="bday" :value="old('bday')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="role" value="{{ __('Role') }}"/>
                <x-jet-input id="role" class="block mt-1 w-full" type="text" name="role" required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
    <link rel="stylesheet" href="">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>ChuniDevi Taekwondo Association</title>
    
    <style>
        .SIGNUPSIGNUP{
            background-image: url('frontend/image/TaekwondoLogin.jpg');
            background-size: cover;
        }
        .signupBackground {
            background-color: rgb(0, 0, 0);   
            opacity: 0.9;
            border-radius: 30px;
            padding: auto;
        }
        .signupButton {
            color: rgb(255, 255, 255);
            padding: 16px 20px;
            cursor: pointer;
            width:30%;
            border-radius: 30px;
        }

    </style>
</head>

<body class="SIGNUPSIGNUP">
    <div class="container mt-5">
        <div class="signupBackground p-5">
            <div class="text-center ">
                <h3 class="mb-3 text-light">Teacher Registration Form</h3>
            </div>
            <div class="text-secondary text-center mb-3">
                <h5>Please fill in this form to create an account.</h5>
            </div>
        <x-jet-validation-errors class="mb-4 text-light" />


            <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row">
                        <div class="col-md-2">
                        </div>

                        <div class=" col-md-4">
                            <div class="">
                                <label class=""><h6 class="text-light">User Name</h6></label>
                                <input type="text"  class="form-control form-control-lg font-cener"  placeholder="Enter Your User Name" name="name" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label class="" for="emailAddress"><h6 class="text-light ">Email</h6></label>
                                <input type="email" class="form-control form-control-lg" placeholder="Enter Your Email" name="email" required/>
                            </div>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        
                        <div class="col-md-4 mt-2">
                            <div >
                                <label class="form-label" for="contact"><h6 class="text-light">Phone Number</h6></label>
                                <input type="contact" class="form-control form-control-lg" placeholder="Enter Your Phonenumber" name="contact" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            {{-- <div class="col-4 mt-5">
                                <select class="form-select" name="role" aria-label="Default select example">
                                    <option selected>Select Role</option>
                                    <option value="T">Teacher</option>
                                    <option value="u">Student</option>
                                  </select>
                            </div> --}}
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">

                        </div>
                        <div class="col-4 mt-5">
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                              </select>
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="text-light mb-3">
                                <h6>Pick Your Birth Date</h6>
                            </div>
                            <input type="date" name="bday" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">

                        </div>
                        <div class="col-4 mt-3 mb-2">
                            <div class="form">
                                <label class="" for="password"><h6 class="text-light">Password</h6></label>
                                <input type="password" class="form-control form-control-lg" placeholder="Enter New Password" name="password" required autocomplete="new-password"/>
                            </div>
                        </div>
                        
                        <div class="col-4 mt-3 mb-2">
                            <div class="form">
                                <label class="" for="password"><h6 class="text-light">Re-write Password</h6></label>
                                <input type="password" class="form-control form-control-lg" placeholder="Re-Write Password" name="password_confirmation" required autocomplete="new-password"/>
                            </div>
                        </div>
                        <div class="col-2">
                        
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button type="submit" class="btn signupButton bg-danger"> Sign Up</button>
                    </div>
                    
                </div>
            </form>
        </div>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
</body>
</html>