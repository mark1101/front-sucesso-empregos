<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCurriculumPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'company_plans_id',
        'quantity',
    ];
}
