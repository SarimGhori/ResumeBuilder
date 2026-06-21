<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resume;

class Education extends Model
{
    protected $fillable = [
        'resume_id',
        'degree',
        'institute',
        'start_year',
        'end_year',
        'grade',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
