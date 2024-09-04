<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'start_date',
        'end_date',
        'professor_id',
        'is_active',
    ];
    public function professor(){
        return $this->belongsTo(Professor::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
