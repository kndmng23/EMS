<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "g54_employees";
    protected $fillable = [
        'employee_id',      
        'last_name',
        'first_name',
        'middle_name',
        'date_of_birth',
        'age',
        'gender',        
        'email',
        'contact_no',
        'address',
        'department',
        'civil_status',           
        'work_status',
        'work_type',
        'position',
        'created_at'
    ];
}
