<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/costom.css')}}" rel="stylesheet">
</head>

<body>

    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="form-floating">
            @csrf

            <!-- Email Address -->

            <div class="form-floating login">
                <input class="form-control @error('email') is-invalid @enderror border-0 rounded" type="text" name="email" id="floatingemail" placeholder="Email" required autocomplete="current-email">
                <label for="floatingemail">Enter your email here</label>
                <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
            </div>
            <!-- Password -->
            <div class="form-floating mt-3 login">
                <input class="form-control @error('password') is-invalid @enderror border-0 rounded" type="password" name="password" id="floatingpassword" placeholder="password" required autocomplete="current-password">
                <label for="floatingpassword">Enter your password</label>
                <div class="invalid-feedback">@error('password') {{ $message }} @enderror</div>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-control rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

</body>

</html>