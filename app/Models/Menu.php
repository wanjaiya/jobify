<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasPosition;
use App\Models\Traits\HasSlug;
use App\Models\Traits\HasStatus;

class Menu extends Model
{
    //

    use HasPosition, HasSlug, HasStatus;

    protected $fillable = ['name', 'slug', 'status', 'published_at', 'position', 'menu_type_id'];

    public function types(){
        return $this->belongsTo(MenuType::class, 'menu_type_id', 'id');
    }
}
