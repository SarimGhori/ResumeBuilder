<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resume;

class Skill extends Model
{
    protected $fillable = [
        'resume_id',
        'skill_name',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}