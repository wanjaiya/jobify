<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\CandidateSkill;
use Illuminate\Http\Request;
use App\Models\Skill;
use DB;

class SkillController extends Controller
{
    //

    public function index(Request $request)
    {
        $candidateId = $request->user()->id;

        $data = DB::table('skills')
                ->leftJoin('candidate_skills', function ($join) use ($candidateId) {
                    $join->on('skills.id', '=', 'candidate_skills.skill_id')
                        ->where('candidate_skills.user_id', $candidateId);
                })
                ->select(
                    'skills.id',
                    'skills.name',
                    'candidate_skills.proficiency_level'
                )
                ->get();


        return response()->json($data);
    }


    public function search(Request $request)
    {
        $query = $request->get('q');

        return Skill::where('name', 'like', "%{$query}%")
            ->distinct()
            ->limit(10)
            ->get();
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'skill_name' => 'required|string|max:255',
            'proficiency_level' => 'required|string|max:255',
        ]);

        $skill = Skill::firstOrCreate([
            'name' => $request->skill_name
        ]);


        

        $ck = $request->user()->skills()->create([
            'skill_id' => $skill->id,  
            'proficiency_level' => $request->proficiency_level
        ]);


        return response()->json($ck->fresh());
    }


    public function destroy(CandidateSkill $skill, Request $request)
    {


        abort_unless($skill->user_id === $request->user()->id, 403);

        $skill->delete();

        return response()->json([
            'message' => 'Skill deleted successfully',
            'id' => $skill->id,
        ]);
    }
}
