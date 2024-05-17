<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = "g54_schedules";
    protected $fillable = [
        'employee_id',
        'attendance_date',
        'in_time',
        'out_time',
        'attendance_status',
        'total_hours',
    ];
}
