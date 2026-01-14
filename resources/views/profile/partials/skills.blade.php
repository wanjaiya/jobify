 <div class="mb-6">
                    <h3 class="text-xl font-heading font-semibold text-text-primary mb-4">Technical Skills</h3>
                    
                    <!-- Add Skill Input -->
                    <div class="mb-6">
                        <label for="skill-input" class="label">Add New Skill</label>
                        <div class="flex gap-3">
                            <div class="flex-1 relative">
                                <input 
                                    type="text" 
                                    id="skill-input" 
                                    class="input" 
                                    placeholder="Type skill name (e.g., JavaScript, React, Python)"
                                >
                                <!-- Autocomplete Suggestions -->
                                <div id="skill-suggestions" class="dropdown hidden mt-2 max-h-48">
                                    <button class="w-full text-left px-4 py-2 hover:bg-background-secondary transition-smooth text-sm">JavaScript</button>
                                    <button class="w-full text-left px-4 py-2 hover:bg-background-secondary transition-smooth text-sm">Java</button>
                                    <button class="w-full text-left px-4 py-2 hover:bg-background-secondary transition-smooth text-sm">React</button>
                                </div>
                            </div>
                            <select id="skill-level" class="input w-48">
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced" selected>Advanced</option>
                                <option value="expert">Expert</option>
                            </select>
                            <button class="btn btn-primary" id="add-skill-btn">
                                <img 
                                    src="https://img.rocket.new/generatedImages/rocket_gen_img_1025baf95-1767056477370.png" 
                                    alt="Add icon"
                                    class="w-5 h-5"
                                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                >
                            </button>
                        </div>
                        <p class="input-hint">Start typing to see suggestions. Select proficiency level before adding.</p>
                    </div>

                    <!-- Skills List -->
                    <div class="space-y-4" id="skills-container">
                        <!-- Programming Languages -->
                        <div>
                            <h4 class="font-heading font-medium text-text-primary mb-3">Programming Languages</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="skill-tag">
                                    <span class="font-caption">JavaScript</span>
                                    <span class="skill-level expert">Expert</span>
                                    <button class="skill-remove" aria-label="Remove JavaScript skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Python</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove Python skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">TypeScript</span>
                                    <span class="skill-level expert">Expert</span>
                                    <button class="skill-remove" aria-label="Remove TypeScript skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Java</span>
                                    <span class="skill-level intermediate">Intermediate</span>
                                    <button class="skill-remove" aria-label="Remove Java skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Frameworks & Libraries -->
                        <div>
                            <h4 class="font-heading font-medium text-text-primary mb-3">Frameworks & Libraries</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="skill-tag">
                                    <span class="font-caption">React</span>
                                    <span class="skill-level expert">Expert</span>
                                    <button class="skill-remove" aria-label="Remove React skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Node.js</span>
                                    <span class="skill-level expert">Expert</span>
                                    <button class="skill-remove" aria-label="Remove Node.js skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Express.js</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove Express.js skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Next.js</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove Next.js skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Cloud & DevOps -->
                        <div>
                            <h4 class="font-heading font-medium text-text-primary mb-3">Cloud & DevOps</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="skill-tag">
                                    <span class="font-caption">AWS</span>
                                    <span class="skill-level expert">Expert</span>
                                    <button class="skill-remove" aria-label="Remove AWS skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Docker</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove Docker skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Kubernetes</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove Kubernetes skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">CI/CD</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove CI/CD skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Databases -->
                        <div>
                            <h4 class="font-heading font-medium text-text-primary mb-3">Databases</h4>
                            <div class="flex flex-wrap gap-3">
                                <div class="skill-tag">
                                    <span class="font-caption">PostgreSQL</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove PostgreSQL skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">MongoDB</span>
                                    <span class="skill-level advanced">Advanced</span>
                                    <button class="skill-remove" aria-label="Remove MongoDB skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                                <div class="skill-tag">
                                    <span class="font-caption">Redis</span>
                                    <span class="skill-level intermediate">Intermediate</span>
                                    <button class="skill-remove" aria-label="Remove Redis skill">
                                        <img 
                                            src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png" 
                                            alt="Remove icon"
                                            class="w-4 h-4"
                                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>