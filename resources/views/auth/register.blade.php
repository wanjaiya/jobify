<x-guest-layout>
    <!-- Session Status -->

  

    <div class="min-h-screen w-full">
        <div class="flex items-center justify-center">
            {{-- <div
                class="max-md:order-1 lg:col-span-3 md:h-screen w-full bg-[#000842] md:rounded-tr-xl md:rounded-br-xl lg:p-12 p-8">
                <img src="https://readymadeui.com/signin-image.webp"
                    class="lg:w-2/3 w-full h-full object-contain block mx-auto" alt="login-image" />
            </div> --}}

            <div class="lg:col-span-2 w-full p-8 max-w-xl max-md:max-w-xl mx-auto">
                  <x-auth-session-status class="mb-4" :status="session('status')" />
                <form action="{{ route('register') }}" method="POST" class="w-full">
                    @csrf
                    <div class="mb-8">
                        <h1 class="text-slate-900 text-3xl font-bold">Create an account</h1>
                        <p class="text-[15px] mt-6 text-slate-600">Already have an account? <a
                                href="{{ route('login') }}"
                                class="text-primary-600 font-medium hover:underline ml-1 whitespace-nowrap">Login here</a>
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="text-slate-900 text-[15px] font-medium mb-2 block">First Name</label>
                            <div class="relative flex items-center">


                                <input id="name"
                                    class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-primary-600 outline-none"
                                    type="text" name="first_name" :value="old('first_name')" required autofocus
                                    autocomplete="name" placeholder="Enter first name" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                                    <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                    <path
                                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                        data-original="#000000"></path>
                                </svg>
                               
                            </div>
                             <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

                        </div>
                         <div>
                            <label class="text-slate-900 text-[15px] font-medium mb-2 block">Last Name</label>
                            <div class="relative flex items-center">


                                <input id="name"
                                    class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-primary-600 outline-none"
                                    type="text" name="last_name" :value="old('last_name')" required autofocus
                                    autocomplete="name" placeholder="Enter Last name" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                                    <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                    <path
                                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                        data-original="#000000"></path>
                                </svg>
                               
                            </div>
                             <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

                        </div>
                        <div>
                            <label class="text-slate-900 text-[15px] font-medium mb-2 block">Email</label>
                            <div class="relative flex items-center">

                                <input id="email"
                                    class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-primary-600 outline-none"
                                    placeholder="Enter email" type="email" name="email" :value="old('email')"
                                    required autocomplete="username" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 682.667 682.667">
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                        <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                            d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                            data-original="#000000"></path>
                                        <path
                                            d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                            data-original="#000000"></path>
                                    </g>
                                </svg>
                                
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <label class="text-slate-900 text-[15px] font-medium mb-2 block">Phone Number</label>
                            <div class="relative flex items-center">

                                <input id="phone_number"
                                    class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-primary-600 outline-none"
                                    placeholder="Enter phone number" type="tel" name="phone_number"
                                    :value="old('phone_number')" required autocomplete="phone_number" />
                               

                            </div>
                             <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-[15px] font-medium mb-2 block">Password</label>
                            <div class="relative flex items-center">
                                <input name="password" type="password" required
                                    class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-primary-600 outline-none"
                                    placeholder="Enter password" />
                                <div class="input-group-append pass-view">
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-eye-slash" style="display: none;"></i>
                                </div>
                                
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div>
                            <label class="text-slate-900 text-[15px] font-medium mb-2 block">Password
                                Confirmation</label>
                            <div class="relative flex items-center">
                                <input name="password_confirmation" type="password" required
                                    class="w-full text-sm text-slate-900 bg-slate-100 focus:bg-transparent pl-4 pr-10 py-3.5 rounded-md border border-gray-200 focus:border-primary-600 outline-none"
                                    placeholder="Enter password confirmation" />
                                <div class="input-group-append pass-view pass-view-confirm">
                                    <i class="far fa-eye"></i>
                                    <i class="far fa-eye-slash" style="display: none;"></i>
                                </div>
                                
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                       
                    </div>

                    <div class="mt-12">
                        <button type="submit"
                            class="w-full py-2.5 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-primary hover:bg-primary-800 focus:outline-none cursor-pointer">
                            Register
                        </button>
                    </div>

                    <div class="my-4 flex items-center gap-4">
                        <hr class="w-full border-slate-300" />
                        <p class="text-sm text-slate-900 text-center">or</p>
                        <hr class="w-full border-slate-300" />
                    </div>

                    <a href="{{url('/auth/google')}}"
                        class="w-full flex items-center justify-center gap-4 py-2.5 px-6 text-[15px] font-medium tracking-wide text-slate-900 border border-slate-300 rounded-md bg-slate-50 hover:bg-slate-100 focus:outline-none cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="inline" viewBox="0 0 512 512">
                            <path fill="#fbbd00"
                                d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z"
                                data-original="#fbbd00" />
                            <path fill="#0f9d58"
                                d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z"
                                data-original="#0f9d58" />
                            <path fill="#31aa52"
                                d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z"
                                data-original="#31aa52" />
                            <path fill="#3c79e6"
                                d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z"
                                data-original="#3c79e6" />
                            <path fill="#cf2d48"
                                d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                                data-original="#cf2d48" />
                            <path fill="#eb4132"
                                d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z"
                                data-original="#eb4132" />
                        </svg>
                        Continue with google
                    </a>
                </form>
            </div>
        </div>

        @push('scripts')
            <script>
                const passwordField = document.querySelector('input[name="password"]');
                const passwordFieldConfirm = document.querySelector('input[name="password_confirmation"]')
                const toggleIcon = passwordField.nextElementSibling;
                const toggleIconConfirm = passwordFieldConfirm.nextElementSibling;

                toggleIcon.addEventListener('click', function() {
                    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                    const typeConfirm = passwordFieldConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordFieldConfirm.setAttribute('type', typeConfirm);
                });

                toggleIconConfirm.addEventListener('click', function() {
                    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                    const typeConfirm = passwordFieldConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordFieldConfirm.setAttribute('type', typeConfirm);
                });

                $(document).on('click', '.pass-view', function(event) {
                    var $open = $(this).children('.fa-eye');
                    var $close = $(this).children('.fa-eye-slash');

                    if (passwordField.getAttribute('type') === 'password') {

                        $close.show();
                        $open.hide();
                    } else {

                        $close.hide();
                        $open.show();
                    }

                });


                $(document).on('click', '.pass-view-confirm', function(event) {
                    var $open = $(this).children('.fa-eye');
                    var $close = $(this).children('.fa-eye-slash');

                    if (passwordFieldConfirm.getAttribute('type') === 'password') {

                        $close.show();
                        $open.hide();
                    } else {

                        $close.hide();
                        $open.show();
                    }

                });
            </script>
        @endpush

</x-guest-layout>
