<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccupiedJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_jobs_id',
        'occupied_job',
        'company_segment',
        'experience_time',
    ];
}
