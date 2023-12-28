@extends('backend.home')

@section('content')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5 text-center">
                        <!-- Nested Row within Card Body -->
                        <div class="row d-flex flex-row gap-2">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center ">
                                <img width="300px" src="{{asset('backend/img/Lock.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will send you a password reset link that will allow you to choose a new one.') }}
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->      
                                    <div class="row">
                                        <div class="form-floating login">
                                            <input class="form-control @error('email') is-invalid @enderror border-0 rounded" type="text" name="email" id="floatingemail" placeholder="Email" required autocomplete="current-email">
                                            <label for="floatingemail">Enter your email here</label>
                                            <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                                        </div>
                                    </div>
 
                                    <div class="row m-auto p-0 ">
                                        <x-primary-button class="fs-5 justify-center rounded mt-3">
                                            {{ __('Email Password Reset Link') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                               <div class="mt-2">
                                    <div>
                                        <a class="small" href="{{route('admin.registerpage')}}">Create a new account !!</a>
                                    </div>
                                    <div>
                                        <a class="small" href="{{route('admin.loginpage')}}">Already have an account ? Login!!</a>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>
@endsection