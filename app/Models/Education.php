<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory;

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