<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'professional_summary'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function personalDetail()
    {
        return $this->hasOne(PersonalDetail::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
