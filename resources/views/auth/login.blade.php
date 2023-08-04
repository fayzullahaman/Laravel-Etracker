<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('app-assets/css/login.css')}}">

</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <div class="text-center name">
            Practice Project
        </div>
        <form class="p-3 mt-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user" for="email" :value="__('Email')" ></span>
                <input type="email" name="email" id="email" :value="old('email')" required autofocus>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key" for="password" :value="__('Password')"></span>
                <input type="password" name="password" id="password" required autocomplete="current-password">
            </div>
            <button class="btn mt-3">Login</button>
            <div class="form-field d-flex align-items-center fs-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>
    
</body>
</html>