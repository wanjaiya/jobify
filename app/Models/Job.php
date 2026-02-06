<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    //
    protected $table = 'job_listings';

    protected $fillable = [
        'company_id',
        'created_by',
        'updated_by',
        'title',
        'slug',
        'summary',
        'description',
        'location_type',
        'location',
        'employment_type',
        'experience_level',
        'min_experience_years',
        'salary_min',
        'salary_max',
        'salary_currency',
        'salary_period',
        'salary_visible',
        'status',
        'is_featured',
        'featured_until',
        'views_count',
        'applications_count',
        'published_at',
        'expires_at',
    ];

    protected $casts = [
        'salary_visible' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
        'expires_at' => 'datetime',
        'featured_until' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($job) {
            if (!$job->slug) {
                $job->slug = static::generateUniqueSlug($job->title);
            }
        });

        static::updating(function ($job) {
            if ($job->isDirty('title')) {
                $job->slug = static::generateUniqueSlug($job->title, $job->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $id = null): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $counter = 1;

        while (static::where('slug', $slug)
        ->when($id, fn($query) => $query->where('id', '!=', $id))
        ->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class , 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class , 'updated_by');
    }

    public function workSkills()
    {
        return $this->belongsToMany(WorkSkill::class , 'job_work_skills', 'job_listing_id', 'work_skill_id')
            ->withPivot('level');
    }

    public function requirements()
    {
        return $this->hasMany(JobRequirement::class);
    }

    public function responsibilities()
    {
        return $this->hasMany(JobResponsibility::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'published')
            ->where(function ($q) {
            $q->whereNull('expires_at')
                ->orWhere('expires_at', '>', now());
        });
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)
            ->where('status', 'published')
            ->where(function ($q) {
            $q->whereNull('featured_until')
                ->orWhere('featured_until', '>', now());
        })
            ->orderBy('featured_until', 'desc');
    }
}
