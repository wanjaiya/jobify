<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasStatus
{

    public function publish(): void
    {
        if ($this->status !== 'published') {
            $this->update([
                'status' => 'published',
                'published_at' => now(),
            ]);
        }
    }

    public function unpublish(): void
    {
        if ($this->status === 'published') {
            $this->update([
                'status' => 'unpublished',
                'published_at' => null,
            ]);
        }
    }



    //

    /**
     * Scope to get only published records
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }

    /**
     * Optional: scope for drafts
     */
    public function scopeDraft(Builder $query): Builder
    {
        return $query->where('status', 'draft')
                     ->orderBy('created_at', 'desc');
    }

    /**
     * Optional: scope for unpublished
     */
    public function scopeUnpublished(Builder $query): Builder
    {
        return $query->where('status', 'unpublished');
    }
}
