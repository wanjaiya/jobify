<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    //
    protected $table = 'certifications';

    protected $fillable = [
        'user_id',
        'field_of_study',
        'institution_name',
        'start_date',
        'end_date',
        'present'
    ];

       protected $casts = [
        'start_date' => 'date:d/m/Y',
        'end_date' => 'date: d/m/Y'
    ];
}
