 <form id="personal-info-form">
     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
         <div>
             <label for="first-name" class="label">First Name *</label>
             <input name="first_name" type="text" id="first-name" class="input" value="{{ $user->first_name }}" required>
         </div>
         <div>
             <label for="last-name" class="label">Last Name *</label>
             <input name="last_name" type="text" id="last-name" class="input" value="{{ $user->last_name }}"
                 required>
         </div>
     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
         <div>
             <label for="email" class="label">Email Address *</label>
             <input type="email" id="email" class="input" value="{{ $user->email }}" readonly>
         </div>
         <div>
             <label for="phone" class="label">Phone Number</label>
             <input name="phone_number" type="tel" id="phone_number" class="input"
                 value="{{ $user->phone_number }}" placeholder="707-000000" required>
         </div>
     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
         <div>
             <label for="location" class="label">Location *</label>
             <div class="relative">
                 <input name="location" type="text" id="location" class="input pl-12" value="{{ $user->location }}"
                     placeholder="City, State" required>
                 <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11407ebac-1766822096581.png"
                     alt="Location icon" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5"
                     onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
             </div>
         </div>
         <div>
             <label for="linkedin" class="label">LinkedIn Profile</label>
             <input name="linkedin" type="url" id="linkedin" class="input" value=""
                 placeholder="linkedin.com/in/yourprofile">
         </div>

     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

         <div>
             <label for="github" class="label">Github Profile</label>
             <input name="github" type="url" id="github" class="input" value=""
                 placeholder="github.com/yourprofile">
         </div>
     </div>

     <div class="mb-6">
         <label for="headline" class="label">Professional Headline *</label>
         <input name="professional_headline" type="text" id="headline" class="input"
             value="Senior Software Engineer | Full-Stack Developer | Tech Lead"
             placeholder="e.g., Senior Software Engineer specializing in React and Node.js">
         <p class="input-hint">This appears at the top of your profile (max 100 characters)</p>
     </div>

     <div class="mb-6">
         <label for="summary" class="label">Professional Summary *</label>
         <textarea name="professional_summary" id="summary" class="textarea" rows="6">Experienced software engineer with 8+ years of expertise in full-stack development, specializing in React, Node.js, and cloud technologies. Proven track record of leading cross-functional teams and delivering scalable solutions for Fortune 500 companies. Passionate about clean code, mentoring junior developers, and staying current with emerging technologies.</textarea>
         <p class="input-hint">Highlight your key achievements and what makes you unique (500-1000 characters
             recommended)</p>
     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
         <div>
             <label for="years-experience" class="label">Years of Experience *</label>
             <select id="years-experience" class="input" required name="year_experience">
                 <option value="">Select experience level</option>
                 @foreach (\App\Models\CandidateProfile::getExperience() as $key => $value)
                     <option value={{ $value['id'] }}>{{ $value['name'] }}</option>
                 @endforeach
             </select>
         </div>
         <div>
             <label for="salary-expectation" class="label">Salary Expectation (USD)</label>

             <div class="relative flex items-center">

                 <div class="input-group-append currency-view">
                     <select id="years-experience" class="input" required name="salary_currency">
                         <option value="">Select Currency</option>
                         @foreach (\App\Models\CandidateProfile::getCurrencies() as $key => $value)
                             <option value={{ $value['id'] }}>{{ $value['name'] }}</option>
                         @endforeach
                     </select>
                 </div>

                 <input name="salary_expectation" type="text" id="salary-expectation" class="input"
                     value="$120,000 - $180,000" placeholder="e.g., $80,000 - $100,000">

             </div>

         </div>
     </div>

     <div class="flex justify-end gap-4">
         <button type="button" class="btn btn-ghost">Cancel</button>
         <button type="submit" class="btn btn-primary">
             <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1b2ddd32a-1767635531411.png"
                 alt="Save icon" class="w-5 h-5 mr-2"
                 onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
             Save Changes
         </button>
     </div>
 </form>
