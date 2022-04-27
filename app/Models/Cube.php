<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cube extends Model
{
    public $timestamps = false;

    protected $fillable = ['cube'];

    protected $casts = [
        'cube' => 'array'
    ];
}
