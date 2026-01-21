<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    //

       public function educationStore(Request $request)
    {
        // Implementation for storing education records
        $data = $request->validate([
            'qualification_id' => 'required|integer',
            'field_of_study' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'present' => 'boolean',
            'location' => 'required|string',
            'summary' => 'nullable|string',
        ]);


        $data['present'] = $request->boolean('present');
        $data['end_date'] = $data['present'] ? null : $data['end_date'];

        $education = $request->user()
            ->education()
            ->create($data);

        return response()->json($education->fresh());
    }


    public function educationUpdate(Request $request)
    {
        // Implementation for updating education records
        $data = $request->validate([
            'qualification_id' => 'required|integer',
            'field_of_study' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'present' => 'boolean',
            'location' => 'required|string',
            'summary' => 'nullable|string',
        ]);


        $data['present'] = $request->boolean('present');
        $data['end_date'] = $data['present'] ? null : $data['end_date'];

        $request->user()->education()->where('id', $request->id)->update($data);

        $education = Education::where('id', $request->id)->first();

        return response()->json($education->fresh());
    }


    public function educationDestroy(Education $education, Request $request)
    {
        // Security: ensure user owns the record
        abort_unless(
            $education->user_id === $request->user()->id,
            403
        );

        $education->delete();

        return response()->json([
            'message' => 'Education deleted successfully',
            'id' => $education->id,
        ]);
    }
}
