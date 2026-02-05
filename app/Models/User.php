<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
use App\Mail\AccountVerificationMail;
use Illuminate\Queue\Worker;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser

{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'first_name',
        'last_name',
        'phone_number',
        'google_id',
        'published',
        'password',
        'email_verified_at',
        'last_login_at',
        'profile_completed',
        'location',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'published' => 'boolean'
        ];
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function profile()
    {
        return $this->hasOne(CandidateProfile::class);
    }


    public function experiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function skills()
    {
        return $this->hasMany(CandidateSkill::class);
    }

    public function documents()
    {
        return $this->hasMany(CandidateDocument::class);
    }


    public function getCompletionPercentageAttribute()
    {
        $completed = 0;
        $total = 6;

        $completed = (!empty($this->profile)) ? 1 : 0;
        $completed = (count($this->experiences) > 0) ? 1 + $completed : 0 + $completed;
        $completed = (count($this->education) > 0) ? 1 + $completed : 0 + $completed;
        $completed = (count($this->certifications) > 0) ? 1 + $completed : 0 + $completed;
        $completed = (count($this->skills) > 0) ? 1 + $completed : 0 + $completed;
        $completed = (count($this->documents) > 0) ? 1 + $completed : 0 + $completed;

        $result = round(($completed / $total) * 100, 0);

        return $result;
    }

    public function getUncompleteAttribute()
    {
        $uncomplete = array();

        (empty($this->profile)) ? array_push($uncomplete, 'profile') : '';
        (count($this->experiences) <= 0) ? array_push($uncomplete, 'Work experience') : '';
        (count($this->education) <= 0) ? array_push($uncomplete, 'Education') : '';
        (count($this->certifications) <= 0) ? array_push($uncomplete, 'Certifications') : '';
        (count($this->skills) <= 0) ? array_push($uncomplete, 'Skills') : '';
        (count($this->documents) <= 0) ? array_push($uncomplete, 'Documents') : '';


        return $uncomplete;
    }



    public function hasRole(string $role)
    {
        return $this->roles()->where('slug', $role)->exists();
    }

    public function hasPermissions(string $permission)
    {
        return $this->roles()->whereHas('permissions', function ($query) use ($permission) {
            $query->where('slug', $permission);
        })->exists();
    }


    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin;
    }
}
