<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'job',
        'description',
        'fb',
        'tw',
        'git',
        'in',
        'exp',
        'edu',
        'work',
    ];
}
