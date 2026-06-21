<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resume;

class PersonalDetail extends Model
{
    protected $fillable = [
        'resume_id',
        'full_name',
        'phone',
        'email',
        'address',
        'linkedin',
        'github',
        'portfolio',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
