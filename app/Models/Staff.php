<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ['nombre',
    'cargo',
    'facebook',
    'instagram',
    'youtube',
    'twitter',
    'status',
    'imagen'

];
}
