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

                <div class="mb-4">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-session-error-status class="mb-4" :error="session('error')" />

                <div class="mb-4 text-md text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by entering the code we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                <form method="POST" action="{{ route('verify.account.process') }}" class="w-full">
                    @csrf

                    <!-- Verification Code -->
                    <div>

                        <label class="text-slate-900 text-[15px] font-medium mb-2 block">Verification Code</label>
                        <input id="verification_code" required
                            class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-blue-600 outline-none"
                            type="text" name="verification_code" :value="old('verification_code')" required autofocus
                            autocomplete="one-time-code" />
                        <x-input-error :messages="$errors->get('verification_code')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                            class="w-full py-2.5 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                            Verify Account
                        </button>
                    </div>

                    </div>

                    <div class="mt-6">
                            <div class="mt-6 text-sm text-gray-600">
                                {{ __('If you did not receive the verification code, click the button below to request another.') }}
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ route('verification.resend.form') }}"
                                    class="w-full py-2.5 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none cursor-pointer text-center">
                                    Resend Verification Code
                            </a>
                    </div>
            </div>
        </div>



</x-guest-layout>
