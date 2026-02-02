<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateDocument extends Model
{
    //

    protected $table = 'candidate_documents';

    protected $fillable = [
        'user_id',
        'document_name',
        'document_size',
        'primary_resume',
        'path',
        'mime_type'
    ];

    protected $casts = [
        'created_at' => 'date:d/m/Y',
        'updated_at' => 'date: d/m/Y'
    ];


    protected $appends = [
        'delete_url',
    ];


      public function getDeleteUrlAttribute()
    {
        return route('candidate.document.destroy', $this);
    }
}
