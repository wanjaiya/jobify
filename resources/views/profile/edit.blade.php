<x-main-layout>
    <!-- Profile Header Section -->

    @include('profile.partials.header-profile-image')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Profile Visibility Settings -->
        @include('profile.partials.profile-visibility')

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


            // Preview Profile Button
            const previewProfileBtn = document.getElementById('preview-profile-btn');
            previewProfileBtn.addEventListener('click', () => {
                // Here you would open a modal or new page showing profile preview
                alert('Profile preview would open in a modal or new page');
            });

            // Add Experience/Education/Certification Buttons
            // document.getElementById('add-experience-btn').addEventListener('click', () => {
            //     alert('Add experience form would open in a modal');
            // });

            // document.getElementById('add-education-btn').addEventListener('click', () => {
            //     alert('Add education form would open in a modal');
            // });

            // document.getElementById('add-certification-btn').addEventListener('click', () => {
            //     alert('Add certification form would open in a modal');
            // });

            // Edit/Delete Buttons for Experience, Education, Documents
            document.addEventListener('click', (e) => {
                const editBtn = e.target.closest('[aria-label*="Edit"]');
                const deleteBtn = e.target.closest('[aria-label*="Delete"]');
                const previewBtn = e.target.closest('[aria-label*="Preview"]');
                const downloadBtn = e.target.closest('[aria-label*="Download"]');

                if (editBtn) {
                    alert('Edit form would open in a modal');
                }

                if (deleteBtn) {
                    if (confirm('Are you sure you want to delete this item?')) {
                        const item = deleteBtn.closest(
                            '.experience-item, .education-item, .certification-item, .document-item');
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.remove();
                            showSuccessToast();
                        }, 200);
                    }
                }

                if (previewBtn) {
                    alert('Document preview would open in a modal');
                }

                if (downloadBtn) {
                    alert('Document download would start');
                }
            });
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
