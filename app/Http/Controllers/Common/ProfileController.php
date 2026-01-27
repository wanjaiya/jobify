<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\CandidateProfile;
use App\Models\Certification;
use App\Models\Education;
use App\Models\WorkExperience;
use App\Models\Qualification;
use App\Models\Skill;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $work = WorkExperience::where('user_id', $request->user()->id)->orderBy('updated_at', 'desc')->get();
        $educations = Education::with('qualifications')->where('user_id', $request->user()->id)->orderBy('updated_at', 'desc')->get();
        $certifications = Certification::where('user_id', $request->user()->id)->orderBy('updated_at', 'desc')->get();
        $skills = $request->user()->skills;
        

          foreach($educations as $education){
            $education->qualification_level_name = $education->qualifications->pluck('name')->toArray();
        }

        return view('profile.edit', [
            'user' => $request->user(),
            'experiences' => $work,
            'educations' => $educations,
            'certifications' => $certifications,
            'skills' => $skills,
            

        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {

        $request->user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'location' => $request->location
        ]);


        $candidate = CandidateProfile::where('user_id', $request->user()->id)->first();

        if ($candidate) {

            $candidate->update([
                'professional_headline' => $request->professional_headline,
                'professional_summary' => $request->professional_summary,
                'years_experience' => $request->years_experience,
                'salary_currency' => $request->salary_currency,
                'salary_expectation' => $request->salary_expectation,
                'linkedin' => $request->linkedin,
                'github ' => $request->github
            ]);
        } else {

            $candidate = CandidateProfile::create([
                'user_id' => $request->user()->id,
                'professional_headline' => $request->professional_headline,
                'professional_summary' => $request->professional_summary,
                'years_experience' => $request->years_experience,
                'salary_currency' => $request->salary_currency,
                'salary_expectation' => $request->salary_expectation,
                'linkedin' => $request->linkedin,
                'github ' => $request->github
            ]);
        }


        $request->user()->update([
            'profile_completed' => true
        ]);


        return response()->json([
            'message' => 'Profile Updated successfully',
            'data' => $request->user(),
        ], 201);
    }

  


 
}
