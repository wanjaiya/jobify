<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasPosition;
use App\Models\Traits\HasSlug;
use App\Models\Traits\HasStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    //

    use HasPosition, HasSlug, HasStatus;

    protected $fillable = ['name', 'slug', 'status', 'published_at', 'position', 'menu_type_id'];


    protected $cast = [
        'published_at' => 'timestamp'
    ];

    public function types(): BelongsTo
    {
        return $this->belongsTo(MenuType::class , 'menu_type_id', 'id');
    }
}
