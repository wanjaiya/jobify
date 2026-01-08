<header class="bg-surface shadow-card sticky top-0 z-navigation">
    <nav class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="landing_page.html" class="flex items-center space-x-3">
                    <svg class="w-10 h-10" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="8" fill="url(#logo-gradient)" />
                        <path d="M12 16h16M12 20h16M12 24h10" stroke="white" stroke-width="2.5"
                            stroke-linecap="round" />
                        <defs>
                            <linearGradient id="logo-gradient" x1="0" y1="0" x2="40"
                                y2="40" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1E40AF" />
                                <stop offset="1" stop-color="#3B82F6" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <span
                        class="text-2xl font-heading font-bold text-primary">{{ config('app.name', 'Jobify Kenya') }}</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            @guest
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/') }}"
                        class="text-primary font-medium hover:text-primary-700 transition-smooth">Home</a>
                    <a href="#" class="text-text-secondary hover:text-primary transition-smooth">Browse Jobs</a>
                    <a href="#" class="text-text-secondary hover:text-primary transition-smooth">For Employers</a>
                    <a href="{{ route('register') }}" class="btn btn-outline">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
                </div>
            @else
                <div class="hidden md:flex items-center space-x-8">
                    <a href="job_listings.html" class="text-text-secondary hover:text-primary transition-smooth">Browse
                        Jobs</a>
                    <a href="application_tracking.html" class="text-text-secondary hover:text-primary transition-smooth">My
                        Applications</a>
                    <a href="candidate_profile.html" class="text-primary font-medium">My Profile</a>
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
                </div>
            @endguest

            <!-- Mobile Menu Button -->
            <button class="md:hidden touch-target" id="mobile-menu-btn" aria-label="Toggle mobile menu">
                <svg class="w-6 h-6 text-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            @guest
                <div class="flex flex-col space-y-3">
                    <a href="{{ url('/') }}" class="text-primary font-medium py-2">Home</a>
                    <a href="#" class="text-text-secondary hover:text-primary py-2 transition-smooth">Browse Jobs</a>
                    <a href="#" class="text-text-secondary hover:text-primary py-2 transition-smooth">For
                        Employers</a>
                    <a href="{{ route('register') }}" class="btn btn-outline w-full">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn btn-primary w-full">Sign In</a>
                </div>
            @else
                <div class="flex flex-col space-y-3">
                    <a href="job_listings.html" class="text-text-secondary hover:text-primary py-2 transition-smooth">Browse
                        Jobs</a>
                    <a href="application_tracking.html"
                        class="text-text-secondary hover:text-primary py-2 transition-smooth">My Applications</a>
                    <a href="candidate_profile.html" class="text-primary font-medium py-2">My Profile</a>
                    <hr class="border-border-light">
                    <a href="candidate_profile.html"
                        class="text-text-secondary hover:text-primary py-2 transition-smooth">Profile Settings</a>
                    <a href="javascript:void(0)"
                        class="text-text-secondary hover:text-primary py-2 transition-smooth">Account Settings</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit(); "
                            class="text-error hover:text-error-700 py-2 transition-smooth cursor-pointer">
                            {{ __('Log Out') }} </a>
                    </form>
                </div>

            @endguest
        </div>
    </nav>
</header>
