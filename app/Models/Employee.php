<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'salary',
        'department',
        'profile_pic',
    ];

    public function getProfilePicAttribute($value)
    {
        return asset('uploads/' . $value);
    }
}