<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $table = "g54_positions";
    protected $fillable = [
        'department_id',
        'responsibilities',
        'requirements'
    ];

}
