<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form</title>
    <link rel="stylesheet" href="{{ asset('app-assets/css/login.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="form-bg">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4 ">
                    <div class="form-container">
                        <div class="form-icon"><i class="fa fa-user"></i></div>
                        <h3 class="title">Signup Form</h3>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" :value="__('Name')">email</label>
                                <input class="form-control" id="name" type="text" name="name" placeholder="your name" :value="old('name')" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email" :value="__('Email')">email</label>
                                <input class="form-control" id="email" type="email" name="email" placeholder="email address" :value="old('email')" required>
                            </div>
                            <div class="form-group">
                                <label for="password" :value="__('Password')">password</label>
                                <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" placeholder="new password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
                                <input class="form-control" id="password_confirmation" type="password"
                                name="password_confirmation" required placeholder="password">
                            </div>
                            <button class="btn btn-default mt-3">
                                {{ __('Register') }}
                            </button>
                            <div class="form-group flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
