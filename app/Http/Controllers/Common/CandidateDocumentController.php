<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\CandidateDocument;

class CandidateDocumentController extends Controller
{
    //


    public function index(Request $request)
    {
        $candidateId = $request->user()->id;

        $data = CandidateDocument::where('user_id', $candidateId)->get();

        return response()->json($data);
    }



    public function store(Request $request)
    {
        $request->validate([
            'files'   => 'required|array',
            'files.*' => 'file|max:5120|mimes:pdf,doc,docx'
        ]);

        $documents = [];

        foreach ($request->file('files') as $file) {
            $path = $file->store('documents', 'public');

            $documents[] = $request->user()->documents()->create([
                'document_name' => $file->getClientOriginalName(),
                'path'          => $path,
                'mime_type'     => $file->getMimeType(),
                'document_size'          => $file->getSize(),
            ]);
        }

        return response()->json($documents, 201);
    }


    public function destroy(CandidateDocument $document, Request $request)
    {
        // Security check (VERY important)
        if ($document->user_id !== $request->user()->id) {
            abort(403);
        }

        // Delete file from storage
        Storage::disk('public')->delete($document->path);

        // Delete DB record
        $document->delete();

        return response()->json([
            'message' => 'Document deleted successfully'
        ]);
    }
}
