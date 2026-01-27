 <div class="mb-6">
     <h3 class="text-xl font-heading font-semibold text-text-primary mb-4">Skills</h3>

     <!-- Add Skill Input -->
     <div x-data="skillList()" id="skills-list">
         <div class="mb-6">
             <label for="skill-input" class="label">Add New Skill</label>

             <form @submit.prevent="submit" class="flex gap-3">
                 <div class="flex-1 relative">
                     <input type="text" id="skill-input" class="input" x-model="query"
                         @input.debounce.300ms="search" placeholder="Type skill name (e.g., JavaScript, React, Python)">
                     <!-- Autocomplete Suggestions -->
                     <ul x-show="suggestions.length" class="absolute bg-white border w-full z-10">
                         <template x-for="skill in suggestions" :key="skill.id">
                             <li @click="selectSkill(skill)"
                                 class="p-2 cursor-pointer hover:bg-gray-100 flex justify-between">
                                 <span x-text="skill.name"></span>

                                 <!-- already selected -->
                                 <span x-show="existingSkillIds.includes(skill.id)" class="text-xs text-green-600">
                                     ✔ added
                                 </span>
                             </li>
                         </template>
                     </ul>
                 </div>
                 <select id="proficiency_level" class="input w-60" name="proficiency_level">
                     <option value="">Select Proficiency Level</option>
                     <option value="beginner">Beginner</option>
                     <option value="intermediate">Intermediate</option>
                     <option value="advanced" selected>Advanced</option>
                     <option value="expert">Expert</option>
                 </select>
                 <button class="btn btn-primary" type="submit">
                     Add Skill
                 </button>
             </form>

             <p class="input-hint">Start typing to see suggestions. Select proficiency level before adding.</p>
         </div>



         <div class="flex flex-wrap gap-3">

             <template x-for="exp in skills" :key="exp.id">

                 <div class="skill-tag">
                     <span class="font-caption" x-text="exp.name"></span>
                     <span class="skill-level"
                         :class="{
                             beginner: exp.proficiency_level === 'beginner',
                             intermediate: exp.proficiency_level === 'intermediate',
                             advanced: exp.proficiency_level === 'advanced',
                             expert: exp.proficiency_level === 'expert'
                         }"
                         x-text="exp.proficiency_level"></span>
                     <button @click="openDeleteModal(exp)">
                         <img src="https://img.rocket.new/generatedImages/rocket_gen_img_148fcdd0a-1766618026197.png"
                             alt="Remove icon" class="w-4 h-4"
                             onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                     </button>
                 </div>

             </template>
         </div>

         <div x-show="showDeleteModal" x-transition.opacity
             class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
             <div @click.outside="closeDeleteModal" class="bg-white rounded-lg w-full max-w-md p-6">
                 <h2 class="text-lg font-semibold text-gray-900">
                     Delete Skill
                 </h2>

                 <p class="text-sm text-gray-600 mt-2">
                     Are you sure you want to delete
                     <span class="font-medium" x-text="selectedskill?.skill_name"></span>?
                     This action cannot be undone.
                 </p>

                 <div class="flex justify-end gap-3 mt-6">
                     <button @click="closeDeleteModal" class="px-4 py-2 text-sm border rounded" :disabled="deleting">
                         Cancel
                     </button>

                     <button @click="deleteskill" class="px-4 py-2 text-sm bg-red-600 text-white rounded"
                         :disabled="deleting">
                         <span x-show="!deleting">Delete</span>
                         <span x-show="deleting">Deleting...</span>
                     </button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Skills List -->
     <div class="space-y-4" id="skills-container">

     </div>
 </div>

 @push('scripts')
     <script>
         function skillList() {
             return {
                 skills: [],
                 showDeleteModal: false,
                 deleting: false,
                 selectedskill: null,

                 query: '',
                 suggestions: [],
                 existingSkillIds: [],

                 init() {
                     fetch('/candidate/skills')
                         .then(r => r.json())
                         .then(data => {
                             this.existingSkillIds = data.map(s => s.id);
                             this.skills = data
                         });
                     
                 },

                 search() {
                     if (this.query.length < 2) {
                         this.suggestions = [];
                         return;
                     }

                     fetch(`/skills/search?q=${this.query}`)
                         .then(r => r.json())
                         .then(data => this.suggestions = data);
                 },

                 selectSkill(skill) {
                     if (this.existingSkillIds.includes(skill.id)) {
                         alert('Skill already added');
                         return;
                     }

                     this.selectedSkill = skill;
                     this.query = skill.skill_name;
                     this.suggestions = [];
                 },



                 load() {
                     fetch('/candidate/skills')
                         .then(r => r.json())
                         .then(data => this.skills = data)
                 },

                 submit() {
                     const skillName = document.getElementById('skill-input').value.trim();
                     const skillLevel = document.getElementById('proficiency_level').value;

                     const formData = new FormData();
                     formData.append('skill_name', skillName);
                     formData.append('proficiency_level', skillLevel);

                     fetch('/candidate/skills', {
                             method: 'POST',
                             headers: {
                                 'Accept': 'application/json',
                                 'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                             },
                             body: formData
                         })
                         .then(async response => {
                             if (!response.ok) {
                                 // Laravel validation error
                                 if (response.status === 422) {
                                     const errorData = await response.json();
                                     throw errorData.errors;
                                 }

                                 throw new Error('Something went wrong. Please try again.');
                             }

                             return response.json();
                         })
                         .then(() => {
                             this.load() // ✅ reload div
                             document.getElementById('skill-input').value = '';
                             document.getElementById('proficiency_level').value = ''; // reset form
                         })
                 },


                 openDeleteModal(exp) {
                     this.selectedskill = exp
                     this.showDeleteModal = true
                 },

                 closeDeleteModal() {
                     this.showDeleteModal = false
                     this.selectedskill = null
                 },

                 async deleteskill() {
                     if (!this.selectedskill) return
                     this.deleting = true

                     try {
                         const response = await fetch(
                             this.selectedskill.delete_url, {
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
                         this.skills = this.skills.filter(
                             e => e.id !== this.selectedskill.id
                         )

                         this.closeDeleteModal()

                         showToast('Skill deleted successfully', 'success')

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


     
 @endpush
