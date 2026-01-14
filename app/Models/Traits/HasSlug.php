<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * Boot the trait to auto-generate slug on create
     */
    protected static function bootHasSlug()
    {
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = self::generateUniqueSlug($model->getSlugSource());
            }
        });

        static::updating(function ($model) {

            if ($model->getOriginal('status') === 'published') {
                return;
            }

            if (
                $model->status === 'draft' &&
                $model->isDirty('name')
            ) {
                $model->slug = self::generateUniqueSlug($model->name, $model->id);
            }
        });
    }

    /**
     * Generate a unique slug for the model
     */
    public static function generateUniqueSlug(string $source, ?int $ignoreId = null): string
    {
        $slug = Str::slug($source);
        $original = $slug;
        $count = 1;

        while (
            self::where('slug', $slug)
                ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$count}";
            $count++;
        }

        return $slug;
    }

    /**
     * Define which column is the source for slug
     * Default: 'title', override in model if different
     */
    public function getSlugSource(): string
    {
        return $this->name ?? '';
    }

    /**
     * Use slug for route model binding
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
