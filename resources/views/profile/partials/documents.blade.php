<div class="mb-6">
                    <h3 class="text-xl font-heading font-semibold text-text-primary mb-4">Resume & Documents</h3>
                    
                    <!-- File Upload Area -->
                    <div class="card bg-background-secondary border-2 border-dashed border-border-neutral hover:border-primary transition-smooth mb-6" id="upload-area">
                        <div class="text-center py-12">
                            <img 
                                src="https://img.rocket.new/generatedImages/rocket_gen_img_1967dbfdc-1767623595298.png" 
                                alt="Upload cloud icon"
                                class="w-16 h-16 mx-auto mb-4"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                            >
                            <h4 class="font-heading font-semibold text-text-primary mb-2">Drop your resume here</h4>
                            <p class="text-sm text-text-secondary mb-4">or click to browse files</p>
                            <input type="file" id="resume-upload" class="hidden" accept=".pdf,.doc,.docx" multiple>
                            <button class="btn btn-primary" onclick="document.getElementById('resume-upload').click()">
                                <img 
                                    src="https://img.rocket.new/generatedImages/rocket_gen_img_1967dbfdc-1767623595298.png" 
                                    alt="Upload icon"
                                    class="w-5 h-5 mr-2"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                >
                                Choose File
                            </button>
                            <p class="text-xs text-text-tertiary mt-3 font-caption">Supported formats: PDF, DOC, DOCX (Max 5MB)</p>
                        </div>
                    </div>

                    <!-- Uploaded Documents List -->
                    <div class="space-y-3" id="documents-list">
                        <!-- Document Item 1 -->
                        <div class="card bg-surface flex items-center justify-between document-item">
                            <div class="flex items-center gap-4 flex-1">
                                <div class="w-12 h-12 rounded-lg bg-error-100 flex items-center justify-center flex-shrink-0">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_17465e1cf-1767278886563.png" 
                                        alt="PDF file icon"
                                        class="w-6 h-6"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-heading font-medium text-text-primary text-ellipsis-1">Sarah_Johnson_Resume_2026.pdf</h4>
                                    <div class="flex items-center gap-3 text-sm text-text-secondary mt-1">
                                        <span class="font-caption">2.4 MB</span>
                                        <span class="text-text-tertiary">•</span>
                                        <span class="font-caption">Uploaded 01/05/2026</span>
                                        <span class="badge badge-success ml-2">Primary Resume</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 flex-shrink-0">
                                <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth" aria-label="Preview document">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_1ddef3c6b-1765225668015.png" 
                                        alt="Preview icon"
                                        class="w-5 h-5"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </button>
                                <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth" aria-label="Download document">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_146cfa0c8-1764649038136.png" 
                                        alt="Download icon"
                                        class="w-5 h-5"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </button>
                                <button class="touch-target p-2 hover:bg-error-50 rounded-lg transition-smooth" aria-label="Delete document">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_1d6ad7f1f-1766963844365.png" 
                                        alt="Delete icon"
                                        class="w-5 h-5"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </button>
                            </div>
                        </div>

                        <!-- Document Item 2 -->
                        <div class="card bg-surface flex items-center justify-between document-item">
                            <div class="flex items-center gap-4 flex-1">
                                <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center flex-shrink-0">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_1e55edfb7-1767674606868.png" 
                                        alt="Document file icon"
                                        class="w-6 h-6"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-heading font-medium text-text-primary text-ellipsis-1">Cover_Letter_Template.docx</h4>
                                    <div class="flex items-center gap-3 text-sm text-text-secondary mt-1">
                                        <span class="font-caption">1.2 MB</span>
                                        <span class="text-text-tertiary">•</span>
                                        <span class="font-caption">Uploaded 12/28/2025</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 flex-shrink-0">
                                <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth" aria-label="Preview document">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_1ddef3c6b-1765225668015.png" 
                                        alt="Preview icon"
                                        class="w-5 h-5"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </button>
                                <button class="touch-target p-2 hover:bg-background-secondary rounded-lg transition-smooth" aria-label="Download document">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_146cfa0c8-1764649038136.png" 
                                        alt="Download icon"
                                        class="w-5 h-5"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </button>
                                <button class="touch-target p-2 hover:bg-error-50 rounded-lg transition-smooth" aria-label="Delete document">
                                    <img 
                                        src="https://img.rocket.new/generatedImages/rocket_gen_img_1d6ad7f1f-1766963844365.png" 
                                        alt="Delete icon"
                                        class="w-5 h-5"
                                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                </div>