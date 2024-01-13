 @extends('backend.home')

 @section('content')

 @php 
 $user = Auth::user();
 @endphp
<!-- ============================================================== -->
    <!-- Start Page Content here -->
<!-- ============================================================== -->
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="profile-bg-picture"
                    style="background-image:url({{asset('backend/img/bg-profile.jpg')}})">
                    <span class="picture-bg-overlay"></span>
                    <!-- overlay -->
                </div>
                <!-- meta -->
                <div class="profile-user-box">
                    <div class="row">
                        <div class="col-sm-6 d-flex flex-column gap-2 ">
                            <div class="profile-user-img">
                                <img src="{{asset('backend/img/users/avatar-1.jpg')}}" alt="" class="avatar-lg rounded-circle">
                            </div>
                            <div class="mt-3">
                                <h4 class="mt-4 fs-17 ellipsis">{{auth()->user()->name}} </h4>
                                <p class="font-13"> User Experience Specialist</p>
                                <p class="text-muted mb-0"><small>Guinea Mamou</small></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end align-items-center gap-2">
                                <a class="btn btn-soft-danger" href="{{route('profile.edit')}}"><i class="fas fa-user fa-sm fa-fw mr-2 align-text-bottom me-1 fs-16 lh-1"></i> Edit Profile</a>
                                <a class="btn btn-soft-info" href="#"> <i class="ri-check-double-fill fs-18 me-1 lh-1"></i> Following</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card p-0">
                    <div class="card-body p-0">
                        <div class="profile-content">
                            <ul class="nav nav-underline nav-justified gap-0">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#aboutme" type="button" role="tab"
                                        aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#user-activities" type="button" role="tab"
                                        aria-controls="home" aria-selected="true"
                                        href="#user-activities">Activities</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#edit-profile" type="button" role="tab"
                                        aria-controls="home" aria-selected="true"
                                        href="#edit-profile">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#projects" type="button" role="tab"
                                        aria-controls="home" aria-selected="true"
                                        href="#projects">Projects</a></li>
                            </ul>

                            <div class="tab-content m-0 p-4">
                                <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="profile-desk">
                                                <h5 class="text-uppercase fs-17 text-dark">{{Auth::user()->name}} </h5>
                                                <div class="designation mb-4">PRODUCT DESIGNER (UX / UI / Visual Interaction)</div>
                                                <p class="text-muted fs-16">
                                                    I have 3 years of experience designing for the web, and
                                                    specialize
                                                    in the areas of user interface design, interaction design,
                                                    visual
                                                    design and prototyping. I’ve worked with notable startups
                                                    including
                                                    Pearl Street Software.
                                                </p>

                                                <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                                <table class="table table-condensed mb-0 border-top table table-bordered table-hover ">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Url</th>
                                                            <td>
                                                                <a href="#" class="ng-binding"> www.example.com </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email</th>
                                                            <td>
                                                                <a href="#" class="ng-binding">{{Auth::user()->email}} </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Phone</th>
                                                            <td class="ng-binding">+224 623 22 91 88/ +224 629 72 26 33</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Git</th>
                                                            <td>
                                                                <a href="" class="ng-binding">
                                                                    dialloth9188@git
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div> <!-- end profile-desk -->
                                        </div>
                                    </div>
                                </div> <!-- about-me -->

                                <!-- Activities -->
                                <div id="user-activities" class="tab-pane">
                                    <div class="card timeline-2">
                                       <div class="card-body">
                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">5 minutes ago</div>
                                                    <p><strong><a href="#" class="text-info">{{auth()->user()->name}} </a></strong>Uploaded a photo</p>
                                                    <img src="{{asset('backend/img/small/small-3.jpg')}}" alt="" height="40" width="60" class="rounded-1">
                                                    <img src="{{asset('backend/img/small/small-4.jpg')}}" alt="" height="40" width="60" class="rounded-1">
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">30 minutes ago</div>
                                                    <p>
                                                        <a href="#" class="text-info">Lorem</a> commented your post.
                                                    </p>
                                                    <p>
                                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">59 minutes ago</div>
                                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting
                                                        with<a href="#" class="text-success">John Doe</a>.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">5 minutes ago</div>
                                                    <p><strong><a href="#" class="text-info">John
                                                                Doe</a></strong> Uploaded 2 new photos</p>
                                                    <img src="{{asset('backend/img/small/small-2.jpg')}}" alt=""
                                                        height="40" width="60" class="rounded-1">
                                                    <img src="{{asset('backend/img/small/small-1.jpg')}}" alt=""
                                                        height="40" width="60" class="rounded-1">
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">30 minutes ago</div>
                                                    <p><a href="#" class="text-info">Lorem</a> commented your
                                                        post.
                                                    </p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit.
                                                            Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="time-item">
                                                <div class="item-info ms-3 mb-3">
                                                    <div class="text-muted">59 minutes ago</div>
                                                    <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>

                                 <!-- settings -->
                                <div id="edit-profile" class="tab-pane">
                                    <div class="user-profile-content">
                                        {{-- update profile --}}
                                        <div class="card-body">
                                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                    <div class="max-w-xl">
                                                        <section class="col-10 m-auto">
                                                            <header>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h2 class="text-lg font-medium text-gray-900 fs-2">
                                                                            {{ __('Profile Information') }}
                                                                        </h2>
                                                                    </div>
                                                                    <div class="col-6 text-end">
                                                                        <a class="btn btn-secondary" href="{{route('dashboard')}}">Return to Dashboard <i class="fa fa-arrow-alt-circle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <p class="mt-1 text-sm text-gray-600 fs-5">
                                                                    {{ __("Update your account's profile information and email address.") }}
                                                                </p>
                                                            </header>

                                                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                                                @csrf
                                                            </form>

                                                            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                                                @csrf
                                                                @method('patch')

                                                                <div>
                                                                    <x-input-label for="name" :value="__('Name')" />
                                                                    <x-text-input id="name" name="name" type="text" class="form-control w-full my-2" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                                </div>

                                                                <div>
                                                                    <x-input-label for="email" :value="__('Email')" />
                                                                    <x-text-input id="email" name="email" type="email" class="form-control w-full my-2" :value="old('email', $user->email)" required autocomplete="username" />
                                                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                                        <div>
                                                                            <p class="text-sm mt-2 text-gray-800">
                                                                                {{ __('Your email address is unverified.') }}

                                                                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                                    {{ __('Click here to re-send the verification email.') }}
                                                                                </button>
                                                                            </p>

                                                                            @if (session('status') === 'verification-link-sent')
                                                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                                                </p>
                                                                            @endif
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                                <div class="flex items-center gap-4">
                                                                    <div class="row m-auto">
                                                                        <x-primary-button class="fs-5 justify-center rounded mt-1 p-0">
                                                                            {{ __('Save') }}
                                                                        </x-primary-button>
                                                                    </div>
                                                                    @if (session('status') === 'profile-updated')
                                                                        <p
                                                                            x-data="{ show: true }"
                                                                            x-show="show"
                                                                            x-transition
                                                                            x-init="setTimeout(() => show = false, 2000)"
                                                                            class="text-sm text-gray-600"
                                                                        >{{ __('Saved.') }}</p>
                                                                    @endif
                                                                </div>
                                                            </form>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{--update password --}}
                                        <div class="card-body">
                                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                                <div class="card-body p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                    <div class="card-body max-w-xl">
                                                        <section class="col-10 m-auto">
                                                            <header>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h2 class="text-lg font-medium text-gray-900 fs-2">
                                                                            {{ __('Update Password') }}
                                                                        </h2>
                                                                    </div>
                                                                    <div class="col-6 text-end">
                                                                        <a class="btn btn-secondary" href="{{route('dashboard')}}">Return to Dashboard <i class="fa fa-arrow-alt-circle-right"></i></a>
                                                                    </div>
                                                                </div>

                                                                <p class="my-2 text-sm text-gray-600 fs-5">
                                                                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                                                </p>
                                                            </header>

                                                            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                                                @csrf
                                                                @method('put')

                                                                <div>
                                                                    <x-input-label for="current_password" :value="__('Current Password')" />
                                                                    <x-text-input id="current_password" name="current_password" type="password" class="my-2 block form-control w-full" autocomplete="current-password" />
                                                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                                </div>

                                                                <div>
                                                                    <x-input-label for="password" :value="__('New Password')" />
                                                                    <x-text-input id="password" name="password" type="password" class="my-2 block form-control w-full" autocomplete="new-password" />
                                                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                                </div>

                                                                <div>
                                                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="my-2 block form-control w-full" autocomplete="new-password" />
                                                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                                </div>

                                                                <div class="flex items-center gap-4">
                                                                    <div class="row m-auto">
                                                                        <x-primary-button class="fs-5 justify-center rounded mt-1 p-0">
                                                                            {{ __('Save') }}
                                                                        </x-primary-button>
                                                                    </div>

                                                                    @if (session('status') === 'password-updated')
                                                                        <p
                                                                            x-data="{ show: true }"
                                                                            x-show="show"
                                                                            x-transition
                                                                            x-init="setTimeout(() => show = false, 2000)"
                                                                            class="text-sm text-gray-600"
                                                                        >{{ __('Saved.') }}</p>
                                                                    @endif
                                                                </div>
                                                            </form>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>  
                                            
                                        </div>     

                                        {{--delete account--}}
                                        <div class="card-body">
                                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                    <div class="max-w-xl">
                                                        <section class="space-y-6 col-10 m-auto">
                                                            <header>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h2 class="text-lg font-medium text-gray-900 fs-2">
                                                                            {{ __('Delete Account') }}
                                                                        </h2>
                                                                    </div>
                                                                    <div class="col-6 text-end">
                                                                        <a class="btn btn-secondary" href="{{route('dashboard')}}">Return to Dashboard <i class="fa fa-arrow-alt-circle-right"></i></a>
                                                                    </div>
                                                                </div>

                                                                <p class="mt-1 text-sm text-gray-600 fs-5">
                                                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                                                                </p>
                                                            </header>

                                                            <div class="row m-auto">
                                                                <x-danger-button class="fs-5 justify-center rounded mt-1 p-0"
                                                                    x-data=""
                                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}
                                                                </x-danger-button>
                                                            </div>
                                                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                                                    @csrf
                                                                    @method('delete')

                                                                    <h2 class="text-lg font-medium text-gray-900">
                                                                        {{ __('Are you sure you want to delete your account?') }}
                                                                    </h2>

                                                                    <p class="mt-1 text-sm text-gray-600">
                                                                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                                                    </p>

                                                                    <div class="mt-6">
                                                                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                                                                        <x-text-input
                                                                            id="password"
                                                                            name="password"
                                                                            type="password"
                                                                            class="mt-1 block w-3/4"
                                                                            placeholder="{{ __('Password') }}"
                                                                        />

                                                                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                                                    </div>

                                                                    <div class="mt-6 flex justify-end">
                                                                        <x-secondary-button x-on:click="$dispatch('close')">
                                                                            {{ __('Cancel') }}
                                                                        </x-secondary-button>

                                                                        <x-danger-button class="ml-3">
                                                                            {{ __('Delete Account') }}
                                                                        </x-danger-button>
                                                                    </div>
                                                                </form>
                                                            </x-modal>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                    </div>
                                </div>

                                <!-- profile -->
                                <div id="projects" class="tab-pane">
                                    <div class="row m-t-10">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Project Name</th>
                                                            <th>Start Date</th>
                                                            <th>Due Date</th>
                                                            <th>Status</th>
                                                            <th>Assign</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Velonic Admin</td>
                                                            <td>01/01/2015</td>
                                                            <td>07/05/2015</td>
                                                            <td><span class="badge bg-info">Work
                                                                    in Progress</span></td>
                                                            <td>Techzaa</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Velonic Frontend</td>
                                                            <td>01/01/2015</td>
                                                            <td>07/05/2015</td>
                                                            <td><span
                                                                    class="badge bg-success">Pending</span>
                                                            </td>
                                                            <td>Techzaa</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Velonic Admin</td>
                                                            <td>01/01/2015</td>
                                                            <td>07/05/2015</td>
                                                            <td><span class="badge bg-pink">Done</span>
                                                            </td>
                                                            <td>Techzaa</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Velonic Frontend</td>
                                                            <td>01/01/2015</td>
                                                            <td>07/05/2015</td>
                                                            <td><span class="badge bg-purple">Work
                                                                    in Progress</span></td>
                                                            <td>Techzaa</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Velonic Admin</td>
                                                            <td>01/01/2015</td>
                                                            <td>07/05/2015</td>
                                                            <td><span class="badge bg-warning">Coming
                                                                    soon</span></td>
                                                            <td>Techzaa</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

    </div>
    <!-- end row -->
     
 @endsection