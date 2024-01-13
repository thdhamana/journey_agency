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
