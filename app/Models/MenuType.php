<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasStatus;
use App\Models\Traits\HasSlug;

class MenuType extends Model
{
    //

    use HasStatus, HasSlug;

    protected $fillable = ['name', 'slug', 'status', 'published_at'];

    protected $casts = [
        'published_at' => "timestamp"
    ];
}
