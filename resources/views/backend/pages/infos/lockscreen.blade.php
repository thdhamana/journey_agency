 @extends('backend.home')

 @section('content')

 @php 
 $user = Auth::user();
 @endphp
<!-- ============================================================== -->
    <!-- Start Page Content here -->
<!-- ============================================================== -->
    <!-- Start Content-->  
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10 col-md-8 m-auto">
                    <div class="card overflow-hidden p-4">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{asset('backend/img/Lock.png')}}" alt="" class="img-fluid rounded h-75 d-lg-flex align-items-center ">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand d-flex justify-content-center mb-2">
                                        <a href="#" class="logo-light">
                                            <img src="{{asset('backend/img/logo.png')}}" alt="logo" height="22">
                                        </a>
                                        <a href="#" class="logo-dark">
                                            <img src="{{asset('backend/img/logo-dark.png')}}" alt="dark logo" height="22">
                                        </a>
                                    </div>
                                    <div class="p-2 my-auto">
                                        <div class="text-center w-75 m-auto">
                                            <img src="{{asset('backend/img/users/avatar-1.jpg')}}" height="64" alt="user-image"
                                                class="rounded-circle img-fluid img-thumbnail avatar-xl">
                                            <h4 class="text-center mt-3 fw-bold fs-20">Hi {{$user->name}} </h4>
                                            <p class="text-muted mb-4">Enter your password to access the admin.</p>
                                        </div>

                                        <!-- form -->
                                        <form action="{{route('dashboard')}}">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="email" id="password" required placeholder="Enter your password" autocomplete="active " autofocus>
                                            </div>

                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit">
                                                    <i class="fa-solid fa-login-circle-fill me-1"></i> <span class="fw-bold">Log In</span> 
                                                </button>
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
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis btn btn-light">Back To <a href="{{route('admin.loginpage')}}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In <i class="fa fa-arrow-circle-right"></i> </b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@endsection