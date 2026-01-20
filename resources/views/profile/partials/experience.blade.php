  <div class="mb-6">
      <div class="flex items-center justify-between mb-4">
          <h3 class="text-xl font-heading font-semibold text-text-primary">Work Experience</h3>
          {{-- <button class="btn btn-outline" id="add-experience-btn">
                            <img 
                                src="https://img.rocket.new/generatedImages/rocket_gen_img_1025baf95-1767056477370.png" 
                                alt="Add icon"
                                class="w-5 h-5 mr-2"
                                onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"
                            >
                            Add Experience
                        </button> --}}

          <button x-data x-on:click="$dispatch('open-experience-form')" class="btn btn-outline">
              Add Experience
          </button>


      </div>

      <!-- Experience Item 1 -->
      <div x-data="experienceList()" @experience-saved.window="upsert($event.detail)">
          <template x-for="exp in experiences" :key="exp.id">
              <div class="card bg-background-secondary mb-4 experience-item">
                  <div class="flex items-start justify-between mb-4">
                      <div class="flex items-start gap-4 flex-1">
                          <div class="flex-1">
                              <h4 class="font-heading font-semibold text-text-primary mb-1" x-text="exp.position"></h4>


                              <div class="text-text-secondary mb-2" x-text="exp.company_name"></div>


                              <div class="flex flex-wrap items-center gap-4 text-sm text-text-secondary mb-3">
                                  <span class="flex items-center gap-1 font-caption">
                                      <span x-text="exp.start_date" class="flex items-center gap-1 font-caption"></span>
                                      –
                                      <span x-text="exp.present == 1 ? 'Present' : exp.end_date"
                                          class="flex items-center gap-1 font-caption"></span>
                                  </span>
                                  <span class="flex items-center gap-1 font-caption" x-text="exp.location"></span>
                              </div>

                              <div class="text-sm text-text-secondary w-full" x-text="exp.summary"> </div>
                          </div>
                      </div>

                      <div class="flex gap-3">
                          <button @click="$dispatch('open-experience-form', exp)" class="text-text-secondary">
                              <i class="fa-solid fa-pencil"></i>
                          </button>

                          <button @click="remove(exp.id)" class="text-text-primary">
                              <i class="fa-solid fa-trash"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </template>

      </div>


  </div>

  <x-candidate-modal name="experience-form" :show="$errors->experienceForm->isNotEmpty()" id="candidate-modal-form">
      <div x-data="experienceForm()" x-on:open-experience-form.window="open($event.detail)">
          <h2 class="text-lg font-medium text-gray-900 dark:text-white pl-6 py-6"
              x-text="mode === 'create' ? 'Create Experience' : 'Edit Experience'">
          </h2>
          <form @submit.prevent="submit" class="p-6 pt-2">
              @csrf

              <template x-if="mode === 'edit'">
                  <input type="hidden" name="_method" value="PUT">
              </template>

              <!-- Name -->
              <div>
                  <x-input-label for="position" :value="__('Position *')" />
                  <x-text-input id="position" class="block mt-1 w-full" type="text" name="position"
                      :value="old('position')" required autofocus x-model="form.position" placeholder="Position" />
                  <x-input-error :messages="$errors->get('position')" class="mt-2" />
              </div>

              <!-- Email Address -->
              <div class="mt-4">
                  <x-input-label for="company_name" :value="__('Company Name *')" />
                  <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name"
                      :value="old('company_name')" required x-model="form.company_name" placeholder="Company Name" />
                  <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
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
                  <x-input-label for="end_date" :value="__('End Date')" />
                  <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date"
                      x-model="form.end_date" />
                  <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
              </div>

              <div class="mt-4">
                  <label>
                      <input type="checkbox" name="present" value="1" x-model="form.present">
                      I currently work here
                  </label>


              </div>

              <div class="mt-4">
                  <label for="location" class="label">Location *</label>
                  <div class="relative">
                      <input name="location" type="text" id="location" class="input" placeholder="City, State"
                          required x-model="form.location">
                  </div>
              </div>

              <div class="mt-4">
                  <label for="summary" class="label">Position Summary *</label>
                  <textarea name="summary" id="summary" class="textarea" rows="4" x-model="form.summary"></textarea>
              </div>

              <!-- Role -->
              <div class="mt-4">


                  <div class="flex items-center justify-end mt-4">


                      <button type="button" class="btn btn-ghost"
                          x-on:click="$dispatch('close-modal', '{{ 'experience-form' }}')" class="mr-3">
                          {{ __('Cancel') }}</button>


                      <button type="submit" :disabled="loading" class="btn btn-primary">
                          <span x-show="!loading">
                              <span x-text="mode === 'create' ? 'Save' : 'Update'"></span>
                          </span>
                          <span x-show="loading">Saving...</span>
                      </button>

                  </div>
          </form>
      </div>
  </x-candidate-modal>
