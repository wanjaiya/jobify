<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //

    protected $fillable = ['name'];


    protected $appends = [
        'delete_url',
    ];

     public function getDeleteUrlAttribute()
    {
        return route('candidate.skill.destroy', $this);
    }
}
