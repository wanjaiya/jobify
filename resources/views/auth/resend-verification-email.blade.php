<x-guest-layout>
    <!-- Session Status -->



    <div class="min-h-screen w-full">
        <div class="grid lg:grid-cols-5 md:grid-cols-2 items-center gap-y-4 h-full">
            {{-- <div
                class="max-md:order-1 lg:col-span-3 md:h-screen w-full bg-[#000842] md:rounded-tr-xl md:rounded-br-xl lg:p-12 p-8">
                <img src="https://readymadeui.com/signin-image.webp"
                    class="lg:w-2/3 w-full h-full object-contain block mx-auto" alt="login-image" />
            </div> --}}

            <div class="lg:col-span-2 w-full p-8 max-w-xl max-md:max-w-xl mx-auto">


                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-session-error-status class="mb-4" :error="session('error')" />

                <div class="mb-4 text-md text-gray-600">
                    {{ __('If you did not receive the verification email, please enter your email address below to request another.') }}
                </div>
                

                <form method="POST" action="{{ route('verification.resend') }}" class="w-full">
                    @csrf

                    <div>

                        <label class="text-slate-900 text-[15px] font-medium mb-2 block">Email Address</label>
                        <input id="email" required
                            class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-blue-600 outline-none"
                            type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="one-time-code" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                            class="w-full py-2.5 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                            Resend Verification Code
                        </button>
                    </div>

                   
        </div>

</x-guest-layout>
