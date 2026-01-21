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

class User extends Authenticatable implements MustVerifyEmail
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
        ];
    }

    public function roles() : BelongsToMany{
        return $this->belongsToMany(Role::class);
    }

    public function profile() {
        return $this->hasOne(CandidateProfile::class);
    }


    public function experiences(){
        return $this->hasMany(WorkExperience::class);
    }

    public function education(){
        return $this->hasMany(Education::class);
    }

    public function hasRole(string $role){
        return $this->roles()->where('slug', $role)->exists();
    }

    public function hasPermissions(string $permission){
        return $this->roles()->whereHas('permissions', function ($query) use ($permission){
            $query->where('slug', $permission);
        })->exists();
    }





}
