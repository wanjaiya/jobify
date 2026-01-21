 <div class="mt-8">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-heading font-semibold text-text-primary">Certifications</h3>
            <button x-data x-on:click="$dispatch('open-certification-form')" class="btn btn-outline">
                Add Certification
            </button>
        </div>

        <!-- Certification Item -->
        <div x-data="certificationList()" @certification-saved.window="upsert($event.detail)">
            <template x-for="exp in certifications" :key="exp.id">
                <div class="card bg-background-secondary mb-4 certification-item">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-4 flex-1">
                            <div
                                class="w-12 h-12 rounded-lg bg-success-100 flex items-center justify-center flex-shrink-0">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1e2fa2561-1767094105279.png"
                                    alt="Certificate icon" class="w-6 h-6"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            </div>
                            <div class="flex-1">
                                <h4 class="font-heading font-semibold text-text-primary mb-1">AWS Certified Solutions
                                    Architect
                                    - Professional</h4>
                                <p class="text-text-secondary mb-2">Amazon Web Services</p>
                                <div class="flex items-center gap-2 text-sm text-text-secondary">
                                    <span class="flex items-center gap-1 font-caption">
                                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_153404168-1765124895393.png"
                                            alt="Calendar icon" class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                                        Issued: 03/2023
                                    </span>
                                    <span class="text-text-tertiary">•</span>
                                    <span class="font-caption">Expires: 03/2026</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 flex-shrink-0">
                            <button class="touch-target p-2 hover:bg-background rounded-lg transition-smooth"
                                aria-label="Edit certification">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_139f66eeb-1767354051337.png"
                                    alt="Edit icon" class="w-5 h-5"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            </button>
                            <button class="touch-target p-2 hover:bg-error-50 rounded-lg transition-smooth"
                                aria-label="Delete certification">
                                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d6ad7f1f-1766963844365.png"
                                    alt="Delete icon" class="w-5 h-5"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
