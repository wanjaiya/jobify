<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class WorkExperience extends Model
{
    //

    protected $fillable = ['position', 'company_name', 'start_date', 'end_date', 'present', 'location', 'summary'];


    protected $casts = [
        'start_date' => 'date:d/m/Y',
        'end_date' => 'date: d/m/Y'
    ];

    protected $appends = [
        'update_url',
        'delete_url',
    ];

    public function getUpdateUrlAttribute()
    {
        return route('candidate.experience.update', $this);
    }

    public function getDeleteUrlAttribute()
    {
        return route('candidate.experience.destroy', $this);
    }
}
