 <section class="bg-gradient-to-br from-primary-800 via-primary-700 to-primary-600 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div class="flex items-center gap-6">
                    <div class="relative">
                        <div class="w-24 h-24 rounded-full bg-surface overflow-hidden border-4 border-primary-100">
                            <img 
                                src="https://img.rocket.new/generatedImages/rocket_gen_img_1e2dbb942-1763294941853.png" 
                                alt="Sarah Johnson profile photo"
                                class="w-full h-full object-cover"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                            >
                        </div>
                        <button x-data x-on:click="$dispatch('open-pic-form')" class="absolute bottom-0 right-0 w-8 h-8 bg-primary rounded-full flex items-center justify-center shadow-elevated hover:bg-primary-700 transition-smooth touch-target" aria-label="Change profile photo">
                           <i class="fa-solid fa-pencil text-white"></i>
                        </button>
                    </div>
                    <div>
                        <h1 class="text-3xl font-heading font-bold text-white mb-2">{{ Auth::user()->name }}</h1>
                        <p class="text-primary-100 text-lg mb-2">Senior Software Engineer</p>
                        <div class="flex items-center gap-2 text-primary-100 text-sm">
                           
                            <span class="font-caption">{{auth()->user()->location }}</span>
                        </div>
                    </div>
                </div>

                <!-- Profile Completion -->
                <div class="card bg-surface w-full md:w-auto md:min-w-[280px]">

                

                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-medium text-text-primary font-caption">Profile Completion</span>
                        <span class="text-lg font-heading font-bold text-primary">{{auth()->user()->completion_percentage}} %</span>
                    </div>
                    <div class="w-full bg-background-secondary rounded-full h-3 overflow-hidden">
                        @php
                            $number
                        @endphp
                        <div class="bg-gradient-to-r from-primary to-accent h-full rounded-full transition-all duration-500" style="width: {{auth()->user()->completion_percentage}}%"></div>
                    </div>
                    <p class="text-xs text-text-secondary mt-3 font-caption">
                       
                        Complete {{ implode(',', auth()->user()->uncomplete) }} to reach 100%
                    </p>
                </div>
            </div>
        </div>
    </section>