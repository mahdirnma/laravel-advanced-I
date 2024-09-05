<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'degree',
        'field',
        'orientation',
        'last_education_place',
        'degree_year',
        'birth_year',
        'is_active',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
