<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emphistory extends Model
{
    use HasFactory;
    protected $table = "g54_emphistories";
    protected $fillable =  [
        'employee_no',
        'start_date',
        'end_date'
    ];
}