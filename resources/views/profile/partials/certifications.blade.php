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
             <div class="card bg-background-secondary mb-4 experience-item">
                 <div class="flex items-start justify-between mb-4">
                     <div class="flex items-start gap-4 flex-1">
                         <div class="flex-1">

                             <h4 class="font-heading font-semibold text-text-primary mb-1" x-text="exp.field_of_study">
                             </h4>

                             <div class="text-text-secondary mb-2" x-text="exp.institution_name"></div>
                             <div class="flex flex-wrap items-center gap-4 text-sm text-text-secondary mb-3">
                                 <span class="flex items-center gap-1 font-caption">
                                     <span x-text="exp.start_date" class="flex items-center gap-1 font-caption"></span>
                                     –
                                     <span x-text="exp.present == 1 ? 'Present' : exp.end_date"
                                         class="flex items-center gap-1 font-caption"></span>
                                 </span>

                             </div>


                         </div>
                     </div>

                     <div class="flex gap-3">
                         <button @click="$dispatch('open-certification-form', exp)" class="text-text-secondary">
                             <i class="fa-solid fa-pencil"></i>
                         </button>
                         <button @click="openDeleteModal(exp)" class="text-text-primary">
                             <i class="fa-solid fa-trash"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </template>

         <div x-show="showDeleteModal" x-transition.opacity
             class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
             <div @click.outside="closeDeleteModal" class="bg-white rounded-lg w-full max-w-md p-6">
                 <h2 class="text-lg font-semibold text-gray-900">
                     Delete education
                 </h2>

                 <p class="text-sm text-gray-600 mt-2">
                     Are you sure you want to delete
                     <span class="font-medium" x-text="selectedEducation?.field_of_study"></span>?
                     This action cannot be undone.
                 </p>

                 <div class="flex justify-end gap-3 mt-6">
                     <button @click="closeDeleteModal" class="px-4 py-2 text-sm border rounded" :disabled="deleting">
                         Cancel
                     </button>

                     <button @click="deleteEducation" class="px-4 py-2 text-sm bg-red-600 text-white rounded"
                         :disabled="deleting">
                         <span x-show="!deleting">Delete</span>
                         <span x-show="deleting">Deleting...</span>
                     </button>
                 </div>
             </div>
         </div>

     </div>
 </div>


 <x-candidate-modal name="certification-form" :show="$errors->certificationForm->isNotEmpty()" id="candidate-modal-form">
     <div x-data="certificationForm()" x-on:open-certification-form.window="open($event.detail)">
         <h2 class="text-lg font-medium text-gray-900 dark:text-white pl-6 py-6"
             x-text="mode === 'create' ? 'Create Certification' : 'Edit Certification'">
         </h2>
         <form @submit.prevent="submit" class="p-6 pt-2">
             @csrf

             <template x-if="mode === 'edit'">
                 <input type="hidden" name="_method" value="PUT">
             </template>

             <!-- Name -->
             <div class="mt-4">
                 <x-input-label for="field_of_study" :value="__('Field of Study *')" />
                 <x-text-input id="field_of_study" class="block mt-1 w-full" type="text" name="field_of_study"
                     :value="old('field_of_study')" required autofocus x-model="form.field_of_study" placeholder="Field of Study" />
                 <x-input-error :messages="$errors->get('field_of_study')" class="mt-2" />
             </div>

             <!-- Email Address -->
             <div class="mt-4">
                 <x-input-label for="institution_name" :value="__('Institution Name *')" />
                 <x-text-input id="institution_name" class="block mt-1 w-full" type="text" name="institution_name"
                     :value="old('institution_name')" required x-model="form.institution_name" placeholder="Institution Name" />
                 <x-input-error :messages="$errors->get('institution_name')" class="mt-2" />
             </div>

             <!-- Password -->
             <div class="mt-4">
                 <x-input-label for="start_date" :value="__('Start Date *')" />
                 <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                     x-model="form.start_date" />
                 <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
             </div>

             <!-- Password Confirmation -->
             <div class="mt-4">
                 <x-input-label for="end_date" :value="__('Completion Date')" />
                 <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date"
                     x-model="form.end_date" />
                 <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
             </div>

             <div class="mt-4">
                 <label>
                     <input type="checkbox" name="present" value="1" x-model="form.present">
                     Currently Studying Here
                 </label>


             </div>
             <!-- Role -->
             <div class="mt-4">
                 <div class="flex items-center justify-end mt-4">
                     <button type="button" class="btn btn-ghost"
                         x-on:click="$dispatch('close-modal', '{{ 'certification-form' }}')" class="mr-3">
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
            function certificationList() {
                return {
                    certifications: [],
                    showDeleteModal: false,
                    deleting: false,
                    selectedCertification: null,

                    init() {
                        // initial load from backend
                        this.certifications = @json($certifications)
                    },

                    upsert(certification) {
                        const index = this.certifications.findIndex(
                            c => c.id === certification.id
                        )

                        if (index !== -1) {
                            // UPDATE
                            this.certifications.splice(index, 1, certification)
                        } else {
                            // CREATE (add newest on top)
                            this.certifications.unshift(certification)
                        }
                    },

                    openDeleteModal(certification) {
                        this.selectedCertification = certification
                        this.showDeleteModal = true
                    },

                    closeDeleteModal() {
                        this.showDeleteModal = false
                        this.selectedEducation = null
                    },

                    async deleteCertification() {
                        if (!this.selectedCertification) return
                        this.deleting = true

                        try {
                            const response = await fetch(
                                this.selectedCertification.delete_url, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': document
                                            .querySelector('meta[name="csrf-token"]')
                                            .getAttribute('content'),
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'Accept': 'application/json',
                                    },
                                }
                            )

                            if (!response.ok) {
                                throw new Error('Delete failed')
                            }

                            // Remove from UI AFTER success
                            this.certifications = this.certifications.filter(
                                c => c.id !== this.selectedCertification.id
                            )

                            this.closeDeleteModal()

                            showToast('Certification deleted successfully', 'success')

                        } catch (e) {
                            console.error(e)
                            alert('Failed to delete experience')
                        } finally {
                            this.deleting = false
                        }
                    }
                }
            }
        </script>

        <script>
            function certificationForm() {
                return {
                    mode: 'create',
                    action: '',
                    loading: false,
                    errors: {},

                    form: {
                        id: '',
                       
                        field_of_study: '',
                        institution_name: '',
                        start_date: '',
                        end_date: '',
                        present: false,
                       
                    },

                    open(data = null) {
                        this.errors = {}

                        if (data && Object.keys(data).length > 0) {
                            this.mode = 'edit'
                            this.action = '{{ route('candidate.certification.update') }}'
                            Object.assign(this.form, {
                                id: data.id,
                                field_of_study: data.field_of_study,
                                institution_name: data.institution_name,
                                start_date: data.start_date,
                                end_date: data.end_date,
                                present: data.present,
                                
                            })
                        } else {
                            this.mode = 'create'
                            this.action = '{{ route('candidate.certification.store') }}'
                            this.form = {
                                id: '',
                                field_of_study: '',
                                institution_name: '',
                                start_date: '',
                                end_date: '',
                                present: false
                            }
                        }

                        this.$dispatch('open-modal', 'certification-form')
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
                                    _method: this.mode === 'edit' ? 'PATCH' : 'POST'
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
                            this.$dispatch('close-modal', 'certification-form')

                            showToast(this.mode === 'create' ?
                                'Certification added successfully' :
                                'Certification updated successfully',
                                'success'
                            )

                            // emit refresh event
                            this.$dispatch('certification-saved', data)

                        } catch (e) {

                            console.log(e);

                            alert('Failed to save certification. Please try again.')
                        } finally {
                            this.loading = false
                        }
                    }
                }
            }
        </script>
    @endpush
