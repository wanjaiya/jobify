<x-main-layout>
    <!-- Profile Header Section -->

    @include('profile.partials.header-profile-image')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Profile Visibility Settings -->
        {{-- @include('profile.partials.profile-visibility') --}}

        <!-- Tabbed Interface -->
        <div class="card">
            <!-- Desktop Tabs -->
            @include('profile.partials.desktop-mobile-tabs')

            <!-- Tab Content: Personal Information -->
            <div class="tab-content active" id="personal-tab">
                @include('profile.partials.personal')
            </div>
            <!-- Tab Content: Experience -->
            <div class="tab-content hidden" id="experience-tab">
                @include('profile.partials.experience')
            </div>
            <!-- Tab Content: Education -->
            <div class="tab-content hidden" id="education-tab">
                @include('profile.partials.education')
            </div>

            <!-- Tab Content: Skills -->
            <div class="tab-content hidden" id="skills-tab">
                @include('profile.partials.skills')
            </div>

            <!-- Tab Content: Documents -->
            <div class="tab-content hidden" id="documents-tab">
                @include('profile.partials.documents')
            </div>



        </div>

        <!-- Quick Actions -->
        <div class="mt-8 flex flex-col sm:flex-row gap-4">
            <a href="job_listings.html" class="btn btn-primary flex-1 sm:flex-none">
                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_194eeb027-1764656322629.png"
                    alt="Search icon" class="w-5 h-5 mr-2"
                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                Browse Jobs
            </a>
            <a href="application_tracking.html" class="btn btn-outline flex-1 sm:flex-none">
                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_13ca38185-1765190592800.png"
                    alt="Applications icon" class="w-5 h-5 mr-2"
                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                View Applications
            </a>
        </div>
    </main>

    <x-candidate-modal name="pic-form" :show="$errors->picForm->isNotEmpty()" id="candidate-modal-form">
        <div x-data="picForm()" x-on:open-pic-form.window="open($event.detail)">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white pl-6 py-6" x-text="mode === 'create' ? 'Add Profile Picture' : 'Add Profile Picture'">
            </h2>
            <form @submit.prevent="submit" class="p-6 pt-2">
                @csrf

                <!-- Name -->
                <div class="text-center py-12">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1967dbfdc-1767623595298.png"
                        alt="Upload cloud icon" class="w-16 h-16 mx-auto mb-4"
                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    <h4 class="font-heading font-semibold text-text-primary mb-2">Drop your picture here</h4>
                    <p class="text-sm text-text-secondary mb-4">or click to browse files</p>
                    <input type="file" id="profile-pic" class="hidden" accept=".jpg,.png,.jpeg" name="profile-pic"
                        x-ref="fileInput"">
                    <button class="btn btn-primary">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1967dbfdc-1767623595298.png"
                            alt="Upload icon" class="w-5 h-5 mr-2"
                            onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                        Choose File
                    </button>
                    <p class="text-xs text-text-tertiary mt-3 font-caption">Supported formats: JPG, PNG, JPEG (Max 5MB)
                    </p>
                </div>

                <!-- Email Address -->


                <!-- Role -->
                <div class="mt-4">
                    <div class="flex items-center justify-end mt-4">


                        <button type="button" class="btn btn-ghost"
                            x-on:click="$dispatch('close-modal', '{{ 'pic-form' }}')" class="mr-3">
                            {{ __('Cancel') }}</button>


                        <button type="submit" :disabled="loading" class="btn btn-primary">
                            <span x-show="!loading">
                                <span x-text="mode === 'create' ? 'Save' : 'Update'"></span>
                            </span>
                            <span x-show="loading">Saving...</span>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </x-candidate-modal>


    @push('scripts')
        <script>
            const profileUpdateUrl = "{{ route('profiles.update') }}";
        </script>

        <script>
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Desktop Tab Switching
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetTab = button.getAttribute('data-tab');

                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'text-primary', 'border-primary');
                        btn.classList.add('text-text-secondary');
                    });
                    tabContents.forEach(content => content.classList.add('hidden'));

                    // Add active class to clicked button and show corresponding content
                    button.classList.add('active', 'text-primary', 'border-primary');
                    button.classList.remove('text-text-secondary');
                    document.getElementById(`${targetTab}-tab`).classList.remove('hidden');
                });
            });

            // Mobile Accordion Switching
            const accordionButtons = document.querySelectorAll('.mobile-accordion-btn');

            accordionButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetTab = button.getAttribute('data-tab');
                    const isActive = button.classList.contains('active');

                    // Close all accordions
                    accordionButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.add('hidden'));

                    // Open clicked accordion if it wasn't active
                    if (!isActive) {
                        button.classList.add('active');
                        document.getElementById(`${targetTab}-tab`).classList.remove('hidden');
                    }
                });
            });

            // Personal Info Form Submission
            const personalInfoForm = document.getElementById('personal-info-form');

            personalInfoForm.addEventListener('submit', async function(e) {
                e.preventDefault();

                const form = e.target;
                const formData = new FormData(form);
                formData.append('_method', 'PATCH'); // Laravel method spoofing

                try {
                    const response = await fetch(profileUpdateUrl, {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (!response.ok) {
                        let errors = '';
                        for (let field in data.errors) {
                            errors += `<p>${data.errors[field][0]}</p>`;
                        }
                        document.getElementById('formErrors').innerHTML = errors;
                        showToast('Validation failed', 'error');
                        return;
                    }


                    document.getElementById('formErrors').innerHTML = '';
                    showToast(data.message, 'success');

                    setTimeout(() => {
                        window.location.reload();
                    }, 1500); // wait for toast to show

                } catch (err) {
                    showToast('Network error', 'error');
                }
            });
        </script>

        <script>
            function picForm() {
                return {
                    mode: 'create',
                    action: '',
                    loading: false,
                    errors: {},

                    form: {
                        id: '',
                        profile_pic: '',

                    },

                    open(data = null) {
                        this.errors = {}
                        this.mode = 'create'
                        this.action = '{{ route('candidate.experience.store') }}'
                        this.form = {
                            id: '',
                            profile_pic: '',
                        }


                        this.$dispatch('open-modal', 'pic-form')
                    },

                    async submit() {
                        this.loading = true
                        this.errors = {}

                        try {
                            const response = await fetch(this.action, {
                                method: this.mode === 'edit' ? 'PATCH' : 'POST',
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document
                                        .querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content')
                                },
                                body: JSON.stringify({
                                    ...this.form,
                                    _method: 'POST'
                                })

                            })

                            if (!response.ok) {
                                if (response.status === 422) {
                                    const data = await response.json()
                                    this.errors = data.errors
                                    return
                                }
                                throw new Error('Something went wrong')
                            }

                            const data = await response.json()

                            // close modal
                            this.$dispatch('close-modal', 'pic-form')

                            showToast('Picture added successfully','success')

                            // emit refresh event
                            // this.$dispatch('experience-saved', data)

                        } catch (e) {

                            console.log(e);

                            alert('Failed to save experience')
                        } finally {
                            this.loading = false
                        }
                    }
                }
            }
        </script>



        <script>
            // Toast function
            function showToast(message, type = 'success') {
                const toast = document.getElementById('toast');
                const colors = {
                    success: 'bg-green-600',
                    error: 'bg-red-600'
                };
                toast.className = `fixed bottom-8 right-8 px-4 py-2 rounded-lg shadow text-white ${colors[type]}`;
                toast.textContent = message;
                toast.classList.remove('hidden');
                setTimeout(() => toast.classList.add('hidden'), 3000);
            }
        </script>
    @endpush
</x-main-layout>
