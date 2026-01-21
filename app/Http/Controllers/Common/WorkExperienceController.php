<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkExperience;

class WorkExperienceController extends Controller
{
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
            'end_date' => 'nullable|date',
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

    public function experienceDestroy(WorkExperience $experience, Request $request)
    {
        // Security: ensure user owns the record
        abort_unless(
            $experience->user_id === $request->user()->id,
            403
        );

        $experience->delete();

        return response()->json([
            'message' => 'Experience deleted successfully',
            'id' => $experience->id,
        ]);
    }
    
}
