<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>


    <form method="post" action="{{ route('profiles.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
           <label class="text-slate-900 text-[15px] font-medium mb-2 block">Full Name</label>
            <input id="name" name="name" type="text" class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-blue-600 outline-none" :value="old('name', $user->name)" required autofocus autocomplete="name"  />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label class="text-slate-900 text-[15px] font-medium mb-2 block">Email</label>
            <input id="email" name="email" type="email" class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-blue-600 outline-none" :value="old('email', $user->email)" required autocomplete="username" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
