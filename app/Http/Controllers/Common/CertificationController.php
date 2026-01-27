<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certification;
use App\Services\CertificationService;

class CertificationController extends Controller
{
    //
    public function __construct(
        private CertificationService $certificationService,
        
    ) {}


       public function store(Request $request)
    {
        // Implementation for storing education records
        $data = $request->validate([
           
            'field_of_study' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'present' => 'boolean',
          
        ]);


        $certification = $this->certificationService->store($request->user(), $data);

        return response()->json($certification->fresh());
    }


    public function update(Request $request)
    {
        // Implementation for updating education records
        $data = $request->validate([
            'field_of_study' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'present' => 'boolean',
           
        ]);


        $certification = $this->certificationService->update($request->user(), $request->id, $data);

        return response()->json($certification->fresh());
    }


    public function destroy(Certification $certification, Request $request)
    {
        // Security: ensure user owns the record
        $this->certificationService->delete($request->user(), $certification);

        return response()->json([
            'message' => 'Certification deleted successfully',
            'id' => $certification->id,
        ]);
    }
}
