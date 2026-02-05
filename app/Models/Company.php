<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $fillable =[
        'name',
        'location',
        'contact_name',
        'contact_email',
        'phone_number',
        'logo',
        'published',
        'published_at',
        'created_by',
    ];


    protected $cast = [
        'published' => 'boolean',
        'published_at' => 'date'
    ];


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


}
