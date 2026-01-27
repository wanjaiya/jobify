<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkExperience;
use App\Services\WorkExperienceService;

class WorkExperienceController extends Controller
{
 public function __construct(
        private WorkExperienceService $workExperienceService,
    ) {}

    //
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


        $experience = $this->workExperienceService->createWorkExperience($request->user(), $data);

        return response()->json($experience->fresh());
    }


    public function experienceUpdate(Request $request)
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



        $experience = $this->workExperienceService->updateWorkExperience(
            $request->user(),
            $request->id,
            $data
        );


        return response()->json($experience->fresh());
    }

    public function experienceDestroy(WorkExperience $experience, Request $request)
    {
        // Security: ensure user owns the record
        $this->workExperienceService->deleteWorkExperience($experience, $request->user());

        return response()->json([
            'message' => 'Experience deleted successfully',
            'id' => $experience->id,
        ]);
    }
    
}
