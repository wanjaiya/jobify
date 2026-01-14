<header class="bg-surface shadow-card sticky top-0 z-navigation">
    <nav class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-24">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('/images/logo.png') }}" class="h-24 w-auto" />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center sm:space-x-3 md:space-x-8 ">


                @foreach (mainMenu() as $menu)
                    <a href="#"
                        class="text-text-secondary  hover:text-primary-700 transition-smooth">{{ $menu->name }}</a>
                @endforeach

                @guest
                    <a href="{{ route('register') }}"
                        class="btn border-primary border hover:bg-primary-700 hover:text-white">Sign Up</a>
                    <a href="{{ route('login') }}"
                        class="btn bg-primary text-white border border-primary hover:bg-primary-700">Sign In</a>
                @else
                    <div class="relative group">
                        <button
                            class="flex items-center gap-2 text-text-secondary hover:text-primary transition-smooth touch-target"
                            aria-label="User menu">
                            <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_16672fd44-1766814712045.png"
                                    alt="User account icon" class="w-6 h-6"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            </div>
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_121899370-1764634756035.png"
                                alt="Dropdown arrow icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                        <div class="dropdown hidden group-hover:block absolute right-0 mt-2 w-48 py-2">
                            <a href="candidate_profile.html"
                                class="block px-4 py-2 text-sm text-text-primary hover:bg-background-secondary transition-smooth">Profile
                                Settings</a>
                            <a href="application_tracking.html"
                                class="block px-4 py-2 text-sm text-text-primary hover:bg-background-secondary transition-smooth">My
                                Applications</a>
                            <a href="javascript:void(0)"
                                class="block px-4 py-2 text-sm text-text-primary hover:bg-background-secondary transition-smooth">Account
                                Settings</a>
                            <hr class="my-2 border-border-light">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit(); "
                                    class="block px-4 py-2 text-sm text-error hover:bg-error-50 transition-smooth cursor-pointer">
                                    {{ __('Log Out') }} </a>

                            </form>
                        </div>
                    </div>

                @endguest

            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden touch-target" id="mobile-menu-btn" aria-label="Toggle mobile menu">
                <svg class="w-6 h-6 text-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-3">

                @foreach (mainMenu() as $menu)
                    <a href="#"
                        class="text-text-secondary hover:text-primary py-2 transition-smooth">{{ $menu->name }}</a>
                @endforeach

                @guest
                    <a href="{{ route('register') }}" class="btn btn-outline w-full">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn btn-primary w-full">Sign In</a>
                @else
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit(); "
                            class="text-error hover:text-error-700 py-2 transition-smooth cursor-pointer">
                            {{ __('Log Out') }} </a>
                    </form>


                @endguest
            </div>
        </div>
    </nav>
</header>
