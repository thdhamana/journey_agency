<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/costom.css')}}" rel="stylesheet">

    <script src="{{asset('backend/fontawesome/js/all.js')}}"></script>
    
</head>

<body class="bg-gradient-primary">

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-10 m-auto">
                <div class="card">
                    <div class="card-body p-5 ">
                        <div class="row d-flex flex-row gap-2">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center ">
                                <img width="300px" src="{{asset('backend/img/Lock.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                        
                                <form method="POST" action="{{ route('login') }}" class="form-floating">
                                    @csrf
                        
                                    <!-- Email Address -->
                        
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating login">
                                                <input class="form-control @error('email') is-invalid @enderror border-0 rounded" type="text" name="email" id="floatingemail" placeholder="Email" required autocomplete="current-email">
                                                <label for="floatingemail">Enter your email here</label>
                                                <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="col-12">
                                            <div class="form-floating mt-3 login">
                                                <input class="form-control @error('password') is-invalid @enderror border-0 rounded" type="password" name="password" id="floatingpassword" placeholder="password" required autocomplete="current-password">
                                                <label for="floatingpassword">Enter your password</label>
                                                <div class="invalid-feedback">@error('password') {{ $message }} @enderror</div>
                                            </div>
                                        </div>
                                        
                                        <div class="row m-auto">
                                            <x-primary-button class="fs-5 justify-center rounded mt-3">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                        </div>
                                    </div>

                                    <div class="row my-4">
                                    <span>_________________________________Or_________________________________</span>
                                    </div>

                                    <div class="text-center mt-4">
                                        <p class="text-muted fs-16">Sign in with</p>
                                        <div class="d-flex gap-2 justify-content-center mt-3">
                                            <a href="javascript: void(0);" class="btn btn-soft-primary"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-soft-danger"><i class="fa-brands fa-google"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-soft-info"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="javascript: void(0);" class="btn btn-soft-dark"><i class="fa-brands fa-github"></i></a>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-6 link-opacity-10-hover ">
                                                @if (Route::has('password.request'))
                                                <a class="underline text-primary fw-bold flex-wrap " href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password ??') }}
                                                </a>
                                                @endif
                                        </div>
                                        <div class="col-6 text-end link-opacity-100-hover">
                                                <a class="underline text-primary fw-bold flex-wrap " href="{{ route('register')}}">
                                                    {{__('Create an account !!')}}
                                                </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>