<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasPosition
{
    //
    /**
     * Boot the trait to auto-fill the position
     */
    protected static function bootHasPosition()
    {
        static::creating(function ($model) {
            // If position is already set, do nothing
            if (!empty($model->position)) {
                return;
            }

            // Get the max position of existing records
            $max = $model->newQuery()->max('position');

            // Assign next position
            $model->position = $max ? $max + 1 : 1;
        });
    }


    public function scopeOrdered(Builder $query, string $direction = 'asc'): Builder
    {
        return $query->orderBy('position', $direction);
    }
}
