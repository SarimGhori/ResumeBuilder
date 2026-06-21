<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resume;

class Experience extends Model
{
    protected $fillable = [
        'resume_id',
        'job_title',
        'company_name',
        'start_date',
        'end_date',
        'description',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}