<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'resume';

    protected $fillable = [
        'user_id',
        'name', 'phone', 'email', 'city', 'postal_code',
        'school_name', 'field_of_study', 'degree', 'graduation_start_date', 'graduation_date',
        'job_title', 'workplace', 'job_description', 'work_load', 'start_date', 'end_date',
        'hobbies', 'interests', 'about'
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');;
    }

}
