   <!-- Footer -->
    <footer class="bg-text-site text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/small-logo.png') }}" class="w-20"/>
                        <span class="text-xl font-heading font-bold text-text-secondary">{{ config('app.name') }}</span>
                    </div>
                    <p class="text-sm text-gray-400 mb-4">
                        Connecting talented professionals with amazing opportunities since 2020.
                    </p>
                    <div class="flex gap-4">
                        <a href="javascript:void(0)" class="hover:text-site transition-smooth"
                            aria-label="Facebook">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1de1c197c-1767382101482.png"
                                alt="Facebook icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </a>
                        <a href="javascript:void(0)" class="hover:text-site transition-smooth"
                            aria-label="Twitter">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_12bdddea3-1767674606771.png"
                                alt="Twitter icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </a>
                        <a href="javascript:void(0)" class="hover:text-site transition-smooth"
                            aria-label="LinkedIn">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1aafdc73a-1767674605828.png"
                                alt="LinkedIn icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </a>
                    </div>
                </div>

                <!-- For Job Seekers -->
                <div>
                    <h4 class="font-heading font-semibold mb-4">For Job Seekers</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="job_listings.html"
                                class="text-gray-400 hover:text-site transition-smooth">Browse Jobs</a></li>
                        <li><a href="user_registration.html"
                                class="text-gray-400 hover:text-site transition-smooth">Create Profile</a></li>
                        <li><a href="candidate_profile.html"
                                class="text-gray-400 hover:text-site transition-smooth">My Profile</a></li>
                        <li><a href="application_tracking.html"
                                class="text-gray-400 hover:text-site transition-smooth">Track Applications</a></li>
                    </ul>
                </div>

                <!-- For Employers -->
                <div>
                    <h4 class="font-heading font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="user_registration.html"
                                class="text-gray-400 hover:text-site transition-smooth">Post a Job</a></li>
                        <li><a href="user_registration.html"
                                class="text-gray-400 hover:text-site transition-smooth">Employer Dashboard</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-site transition-smooth">Pricing</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-site transition-smooth">Resources</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="font-heading font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-site transition-smooth">About Us</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-site transition-smooth">Contact</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-site transition-smooth">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-site transition-smooth">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-sm text-gray-400">
                <p> Copyright &copy; <?php echo date('Y'); ?> {{ config('app.name', 'Laravel') }} | All Rights Reserved.</p>
            </div>
        </div>
    </footer>