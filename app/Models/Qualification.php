<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasStatus;

class Qualification extends Model
{
    //
    use HasStatus;

    protected $table = 'qualifications';

    protected $fillable = [
        'name',
        'status',
    ];
}
