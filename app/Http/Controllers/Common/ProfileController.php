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
use App\Models\WorkExperience;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $work = WorkExperience::where('user_id', $request->user()->id)->orderBy('updated_at', 'desc')->get();
        return view('profile.edit', [
            'user' => $request->user(),
            'experiences' => $work
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

    public function experienceStore(Request $request)
    {

        $data = $request->validate([
            'position' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'present' => 'boolean',
            'location' => 'required|string',
            'summary' => 'nullable|string',
        ]);

        $data['present'] = $request->boolean('present');
        $data['end_date'] = $data['present'] ? null : $data['end_date'];

        $experience = $request->user()
            ->experiences()
            ->create($data);

        return response()->json($experience->fresh());
    }


    public function experienceUpdate(Request $request)
    {

        $data = $request->validate([
            'position' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'present' => 'boolean',
            'location' => 'required|string',
            'summary' => 'nullable|string',
        ]);



        $data['present'] = $request->boolean('present');
        $data['end_date'] = $data['present'] ? null : $data['end_date'];


        $request->user()->experiences()->where('id', $request->id)->update($data);

        $experience = WorkExperience::where('id', $request->id)->first();


        return response()->json($experience->fresh());
    }

    public function experienceDestroy(WorkExperience $experience)
    {
        // Security: ensure user owns the record
        abort_unless(
            $experience->user_id === auth()->id(),
            403
        );

        $experience->delete();

        return response()->json([
            'message' => 'Experience deleted successfully',
            'id' => $experience->id,
        ]);
    }
}
