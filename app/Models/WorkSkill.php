<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkSkill extends Model
{
    //

    protected $fillable = [
        'name',
        'category',
    ];

    protected static function booted()
    {
        static::creating(function ($skill) {
            $skill->name = ucfirst(strtolower($skill->name));
        });
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class , 'job_skills')
            ->withPivot('level');
    }



}
