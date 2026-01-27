<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateSkill extends Model
{
    //
     protected $fillable = ['skill_id', 'proficiency_level', 'user_id'];

     public function cskill(){
        return $this->belongsTo(Skill::class);
     }
}
