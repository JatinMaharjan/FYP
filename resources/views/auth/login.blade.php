{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Chunidevi Taekwondo Association</title>
    <style>
        a:hover {
            color: rgb(255, 0, 0)
        }
        a:link {
            text-decoration: none;
        }
        .LOGINLOGIN{
            background-image: url('frontend/image/TaekwondoLogin.jpg');
            background-size: cover;
        }
        .loginBackground {
            background-color: rgb(0, 0, 0);   
            opacity: 0.8;
            border-radius: 30px;
        }         
        .loginSignupButton {
            color: rgb(255, 255, 255);
            padding: 16px 20px;
            cursor: pointer;
            width: 100%;
            border-radius: 30px;
        }
        .forgotPassword{
            float: right;
        }

    </style>
</head>

<body class="LOGINLOGIN">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 m-auto mt-5 loginBackground">
                <div>
                    <div class="mt-5 ">
                        <div class="text-light">
                            <h3>
                                Hello
                            </h3>
                        </div>
                        <div class="mt-3 text-secondary">
                            <h3 class="login-heading fw-bold">Sign in to Your Account</h3>
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class=" form-floating mb-4 mt-4">
                                <input type="email" class="form-control" name="email" placeholder="Type Your Username." class="form-control" />
                                <label for="floatingInput" >User Name</label> 
                            </div>
                        
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Type Your Password." class="form-control"/>
                                <label for="floatingPassword">Password</label>
                            </div>

                            
                            <div class=" forgotPassword mb-5">
                                <a href="#">Forgot Password</a>
                            </div>
            
                            <div class="form-check mt-5">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-light" for="exampleCheck1">Remember me</label>
                            </div>
                            {{-- <div class="login-btn login-button">
                                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                            </div> --}}
                            <div class="text-center login-btn login-button mt-3">
                                <button type="submit" class="btn loginSignupButton bg-danger">Login</button>
                            </div>
                            <div class="text-center mb-4 mt-3">
                                <button type="button" class="btn loginSignupButton bg-danger">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>