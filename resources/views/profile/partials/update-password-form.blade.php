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
