
@extends('backend.home')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">

            <div class="container mt-3 ">
                <div class="row">
                    <div class="col-10 m-auto">
                        <div class="card">
                            <div class="card-body py-5 shadow-lg">
                                <div class="row d-flex flex-row gap-2">
                                    <div class="col-lg-4 col-md-12 col-sm-12 text-center ">
                                        <img width="300px" src="{{asset('backend/img/Lock.png')}}" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-7 col-md-12 col-sm-12 justify-content-end ">

                                        <form method="POST" action="{{ route('register') }}" class="form-floating">
                                            @csrf
                                    
                                            <div class="row">
                                                <!-- Full name -->      
                                                <div class="col-12">
                                                    <div class="form-floating login">
                                                        <input class="form-control @error('name') is-invalid @enderror border-0 rounded" type="text" name="name" id="floatingname" placeholder="name" required autocomplete="name">
                                                        <label for="floatingname">Enter your full name</label>
                                                        <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                                                    </div>
                                                </div>

                                                <!-- Email Address -->      
                                                <div class="col-12">
                                                    <div class="form-floating mt-3 login">
                                                        <input class="form-control @error('email') is-invalid @enderror border-0 rounded" type="text" name="email" id="floatingemail" placeholder="Email" required autocomplete="username">
                                                        <label for="floatingemail">Enter your email here</label>
                                                        <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                                                    </div>
                                                </div>
                                                <!-- Password -->
                                                <div class="col-12">
                                                    <div class="form-floating mt-3 login">
                                                        <input class="form-control @error('password') is-invalid @enderror border-0 rounded" type="password" name="password" id="floatingpassword" placeholder="password" required autocomplete="new-password">
                                                        <label for="floatingpassword">Enter your password</label>
                                                        <div class="invalid-feedback">@error('password') {{ $message }} @enderror</div>
                                                    </div>
                                                </div>
                                                 <!-- Password_confirmation -->
                                                <div class="col-12">
                                                    <div class="form-floating mt-3 login">
                                                        <input class="form-control @error('password_confirmation') is-invalid @enderror border-0 rounded" type="password" name="password_confirmation" id="floatingpassword_confirmation" placeholder="password_confirmation" required autocomplete="new-password">
                                                        <label for="floatingpassword_confirmation">Repeat your password</label>
                                                        <div class="invalid-feedback">@error('password_confirmation') {{ $message }} @enderror</div>
                                                    </div>
                                                </div>

                                                {{-- bouton --}}
                                                <div class="row mt-3">
                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                                        <a class="underline text-primary fw-bold flex-wrap text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                                            {{ __('Already registered ??') }}
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-12 text-end">
                                                        <x-primary-button class="justify-center rounded fs-5 fw-bold p-0">
                                                            {{ __('Register') }}
                                                        </x-primary-button>
                                                    </div>
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
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection