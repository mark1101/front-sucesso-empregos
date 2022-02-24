<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'street',
        'cep',
        'number',
        'complement',
        'state',
        'city',
        'birthday',
        'phone',
        'whatsapp',
        'email',
        'gender',
        'is_employed',
        'is_deficient',
        'have_cnh',
        'cnh_type',
        'salary_expectation',
        'hiring_type',
        'desired_function',
        'schooling',
        'formation',
        'educational_institution',
        'occupied_jobs_id',
        'courses_id',
        'additional_considerations',
        'curriculum_photo_url',
        'found_us',
    ];
}
