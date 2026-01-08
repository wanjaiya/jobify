<x-guest-layout>

    <!-- Hero Section with Search -->
    <section class="relative bg-gradient-to-br from-primary-800 via-primary-700 to-primary-600 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="hero-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <circle cx="20" cy="20" r="1.5" fill="white" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hero-pattern)" />
            </svg>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                    Find Your Dream Job Today
                </h1>
                <p class="text-xl md:text-2xl text-primary-100 max-w-3xl mx-auto">
                    Connect with top employers and discover opportunities that match your skills and aspirations
                </p>
            </div>

            <!-- Search Form -->
            <div class="max-w-4xl mx-auto">
                <form class="bg-surface rounded-lg shadow-elevated p-4 md:p-6" id="job-search-form">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Job Title/Keywords -->
                        <div class="md:col-span-1">
                            <label for="search-keywords" class="label text-text-secondary">Job Title or Keywords</label>
                            <div class="relative">
                                <input type="text" id="search-keywords" class="input pl-12"
                                    placeholder="e.g. Software Engineer" autocomplete="off">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_194eeb027-1764656322629.png"
                                    alt="Search icon" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="md:col-span-1">
                            <label for="search-location" class="label text-text-secondary">Location</label>
                            <div class="relative">
                                <input type="text" id="search-location" class="input pl-12"
                                    placeholder="City, State or Remote" autocomplete="off">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                    alt="Location icon" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            </div>
                        </div>

                        <!-- Search Button -->
                        <div class="md:col-span-1 flex items-end">
                            <button type="submit" class="btn btn-primary w-full">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_194eeb027-1764656322629.png"
                                    alt="Search icon" class="w-5 h-5 mr-2"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                                Search Jobs
                            </button>
                        </div>
                    </div>

                    <!-- Popular Searches -->
                    <div class="mt-6 flex flex-wrap items-center gap-2">
                        <span class="text-sm text-text-secondary font-caption">Popular:</span>
                        <a href="job_listings.html"
                            class="text-sm text-primary hover:text-primary-700 transition-smooth">Remote Jobs</a>
                        <span class="text-text-tertiary">•</span>
                        <a href="job_listings.html"
                            class="text-sm text-primary hover:text-primary-700 transition-smooth">Software Engineer</a>
                        <span class="text-text-tertiary">•</span>
                        <a href="job_listings.html"
                            class="text-sm text-primary hover:text-primary-700 transition-smooth">Product Manager</a>
                        <span class="text-text-tertiary">•</span>
                        <a href="job_listings.html"
                            class="text-sm text-primary hover:text-primary-700 transition-smooth">Data Analyst</a>
                    </div>
                </form>
            </div>

            <!-- Trust Signals -->
            <div class="mt-16 flex flex-wrap justify-center items-center gap-8 text-primary-100">
                <div class="flex items-center gap-2">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_101a09604-1767674609374.png"
                        alt="SSL security badge" class="w-6 h-6"
                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    <span class="text-sm font-caption">SSL Secured</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1a49e72da-1767674605842.png"
                        alt="Verified employers badge" class="w-6 h-6"
                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    <span class="text-sm font-caption">Verified Employers</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b7a6860e-1765745957340.png"
                        alt="Trusted platform badge" class="w-6 h-6"
                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    <span class="text-sm font-caption">Trusted by 50K+ Users</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Categories -->
    <section class="py-16 bg-background-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-text-primary mb-4">
                    Browse by Category
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Explore opportunities across various industries and find the perfect match for your skills
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Technology -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center group-hover:bg-primary-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_194427f68-1765021265215.png"
                                alt="Technology category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Technology</h3>
                            <p class="text-sm text-text-secondary font-caption">2,847 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Healthcare -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-success-100 flex items-center justify-center group-hover:bg-success-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_131549f59-1766903086559.png"
                                alt="Healthcare category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Healthcare</h3>
                            <p class="text-sm text-text-secondary font-caption">1,523 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Finance -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-accent-100 flex items-center justify-center group-hover:bg-accent-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_188efb44b-1765068166099.png"
                                alt="Finance category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Finance</h3>
                            <p class="text-sm text-text-secondary font-caption">1,892 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Marketing -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-warning-100 flex items-center justify-center group-hover:bg-warning-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_17d64c58b-1767674616544.png"
                                alt="Marketing category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Marketing</h3>
                            <p class="text-sm text-text-secondary font-caption">1,234 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Design -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center group-hover:bg-primary-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e5c0f906-1767098219794.png"
                                alt="Design category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Design</h3>
                            <p class="text-sm text-text-secondary font-caption">987 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Sales -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-success-100 flex items-center justify-center group-hover:bg-success-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1df34dbf3-1764762957643.png"
                                alt="Sales category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Sales</h3>
                            <p class="text-sm text-text-secondary font-caption">1,456 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Education -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-accent-100 flex items-center justify-center group-hover:bg-accent-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_13827f42e-1765198346065.png"
                                alt="Education category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Education</h3>
                            <p class="text-sm text-text-secondary font-caption">765 jobs</p>
                        </div>
                    </div>
                </a>

                <!-- Engineering -->
                <a href="job_listings.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-lg bg-warning-100 flex items-center justify-center group-hover:bg-warning-200 transition-smooth">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1cdb6bfa5-1767472819387.png"
                                alt="Engineering category icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3
                                class="font-heading font-semibold text-text-primary group-hover:text-primary transition-smooth">
                                Engineering</h3>
                            <p class="text-sm text-text-secondary font-caption">2,134 jobs</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Jobs -->
    <section class="py-16 bg-background">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-text-primary mb-2">
                        Featured Jobs
                    </h2>
                    <p class="text-lg text-text-secondary">
                        Hand-picked opportunities from top companies
                    </p>
                </div>
                <a href="job_listings.html" class="hidden md:inline-flex btn btn-outline">
                    View All Jobs
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Job Card 1 -->
                <a href="job_details.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-background-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f8099e2c-1767674606213.png"
                                alt="TechCorp company logo" class="w-full h-full object-cover" loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="font-heading font-semibold text-lg text-text-primary group-hover:text-primary transition-smooth mb-1 text-ellipsis-1">
                                Senior Software Engineer
                            </h3>
                            <p class="text-text-secondary font-caption text-sm">TechCorp Inc.</p>
                        </div>
                        <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth"
                            aria-label="Bookmark job">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18091453b-1767629473180.png"
                                alt="Bookmark icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-primary">Full-time</span>
                        <span class="badge badge-success">Remote</span>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                alt="Location icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">San Francisco, CA</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18454f8fe-1767674615777.png"
                                alt="Salary icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">$120,000 - $180,000/year</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b5bc9f42-1766986569025.png"
                                alt="Time icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Posted 2 days ago</span>
                        </div>
                    </div>

                    <p class="text-sm text-text-secondary text-ellipsis-2 mb-4">
                        Join our innovative team to build cutting-edge software solutions. We're looking for experienced
                        engineers passionate about technology.
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border-light">
                        <div class="flex items-center gap-2">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f5e1da58-1767074237760.png"
                                alt="Verified badge" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-xs text-primary font-caption">Verified Employer</span>
                        </div>
                        <span class="text-xs text-text-tertiary font-caption">45 applicants</span>
                    </div>
                </a>

                <!-- Job Card 2 -->
                <a href="job_details.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-background-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d7f73fc6-1767674606208.png"
                                alt="DataFlow Solutions company logo" class="w-full h-full object-cover"
                                loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="font-heading font-semibold text-lg text-text-primary group-hover:text-primary transition-smooth mb-1 text-ellipsis-1">
                                Product Manager
                            </h3>
                            <p class="text-text-secondary font-caption text-sm">DataFlow Solutions</p>
                        </div>
                        <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth"
                            aria-label="Bookmark job">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18091453b-1767629473180.png"
                                alt="Bookmark icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-primary">Full-time</span>
                        <span class="badge badge-warning">Hybrid</span>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                alt="Location icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">New York, NY</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18454f8fe-1767674615777.png"
                                alt="Salary icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">$130,000 - $170,000/year</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b5bc9f42-1766986569025.png"
                                alt="Time icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Posted 1 day ago</span>
                        </div>
                    </div>

                    <p class="text-sm text-text-secondary text-ellipsis-2 mb-4">
                        Lead product strategy and development for our flagship data analytics platform. Work with
                        cross-functional teams to deliver value.
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border-light">
                        <div class="flex items-center gap-2">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f5e1da58-1767074237760.png"
                                alt="Verified badge" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-xs text-primary font-caption">Verified Employer</span>
                        </div>
                        <span class="text-xs text-text-tertiary font-caption">32 applicants</span>
                    </div>
                </a>

                <!-- Job Card 3 -->
                <a href="job_details.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-background-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_15ec6baf4-1766854309684.png"
                                alt="DesignHub Studio company logo" class="w-full h-full object-cover" loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="font-heading font-semibold text-lg text-text-primary group-hover:text-primary transition-smooth mb-1 text-ellipsis-1">
                                UX/UI Designer
                            </h3>
                            <p class="text-text-secondary font-caption text-sm">DesignHub Studio</p>
                        </div>
                        <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth"
                            aria-label="Bookmark job">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18091453b-1767629473180.png"
                                alt="Bookmark icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-primary">Full-time</span>
                        <span class="badge badge-success">Remote</span>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                alt="Location icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Austin, TX</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18454f8fe-1767674615777.png"
                                alt="Salary icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">$90,000 - $130,000/year</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b5bc9f42-1766986569025.png"
                                alt="Time icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Posted 3 days ago</span>
                        </div>
                    </div>

                    <p class="text-sm text-text-secondary text-ellipsis-2 mb-4">
                        Create beautiful, intuitive user experiences for web and mobile applications. Collaborate with
                        developers to bring designs to life.
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border-light">
                        <div class="flex items-center gap-2">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f5e1da58-1767074237760.png"
                                alt="Verified badge" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-xs text-primary font-caption">Verified Employer</span>
                        </div>
                        <span class="text-xs text-text-tertiary font-caption">28 applicants</span>
                    </div>
                </a>

                <!-- Job Card 4 -->
                <a href="job_details.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-background-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_17f54649f-1767674609275.png"
                                alt="CloudScale Systems company logo" class="w-full h-full object-cover"
                                loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="font-heading font-semibold text-lg text-text-primary group-hover:text-primary transition-smooth mb-1 text-ellipsis-1">
                                DevOps Engineer
                            </h3>
                            <p class="text-text-secondary font-caption text-sm">CloudScale Systems</p>
                        </div>
                        <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth"
                            aria-label="Bookmark job">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18091453b-1767629473180.png"
                                alt="Bookmark icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-primary">Full-time</span>
                        <span class="badge badge-success">Remote</span>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                alt="Location icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Seattle, WA</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18454f8fe-1767674615777.png"
                                alt="Salary icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">$110,000 - $160,000/year</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b5bc9f42-1766986569025.png"
                                alt="Time icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Posted 4 days ago</span>
                        </div>
                    </div>

                    <p class="text-sm text-text-secondary text-ellipsis-2 mb-4">
                        Build and maintain cloud infrastructure at scale. Automate deployments and ensure high
                        availability for mission-critical systems.
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border-light">
                        <div class="flex items-center gap-2">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f5e1da58-1767074237760.png"
                                alt="Verified badge" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-xs text-primary font-caption">Verified Employer</span>
                        </div>
                        <span class="text-xs text-text-tertiary font-caption">38 applicants</span>
                    </div>
                </a>

                <!-- Job Card 5 -->
                <a href="job_details.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-background-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1ea1162c3-1767263517797.png"
                                alt="MarketPro Agency company logo" class="w-full h-full object-cover" loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="font-heading font-semibold text-lg text-text-primary group-hover:text-primary transition-smooth mb-1 text-ellipsis-1">
                                Digital Marketing Manager
                            </h3>
                            <p class="text-text-secondary font-caption text-sm">MarketPro Agency</p>
                        </div>
                        <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth"
                            aria-label="Bookmark job">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18091453b-1767629473180.png"
                                alt="Bookmark icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-primary">Full-time</span>
                        <span class="badge badge-warning">Hybrid</span>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                alt="Location icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Boston, MA</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18454f8fe-1767674615777.png"
                                alt="Salary icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">$85,000 - $120,000/year</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b5bc9f42-1766986569025.png"
                                alt="Time icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Posted 5 days ago</span>
                        </div>
                    </div>

                    <p class="text-sm text-text-secondary text-ellipsis-2 mb-4">
                        Drive digital marketing strategy and execution across multiple channels. Lead campaigns that
                        deliver measurable business results.
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border-light">
                        <div class="flex items-center gap-2">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f5e1da58-1767074237760.png"
                                alt="Verified badge" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-xs text-primary font-caption">Verified Employer</span>
                        </div>
                        <span class="text-xs text-text-tertiary font-caption">52 applicants</span>
                    </div>
                </a>

                <!-- Job Card 6 -->
                <a href="job_details.html" class="card hover:shadow-elevated transition-smooth group">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 bg-background-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_16e8ccd0c-1766577684736.png"
                                alt="FinTech Innovations company logo" class="w-full h-full object-cover"
                                loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="font-heading font-semibold text-lg text-text-primary group-hover:text-primary transition-smooth mb-1 text-ellipsis-1">
                                Data Analyst
                            </h3>
                            <p class="text-text-secondary font-caption text-sm">FinTech Innovations</p>
                        </div>
                        <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth"
                            aria-label="Bookmark job">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18091453b-1767629473180.png"
                                alt="Bookmark icon" class="w-5 h-5"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-primary">Full-time</span>
                        <span class="badge badge-success">Remote</span>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                                alt="Location icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Chicago, IL</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18454f8fe-1767674615777.png"
                                alt="Salary icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">$75,000 - $105,000/year</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-text-secondary">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b5bc9f42-1766986569025.png"
                                alt="Time icon" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="font-caption">Posted 1 week ago</span>
                        </div>
                    </div>

                    <p class="text-sm text-text-secondary text-ellipsis-2 mb-4">
                        Transform data into actionable insights for financial services. Work with large datasets to
                        drive business intelligence and strategy.
                    </p>

                    <div class="flex items-center justify-between pt-4 border-t border-border-light">
                        <div class="flex items-center gap-2">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1f5e1da58-1767074237760.png"
                                alt="Verified badge" class="w-4 h-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-xs text-primary font-caption">Verified Employer</span>
                        </div>
                        <span class="text-xs text-text-tertiary font-caption">41 applicants</span>
                    </div>
                </a>
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="job_listings.html" class="btn btn-outline w-full sm:w-auto">
                    View All Jobs
                </a>
            </div>
        </div>
    </section>

    <!-- Quick Registration CTA -->
    <section class="py-16 bg-gradient-to-br from-primary-700 to-primary-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="cta-pattern" x="0" y="0" width="60" height="60"
                        patternUnits="userSpaceOnUse">
                        <circle cx="30" cy="30" r="2" fill="white" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#cta-pattern)" />
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- For Job Seekers -->
                <div class="card bg-surface">
                    <div class="flex items-start gap-4 mb-6">
                        <div
                            class="w-16 h-16 rounded-lg bg-primary-100 flex items-center justify-center flex-shrink-0">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1cf2ce2a6-1766766647863.png"
                                alt="Job seeker icon" class="w-8 h-8"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3 class="text-2xl font-heading font-bold text-text-primary mb-2">
                                For Job Seekers
                            </h3>
                            <p class="text-text-secondary">
                                Create your profile and start applying to thousands of opportunities
                            </p>
                        </div>
                    </div>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Build a professional profile with resume upload</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Get matched with relevant job opportunities</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Track your applications in one place</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Receive instant notifications for new matches</span>
                        </li>
                    </ul>

                    <a href="user_registration.html" class="btn btn-primary w-full">
                        Create Candidate Profile
                    </a>
                </div>

                <!-- For Employers -->
                <div class="card bg-surface">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-lg bg-accent-100 flex items-center justify-center flex-shrink-0">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_172dbc958-1766945065418.png"
                                alt="Employer icon" class="w-8 h-8"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h3 class="text-2xl font-heading font-bold text-text-primary mb-2">
                                For Employers
                            </h3>
                            <p class="text-text-secondary">
                                Find qualified candidates and build your dream team
                            </p>
                        </div>
                    </div>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Post unlimited job listings</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Access a pool of qualified candidates</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Manage applications efficiently</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1453bc1a1-1767615337028.png"
                                alt="Check icon" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            <span class="text-text-secondary">Get verified employer badge</span>
                        </li>
                    </ul>

                    <a href="user_registration.html" class="btn btn-primary w-full">
                        Create Employer Account
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-background-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-text-primary mb-4">
                    What Our Users Say
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Join thousands of satisfied job seekers and employers who found success with JobBoard Pro
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="card">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e2dbb942-1763294941853.png"
                                alt="Sarah Johnson profile photo" class="w-full h-full object-cover" loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-text-primary">Sarah Johnson</h4>
                            <p class="text-sm text-text-secondary font-caption">Software Engineer</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-3">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    </div>
                    <p class="text-text-secondary">
                        "Found my dream job within two weeks! The platform is intuitive and the job matching is spot-on.
                        Highly recommend to anyone job hunting."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="card">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e5f5dfa8-1763292069790.png"
                                alt="Michael Chen profile photo" class="w-full h-full object-cover" loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-text-primary">Michael Chen</h4>
                            <p class="text-sm text-text-secondary font-caption">HR Manager</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-3">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    </div>
                    <p class="text-text-secondary">
                        "As an employer, this platform has been invaluable. We've hired three excellent candidates in
                        the past month. The quality of applicants is outstanding."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="card">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_10458bf2c-1763293523905.png"
                                alt="Emily Rodriguez profile photo" class="w-full h-full object-cover" loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-text-primary">Emily Rodriguez</h4>
                            <p class="text-sm text-text-secondary font-caption">Marketing Director</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-3">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_184280168-1764677508307.png"
                            alt="Star rating" class="w-5 h-5"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    </div>
                    <p class="text-text-secondary">
                        "The application tracking feature is a game-changer. I can easily manage all my job applications
                        and never miss an opportunity. Love it!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-text-primary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="w-8 h-8" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="8" fill="url(#footer-logo-gradient)" />
                            <path d="M12 16h16M12 20h16M12 24h10" stroke="white" stroke-width="2.5"
                                stroke-linecap="round" />
                            <defs>
                                <linearGradient id="footer-logo-gradient" x1="0" y1="0"
                                    x2="40" y2="40" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#3B82F6" />
                                    <stop offset="1" stop-color="#1E40AF" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="text-xl font-heading font-bold">JobBoard Pro</span>
                    </div>
                    <p class="text-sm text-gray-400 mb-4">
                        Connecting talented professionals with amazing opportunities since 2020.
                    </p>
                    <div class="flex gap-4">
                        <a href="javascript:void(0)" class="hover:text-primary transition-smooth"
                            aria-label="Facebook">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1de1c197c-1767382101482.png"
                                alt="Facebook icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </a>
                        <a href="javascript:void(0)" class="hover:text-primary transition-smooth"
                            aria-label="Twitter">
                            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_12bdddea3-1767674606771.png"
                                alt="Twitter icon" class="w-6 h-6"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        </a>
                        <a href="javascript:void(0)" class="hover:text-primary transition-smooth"
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
                                class="text-gray-400 hover:text-primary transition-smooth">Browse Jobs</a></li>
                        <li><a href="user_registration.html"
                                class="text-gray-400 hover:text-primary transition-smooth">Create Profile</a></li>
                        <li><a href="candidate_profile.html"
                                class="text-gray-400 hover:text-primary transition-smooth">My Profile</a></li>
                        <li><a href="application_tracking.html"
                                class="text-gray-400 hover:text-primary transition-smooth">Track Applications</a></li>
                    </ul>
                </div>

                <!-- For Employers -->
                <div>
                    <h4 class="font-heading font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="user_registration.html"
                                class="text-gray-400 hover:text-primary transition-smooth">Post a Job</a></li>
                        <li><a href="user_registration.html"
                                class="text-gray-400 hover:text-primary transition-smooth">Employer Dashboard</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-primary transition-smooth">Pricing</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-primary transition-smooth">Resources</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="font-heading font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-primary transition-smooth">About Us</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-primary transition-smooth">Contact</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-primary transition-smooth">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)"
                                class="text-gray-400 hover:text-primary transition-smooth">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-center text-sm text-gray-400">
                <p>© 2026 JobBoard Pro. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


</x-guest-layout>
