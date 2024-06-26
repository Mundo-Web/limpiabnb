<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribucion extends Model
{
    use HasFactory;

    protected $fillable = [
            'espacios_id',
            'name',
            'status',
            'visible'
        ];
    
}
