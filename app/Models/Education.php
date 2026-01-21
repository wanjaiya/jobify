<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table = 'education';

    protected $fillable = [
        'user_id',
        'qualification_id',
        'field_of_study',
        'institution_name',
        'start_date',
        'end_date',
        'present',
        'location',
        'summary'
    ];

       protected $casts = [
        'start_date' => 'date:d/m/Y',
        'end_date' => 'date: d/m/Y'
    ];

    protected $appends = [
        'update_url',
        'delete_url',
    ];

    public function qualifications() {
        return $this->belongsTo(Qualification::class,  'qualification_id', 'id');
    }

    public function getUpdateUrlAttribute()
    {
        return route('candidate.education.update', $this);
    }

    public function getDeleteUrlAttribute()
    {
        return route('candidate.education.destroy', $this);
    }
}
