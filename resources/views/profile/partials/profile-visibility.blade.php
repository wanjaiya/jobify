<div class="card mb-6 bg-accent-50 border-accent-200">
            <div class="flex items-start gap-4">
                <img 
                    src="https://img.rocket.new/generatedImages/rocket_gen_img_13f11ddb5-1767120258830.png" 
                    alt="Visibility icon"
                    class="w-6 h-6 mt-1 flex-shrink-0"
                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                >
                <div class="flex-1">
                    <h3 class="font-heading font-semibold text-text-primary mb-2">Profile Visibility</h3>
                    <p class="text-sm text-text-secondary mb-4">Control who can view your profile and contact you</p>
                    <div class="flex flex-wrap gap-3">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="visibility" value="public" checked class="w-4 h-4 text-primary focus:ring-primary">
                            <span class="text-sm text-text-primary font-caption">Public - Visible to all employers</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="visibility" value="private" class="w-4 h-4 text-primary focus:ring-primary">
                            <span class="text-sm text-text-primary font-caption">Private - Only visible when applying</span>
                        </label>
                    </div>
                </div>
                <button class="btn btn-outline hidden md:inline-flex" id="preview-profile-btn">
                    <img 
                        src="https://img.rocket.new/generatedImages/rocket_gen_img_1ddef3c6b-1765225668015.png" 
                        alt="Preview icon"
                        class="w-5 h-5 mr-2"
                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                    >
                    Preview Profile
                </button>
            </div>
        </div>